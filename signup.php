<?php 
    include('dbConnection.php');
    if(isset($_REQUEST['rSignup'])){

    //Assigning user's values to Variables
    $uname=$_REQUEST['u_name'];
    $rEmail = $_REQUEST['email'];
    $rPassword = $_REQUEST['pass'];
    // $rAddress = $_REQUEST['address'];
    $rGender = $_REQUEST['gender'];

    $sql = "INSERT INTO users(username,email,password,gender) VALUES('$uname','$rEmail', '$rPassword', '$rGender')";
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
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
     <img src="room.jpg" alt="Italian Trulli" style="width:100%;height:100%;"> 
    
    <div class="center">
        <h1>Register</h1>
        <form method="post">
        <div class="txt_field">
                <input type="text" name="u_name" required>
                <span></span>
                <label>Username</label>
            </div>

            <div class="txt_field">
                <input type="email" name="email" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt_field">
                <input type="password" name="pass" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="txt_field">
                <input type="text" name="address" required>
                <span></span>
                <label>Address</label>
            </div>
           
            <div class="gender-details">
                <input type="radio" value="male" id="dot-1" name="gender">
                <input type="radio" value="female" id="dot-2" name="gender">
                <input type="radio" value="other" id="dot-3" name="gender">
                <span class="gender-title">Gender</span>
                <div class="category">
               <label for="dot-1">
                   <span class="dot one"></span>
                   <span class="gender">Male</span>

               </label>
               <label for="dot-2">
                   <span class="dot two"></span>
                   <span class="gender">Female</span>
                   
               </label>
               <label for="dot-3">
                   <span class="dot three"></span>
                   <span class="gender">Others</span>
                   
               </label>
               </div>
            </div>
    
            <input type="Submit" value="Login" name="rSignup">
            <div class="signup_link">
                Already a member? <a href="signin.php">Sign in</a>
            </div>
</form>
</body>
</html>