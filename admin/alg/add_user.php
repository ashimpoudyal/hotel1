<?php
// include("includes/header.php");
include("../../dbConnection.php");

if(isset($_POST['submit'])){
    mysqli_query($conn,"insert into users(username)values('$_POST[username]')");
}
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
            <a href="add.php">Add Hotels</a>
            <a href="btn btn-info pull-right" href="index.php"></a>
        </h2>
    </div>
    <div class="panel-body">
        <form method="post">
        <div class="form-group">    
        <label for="username">User Name</label>
            <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="submit" class="btn btn-primary" required>
            </div>
        </form>
    </div>
</div>
</div>