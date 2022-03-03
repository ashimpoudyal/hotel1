<?php 
    include('dbConnection.php');
    session_start();
    if(!isset($_SESSION['is_login'])){
            if(isset($_REQUEST['rSubmit'])){
            $rUsername = trim($_REQUEST['username']);
            
            $rPassword = trim($_REQUEST['pass']);

            

            $sql = "SELECT id,email,username,password FROM users WHERE username = 
            '".$rUsername."' AND password = '".$rPassword."' limit 1";
            $result = $conn->query($sql);
            if($result->num_rows == 1){
                $row=mysqli_fetch_assoc($result);
                $_SESSION['is_login'] = true;
                $_SESSION['username'] = $rUsername;
                $_SESSION['USER_ID']=$row['id'];
                // $_SESSION['username']=$row['username'];
                if(isset($_REQUEST['remember'])){
                setcookie('email','$rEmail',time()+60*60*7);
                setcookie('pass','$rPassword',time()+60*60*7);
                }
                echo "<script> location.href='user.php' </script>";
                exit;
            }else{
            $msg =  '<div class="alert alert-warning mt-2">Enter valid email and password</div>';
            }
        }
    }else{
        
            echo "<script> location.href='user.php' </script>";
    }
    if(isset($_SESSION['is_login']) && $_SESSION['is_login']=='yes'){
    }
        
        ?>
        
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form design</title>
    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
     <img src="room.jpg" alt="Italian Trulli" style="width:100%;height:100%;"> 
    
    <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="txt_field">
                <input type="username" name="username" required>
                <span></span>
                <label>Username</label>
               
            </div>
            
            <div class="txt_field">
                <input type="password" name="pass" required>
                <span></span>
                <label>Password</label>
            </div>
            <input type="Submit" name=rSubmit value="Login">
            <br>
            <?php if(isset($msg)) {echo $msg;} ?>
            <div class="signup_link">
                Not a member? <a href="signup.php">Signup</a>
            </div>
            
</form>
 <?php
        if(isset($_COOKIE['username']) and isset($_COOKIE['pass'])){
            $email = $_COOKIE['username'];
            $pass = $_COOKIE['pass'];

            echo "<script>
                document.getElementById('username').value = '$username';
                document.getElementById('pass').value = '$pass';
            
            </script>";
        }
 ?>
</body>
</html>