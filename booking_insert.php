<?php

include('dbConnection.php');


session_start();

$hotel_name = $_POST['hname'];
$room_type = $_POST['room_type'];
$rooms = $_POST['totalroom'];
$price = $_POST['price'];
$image = $_POST['room_image'];

// print_r($price);
if(isset($_POST['reserve'])){

        // $check_hotel = array_column( $_SESSION['hotel']['roomType']);
       
       
   
    $_SESSION['hotel'][] = array('hotelName' => $hotel_name, 
                                'roomType' =>$room_type, 
                                'Trooms' =>  $rooms,
                                'Hprice'=>$price,
                                'Rimage'=>$image);
                                header("location:booking.php");
    
}

//     //remove product

    if(isset($_POST['remove'])){
        foreach($_SESSION['hotel'] as $key => $value){
            if($value['roomType'] === $_POST['item']){
                unset($_SESSION['hotel'][$key]);
                $_SESSION['hotel'] = array_values($_SESSION['hotel']);
                header('location:hotel_display1.php');
            }
        }
    }

 ?>