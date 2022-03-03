<?php

session_start();
include("../../dbConnection.php");
include("recommend.php");



$hotels = mysqli_query($conn,"select * from user_hotels");
$matrix=array();
while($hotel=mysqli_fetch_array($hotels)){

    $users=mysqli_query($conn,"select username from users where id=$hotel[user_id]");
    $username=mysqli_fetch_array($users);
	

    $matrix[$username['username']][$hotel['hotelname']]=$hotel['rating'];
}
$users=mysqli_query($conn,"select username from users where id=$_GET[USER_ID]");
$username=mysqli_fetch_array($users);

$recommendation=array();
var_dump(getRecommendation($matrix,$username['username']));

?>













