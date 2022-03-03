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
            <th>User Name</th>
            <th>User Hotels</th>
            <th>Show Hotels</th>
            <th>Show Recommendation</th>

            <?php $result=mysqli_query($conn,"select * from users"); 
            
                while($row=mysqli_fetch_array($result))
                {
            ?>
           <tr> <td><?php echo $row['username'];?></td>
           <td>
               <form action="add_hotel.php" method="get">

                  <input type="submit" name="add_hotels" class="btn btn-primary" value="Add Hotels">  
                  <input type="hidden" name="id" value="<?php echo $row['id']?>">
                  <input type="hidden" name="username" value="<?php echo $row['username']?>">
               </form>
            </td>
            <td>
               <form action="show_hotels.php" method="get">

                  <input type="submit" name="show_hotels" class="btn btn-primary" value="Show Hotels">  
                  <input type="hidden" name="id" value="<?php echo $row['id']?>">
                  
               </form>
            </td>
            <td>
               <form action="user_recommendation.php">

                  <input type="submit" name="show_hotels" class="btn btn-primary" value="Show Recommendation">  
                  <input type="hidden" name="id" value="<?php echo $row['id']?>">
                  
               </form>
            </td>
        </tr>
            <?php } ?>
        </table>
    </div>
    </div>
</div>