<?php
include_once "../vendor/autoload.php";

use App\Controller\Staff;

$staff=new Staff();



$user_id =$_POST['id'];

$data=$staff->deleteStaff($user_id);

if($data==true){


    echo "<p class='text-success'> Data deleted <button class='close' data-dismiss='alert'>&times;</button></p>";
}


