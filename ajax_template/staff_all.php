<?php
    include_once "../vendor/autoload.php";

    use App\Controller\Staff;


    $staff = new Staff;
    $data = $staff -> allStaff();

    $i = 1;
    while($d = $data -> fetch_assoc()) :
        ?>


        <tr>
            <td><?php echo $i;$i++; ?></td>
            <td><?php echo $d['Name']; ?></td>
            <td><?php echo $d['Email']; ?></td>
            <td><?php echo $d['cell']; ?></td>
            <td><img src="photos/staff/<?php echo $d['photo']; ?>" alt=""></td>
            <td>
                <a class="btn btn-sm btn-info" id="view" show_id="<?php echo $d['id']?>"href="#" data-toggle="modal">View</a>
                <a class="btn btn-sm btn-warning" href="#">Edit</a>
                <a  id="delete-id" delete-id="<?php echo $d['id']?>" class="btn btn-sm btn-danger" href="#">Delete</a>
            </td>
        </tr>




    <?php

    endwhile;

