<?php
            include('../dbConnection.php');
            if(isset($_POST['submit'])){
                $firstname      = $_POST['firstname'];
                $lastname       = $_POST['lastname'];
                $email          = $_POST['email'];
                $phonenumber    = $_POST['phonenumber'];
                $password       = $_POST['password'];
            
                $sql = "INSERT INTO admin_reg(firstname,lastname,email,phonenumber,password) VALUES('$firstname', '$lastname', '$email', '$phonenumber', '$password')";
                $conn->query($sql);
            }
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form design</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" class="stylesheet">
</head>
<body>
    

    <form action="" method="post">  
        
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h1>Registeration</h1>
                    <p>Fill the form with correct values.</p>
                    <hr class="mb=3">
                    
                    <label for="firstname"><b>First Name</b></label>
                    <input class="form-control" type="text" name="firstname" required>

                    <label for="lastname"><b>Last Name</b></label>
                    <input class="form-control" type="text" name="lastname" required>

                    <label for="email"><b>Email</b></label>
                    <input class="form-control" type="email" name="email" required>

                    <label for="phonenumber"><b>Phone Number</b></label>
                    <input class="form-control" type="number" name="phonenumber" required>

                    <label for="password"><b>Password</b></label>
                    <input class="form-control" type="password" name="password" required>
                    <hr class="mb=3">
                    
                    <input class="btn btn-primary" type="submit" name="submit" value="Sign up">
                <div>
            </div>
        </div>
        
    </form>
</body>
</html>