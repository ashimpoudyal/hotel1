<?php 

include("dbConnection.php");

session_start();



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
<?php 
            
            if(isset( $_SESSION['is_login'])){
              ?>
              
              <nav class="navbar navbar-expand-lg navbar-light bg-white">
             
             <div class="container">

    <a class="navbar-brand" href="index.php">Hotels in Nepal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="aboutus.php">About us</a>
        </li>
        
          
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
        </li>
      </ul>
      <div class="float-end">
      <div class="float-end">
      <button type="button" class="btn btn-danger" onclick="location.href = 'logout.php';">Logout</button>
</div>
</div>
     
      </div>
  </div>
</nav>
<div class="container">
            <?php
            include("admin/alg/recommend.php");
                     
                     $hotels = mysqli_query($conn,"select * from user_hotels");
                     $matrix=array();
                     while($hotel=mysqli_fetch_array($hotels)){
                      
                         $users=mysqli_query($conn,"select username from users where id=$hotel[user_id]");
                         $username=mysqli_fetch_array($users);
                     
                         $matrix[$username['username']][$hotel['hotelname']]=$hotel['rating'];
                     }
                     $users=mysqli_query($conn,"select username from users where id= $_SESSION[USER_ID]");
                     $username=mysqli_fetch_array($users);
                     
                     $recommendation=array();
                    //  $us = mysqli_query($conn, "select * from user_hotels where username=$username[username]");
                    //  $userrecord = mysqli_fetch_array($us);
                    // //  print_r("I am here");
                    //  if(isset($userrecord)){
                     $recommendation=getRecommendation($matrix,$username['username']);

                     foreach($recommendation as $hotel=>$rating){
                      // $imagequery=mysqli_query($conn,"select hotels.id,hotels.img,hotels.location,hotels.price 
                      // from hotels,user_hotels where hotels.id=user_hotels.hotel_id and hotels.hotelname='$hotel'");
                      
                      $imagequery=mysqli_query($conn,"select * from hotels where hotelname='$hotel'");
                     
                      
                      
                      $row=mysqli_fetch_array($imagequery);

                      

                      
                             ?>
<div class="col-sm-9 col-md ml-6" style="max-width: 100%;" >
  <div class="row g-2">
    <div class="col-md">
    <img src="<?php echo "admin/img/".$row['img'];?>" width="200px" height="200px" alt="Img">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        
        <h5 class="card-title"><?php echo $hotel?></h5>
        
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
  <?php } ?>
        
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
            else{
              ?>
              <nav class="navbar navbar-expand-lg navbar-light bg-white">
             
             <div class="container">
           
               <a class="navbar-brand" href="index.php">Hotels in Nepal</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarScroll">
                 <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                   <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="#">Booking</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="#">Facilities</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="aboutus.php">About us</a>
                   </li>
                   
                     
                   <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="contact.php">Contact</a>
                   </li>
                 </ul>
                 <div class="float-end">
                 <div class="float-end">
                 <button class="btn btn-outline-success button" type="button" onclick="location.href = 'signup.php';">Sign up</button>
      <button class="btn btn-outline-success button" type="button" onclick="location.href = 'signin.php';">Sign in</button>
           </div>
           </div>
                
                 </div>
             </div>
           </nav>
           <?php
              echo "Please login to get receommendation.";
            } ?>
            <?php
include("includes/footer.php");

?>