<?php 

session_start();
if(isset($_GET['id']))
{
    $_SESSION['id']=$_GET['id'];
}
if(isset($_GET['username']))
{
    $_SESSION['username']=$_GET['username'];
}
include("header.php");
include("../../dbConnection.php");

if(isset($_POST['submit'])){
mysqli_query($conn,"insert into user_hotels(user_id,username,hotelname,location,rating)values('$_SESSION[id]','$_SESSION[username]',
'$_POST[hotel_name]','$_POST[location]','$_POST[rating]')");
}

?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
            <a href="add_hotels.php">Add Hotels</a>
            <a href="btn btn-info pull-right" href="index.php"></a>
        </h2>
    </div>
    <div class="panel-body">
        <form method="post">
        <div class="form-group">    
        <label for="username">Hotel Name</label>
            <input type="text" name="hotel_name" id="hotel_name" class="form-control" required>
            </div>
            <div class="form-group">    
        <label for="username">Location</label>
            <input type="text" name="location" id="location" class="form-control" required>
            </div>
            <div class="form-group">   
            <label for="username">Rating</label>
            <input type="number" name="rating" id="number" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
</div>
