<?php
session_start();
        if(isset($_GET['id']))
        {
            $_SESSION['id']=$_GET['id'];
        }
    include("main.php");
    include('../../dbConnection.php');

    $flag = 0;

    if(isset($_POST['submit'])){
       $result = mysqli_query($conn,"insert into user_hotels(user_id,hotel_name,hotel_rating)values('$_SESSION[id]','$_POST[hotel_name]','$_POST[hotel_rating]')");
        if($result){
            $flag = 1;
        }
    }
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
            <a class="btn btn-success" href="add.php">Add Hotels</a>
            <a class="btn btn-info pull-right" href="index.php">Back</a>
        </h2>
    </div>

    <?php if($flag){?>
    
        <div class="btn btn-success">Hotel Successfully Inserted in the database </div>


    <?php } ?>

    <div class="panel-body">
        <form action="add_hotels.php" method="post">
            <div class="form-group">
                <label for="username">Hotel Name</label>
                <input type="text" name="hotel_name" id="hotel_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="username">Rating</label>
                <input type="number" name="hotel_rating" id="hotel_rating"" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="submit" class="btn btn-primary" required>
            </div>
        </form>
    </div>
</div>