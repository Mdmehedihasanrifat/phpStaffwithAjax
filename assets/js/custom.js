(function($){
    $(document).ready(function() {

        // Staff image load
        // $('input#staff-photo').change(function(e){
        //     let file_url  = URL.createObjectURL(e.target.files[0]);
        //     $('img#staff-photo-load').attr('src', file_url);
        // });


       $('input#staff-photo').change(function (e){

           let file_url=URL.createObjectURL(e.target.files[0]);
           $('img#staff-photo-load').attr('src',file_url);
           $('img#Image_load').hide();

           $('a#remove_photo').show();
       })



        $(document).on('click','a#remove_photo',function (){
            $('img#staff-photo-load').attr('src','');
            $('img#Image_load').show();

            $('a#remove_photo').hide();

        })
        // Staff form validation
        $(document).on('submit','form#staff-form', function(event){
            event.preventDefault();

            let name = $('form#staff-form input[name="name"]').val();
            let email = $('form#staff-form input[name="email"]').val();
            let cell = $('form#staff-form input[name="cell"]').val();

            if (name == '' || email == '' || cell == ''){
                $('.modal-msg').html('<p class="alert alert-danger"> All fields are required  !<button class="close" data-dismiss="alert">&times;</button></p>');
            }else {

                $.ajax({
                    url : 'ajax_template/staff_add.php',
                    method : "POST",
                    data : new FormData(this),
                    contentType : false,
                    processData:  false,
                    success : function(data){
                        // $('.modal-msg').html(data);
                        $('form#staff-form')[0].reset();
                        $('img#staff-photo-load').attr('src', '');

                        allStaff();
                    }
                });

            }

        });

      $(document).on('click','a#delete-id',function (event){

          event.preventDefault();
         let user_id=$(this).attr('delete-id');


         let con=confirm("Are you sure");
         console.log(con);

         if(con==false){

             return false;
         }

         else{


             $.ajax({
                 url:'ajax_template/staff_delete.php',
                 method:'POST',
                 data:{ id : user_id},
                 success:function( data){
                     $('.msg').html(data)
                     allStaff();

                 }



             })
         }
      })


        //
        // All staff load
        allStaff();
        function allStaff(){
            $.ajax({
                url : 'ajax_template/staff_all.php',
                success : function(data){
                    $('tbody#staff_all').html(data);

                }
            });
        }



    //view staff
        $(document).on('click','a#view',function (event){

            event.preventDefault();

            let show_id=$(this).attr('show_id');


            $.ajax({

                url:'ajax_template/staff_show.php',
                method:'POST',
                data:{id:show_id},
                success:function (data) {


                    let single_data = JSON.parse(data);

                    console.log("photos/staff/"+single_data.photo);

                 $('#user-img img').attr('src', 'photos/staff/'+single_data.photo);
                 $('#user-img img').css({ "width":"200px","height":"200px","display":"block","margin":"0 auto","border-radius":"50%"});
                 $('#staff-view').modal('show');
                }

            })

        });


    });
})(jQuery)