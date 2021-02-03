<?php
include '..\vendor\autoload.php';

use App\Controller\Staff;

/**
 *
 */

$staff=new Staff();
$user_id=$_POST['id'];


$data=$staff->showStaff($user_id);

$user_data=$data->fetch_assoc();

echo json_encode($user_data);