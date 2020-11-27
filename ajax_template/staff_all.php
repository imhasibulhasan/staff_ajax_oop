<?php
    include_once "../vendor/autoload.php";

    use Ura\Dhura\Controller\Staff;


    $staff = new Staff;
    $data = $staff -> allStaff();

    $i = 1;
    while($d = $data -> fetch_assoc()) :
        ?>


        <tr>
            <td><?php echo $i;$i++; ?></td>
            <td><?php echo $d['name']; ?></td>
            <td><?php echo $d['email']; ?></td>
            <td><?php echo $d['cell']; ?></td>
            <td><img src="photos/staff/<?php echo $d['photo']; ?>" alt=""></td>
            <td>
                <a class="btn btn-sm btn-info" id="staff-view-id" view-id="<?php echo $d['id']; ?>"  href="#">View</a>
                <a class="btn btn-sm btn-warning" id="staff-update-id" update-id="<?php echo $d['id']; ?>" href="#">Edit</a>
                <a class="btn btn-sm btn-danger" id="delete-id" staff-delete="<?php echo $d['id']; ?>" href="#">Delete</a>
            </td>
        </tr>




    <?php

    endwhile;

