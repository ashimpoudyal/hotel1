<?php

include("header.php");
include("../../dbConnection.php");

?>

<div class="panel panel-default">
    <div class="panel-heading">

    <div class="panel-heading">
        <h2>
            <a class="btn btn-success" href="add_users.php">Add Users</a>
            <a href="btn btn-info pull-right" href="index.php">Back</a>
        </h2>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <th>Hotel Name</th>
            <th>Location</th>
            <th>Rating</th>

            <?php $result=mysqli_query($conn,"select * from user_hotels where user_id='$_GET[id]'"); 
            
                while($row=mysqli_fetch_array($result))
                {
            ?>
           <tr> <td><?php echo $row['hotelname'];?></td>
            <td><?php echo $row['location'];?></td>
            <td><?php echo $row['rating'];?></td>
        </tr>
            <?php } ?>
        </table>
    </div>
    </div>
</div>