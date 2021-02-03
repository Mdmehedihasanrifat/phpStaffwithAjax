<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
	<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
	
	

	<div class="wrap-table ">
        <a data-toggle="modal" class="btn btn-primary btn-sm" href="#staff-modal">Add new staff</a>
        <br>
        <br>
		<div class="card shadow">
			<div class="card-body">
				<h2>All Staff</h2>
                <p class="msg"></p>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="staff_all">

						

					</tbody>
				</table>
			</div>
		</div>
	</div>
	

    <!-- Staff add modal-->
    <div id="staff-modal" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add new Staff</h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="modal-msg"></div>
                    <form id="staff-form" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input name="name" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="email" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <label for="">Cell</label>
                            <input name="cell" class="form-control" type="text">
                        </div>

                        <div class="form-group">
                            <img style="max-width: 100%;" id="staff-photo-load" src="" alt="">

                            <input name="photo" style="display: none;" class="form-control" type="file" id="staff-photo">
                            <label for="staff-photo"><img  id="Image_load" style="width: 100px; cursor: pointer;" src="assets/media/img/12634-200.png" alt=""></label>
                            <a href="#"  id="remove_photo" style="display: none">Remove</a>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Add">
                        </div>
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>


<!--staff view modal-->
    <div id="staff-view" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text">
                    <h4 class="modal-title text-center">Staff info</h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body text-center">
                    <div id="user-img">
                  <img   src="photos/staff/7c6ac1bec19c55d20b4ee6b57bc62e92IMG_20210105_1702286.jpg">
                    </div>


                    <h2>Md Mehedi hasan</h2>
                    <table class="table table-striped">
                        <tr>
                            <td>Name</td>
                            <td>Md Mehedi Hasn</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>Email</td>
                        </tr>
                        <tr>
                            <td>cell</td>
                            <td>cell</td>
                        </tr>


                    </table>



                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>

	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>