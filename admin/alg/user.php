<?php

include("../dbConnection.php");

?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
            <a class="btn btn-success" href="add.php">Add Hotels</a>
            <a class="btn brn-info pull-right" href="index.php">Back</a>
        </h2>
        
    </div>

    <div class="panel-body">
        <form action="add-user.php" method="post">
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