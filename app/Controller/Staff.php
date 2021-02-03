<?php

    namespace App\Controller;

    use App\Support\Database;

    /**
     * Class Staff
     * @package App\Controller
     */













    class Staff extends Database {

        /**
         * Staff add to Database
         * @param $name
         * @param $email
         * @param $cell
         */
        public function createStaff($name, $email, $cell, $unique_name){
            $sql = "INSERT INTO staff (Name, Email, cell, photo) VALUES ('$name','$email','$cell', '$unique_name')";
            $data = $this ->create($sql);

            if ($data) {
                return true;
            }else {
                return false;
            }
        }


        /**
         * All staff
         * @return bool|\mysqli_result
         */
        public function allStaff(){
            return $this ->all('staff');
        }

        public function deleteStaff($user_id)
        {
            $delete_data_user=$this->find('staff',$user_id);
            $delete_data=$delete_data_user->fetch_assoc();


            unlink('../photos/staff/'.$delete_data['photo']);

     $data=$this->delete('staff',$user_id);
            if ($data) {
                return true;
            }else {
                return false;
            }

    }


    public function showStaff($user_id){

        return $this->showSingle('staff',$user_id);
    }




    }
