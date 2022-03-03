<?php
session_start();
        
    // include("includes/header.php");
    include('../dbConnection.php');
    if(isset($_GET['id']))
        {
            $_SESSION['id']=$_GET['id'];
        }
        if(isset($_GET['hotelname']))
        {
            $_SESSION['hotelname']=$_GET['hotelname'];
        }
        if(isset($_GET['price']))
        {
            $_SESSION['price']=$_GET['price'];
        }

    $flag = 0;

    if(isset($_POST['submit'])){
       $result = mysqli_query($conn,"insert into room(hotel_id,hotel_name,price,room_type,img,room_desc)values('$_SESSION[id]','$_SESSION[hotelname]','$_SESSION[price]','$_POST[room_type]','$_POST[img]','$_POST[room_desc]')");
        if($result){
            $flag = 1;
        }
    }
?>
<div class="col-sm-9 col-md-10">
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
            <a class="btn btn-success" href="add.php">Add Hotels</a>
            <a class="btn btn-info pull-right" href="index.php">Back</a>
        </h2>
    </div>

    <?php if($flag){?>
    
        <div class="btn btn-success">Room Successfully Inserted in the database </div>


    <?php } ?>
    
    <div class="panel-body">
        <form action="add_room.php" method="post">
            <div class="form-group">
                <label for="type">Room Type</label>
                <input type="text" name="room_type" id="room_type" class="form-control" required>
            </div>
            <label for="myfile">Select a file:</label>
            <input type="file" id="img" name="img">   
            <div class="form-group">
                <label for="desc">Room desc</label>
                <input type="text" name="room_desc" id="room_desc" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="submit" class="btn btn-primary" required>
            </div>
        </form>
    </div>
</div>
</div>