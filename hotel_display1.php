<?php 

include("dbConnection.php");

session_start();

if(isset($_SESSION['is_login'])){
  include("includes/loggedin.php");
}else{
  include("includes/header.php");
}
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/all.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/rating.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Hotel</title>
</head>
<body>
<!-- Start Navigation -->
<!--  -->

              
             

<?php $imagequery=mysqli_query($conn,"select * from hotels");
                     
                      
                      
                     while($row=mysqli_fetch_array($imagequery)){

                     

                     
                            ?>
<div class="container">

<div class="col-sm-9 col-md ml-6" style="max-width: 100%;" >
  <div class="row g-2">
    <div class="col-md">
    <img src="<?php echo "admin/img/".$row['img'];?>" width="200px" height="200px" alt="Img">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        
        <h5 class="card-title"><?php echo $row['hotelname'];?></h5>
        
        <i class="fas fa-parking"></i>
        <span class="mr-4">Parking Facility</span>
        
        <i class="far fa-check-circle ml-9"></i>
        <span>Reception</span>
      
        <i class="fas fa-wifi"></i>
        <span>Free Wifi</span> 
        
        <span class="ml-5">More</span>
        <!-- <a href="hotel_booking.php?id="></a> -->
        <form action="hotel_booking.php" method="GET">
        <input type="submit" name="booking_submit" id="submit" value="See Availability" class="btn btn-primary btn-block" style="margin-top:22px;">
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        </form>
        </div>
        </div>  
        <hr>
 
        
        </div>
     
          
      </div>
    <!-- <div class="col-md-4">
      <img src="img/hotel.jpg" class="img-fluid rounded-start" alt="..."  style="height:100%;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Radisson</h5>
        <p class="card-text">Sundhara, Kathmandu</p>
       
        <form action="hotel_booking" method="POST">
        <input type="submit" name="submit" id="submit" value="See Availability" class="btn btn-primary btn-block" style="margin-top:22px;">
        </form>
   
      </div>
    </div>
  </div>
  <hr>
<div class="row g-0">
    <div class="col-md-4">
      <img src="img/hotel.jpg" class="img-fluid rounded-start" alt="..."  style="height:100%;">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Radisson</h5>
        <p class="card-text">Sundhara, Kathmandu</p>
       
        <form action="hotel_booking" method="POST">
        <input type="submit" name="submit" id="submit" value="See Availability" class="btn btn-primary btn-block" style="margin-top:22px;">
        </form>
   
      </div>
    </div>
  </div>
 --> 
                     </div>

              
          
            <?php
                     }
include("includes/footer.php");

?>