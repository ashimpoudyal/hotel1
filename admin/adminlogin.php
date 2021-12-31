<?php 
    include('../dbConnection.php');
    session_start();
    if(!isset($_SESSION['is_adminlogin'])){
            if(isset($_REQUEST['aEmail'])){
            $aEmail = trim($_REQUEST['aEmail']);
            $aPassword = trim($_REQUEST['aPass']);

            $sql = "SELECT email, password FROM admin_reg WHERE email = 
            '".$aEmail."' AND password = '".$aPassword."' limit 1";
            $result = $conn->query($sql);
            if($result->num_rows == 1){
                $_SESSION['is_adminlogin'] = true;
                $_SESSION['aEmail'] = $aEmail;
                if(isset($_REQUEST['remember'])){
                setcookie('email','$rEmail',time()+60*60*7);
                setcookie('pass','$rPassword',time()+60*60*7);
                }
                  echo "<script> location.href='dashboard.php' </script>";
                exit;
            }else{
            $msg =  '<div class="alert alert-warning mt-2">Enter valid email and password</div>';
            }
        }
    }else{
        
            echo "<script> location.href='dashboard.php' </script>";
    }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form design</title>
    <link rel="stylesheet" href="css/admin_signin.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
     <!-- <img src="room.jpg" alt="Italian Trulli" style="width:100%;height:100%;">  -->
    
    <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="txt_field">
                <input type="email" name="aEmail" required>
                <span></span>
                <label>Email</label>
               
            </div>
            
            <div class="txt_field">
                <input type="password" name="aPass" required>
                <span></span>
                <label>Password</label>
            </div>
            <input type="Submit" name=aSubmit value="Login">
            <br>
            <?php if(isset($msg)) {echo $msg;} ?>
            <div class="signup_link">
                Not a member? <a href="signup.php">Signup</a>
            </div>
            
</form>



    
</body>
</html>