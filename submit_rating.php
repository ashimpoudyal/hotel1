<?php
session_start();
include('dbConnection.php');
$rating = $_POST['rating'];
$hotel_id = $_POST['hotel_id'];
$user_id = $_SESSION['USER_ID'];
$sql="Insert into user_hotels(user_id,hotel_id,rating)values($user_id,$hotel_id,$rating)";
$result = mysqli_query($conn,$sql);
// echo $rating;
// echo $hotel_id;
// echo $user_id;




?>