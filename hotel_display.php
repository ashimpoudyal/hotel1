<?php 

include("includes/header.php");
include("dbConnection.php");
?>
<div class="container-fluid" style="margin-top:40px;">
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'dashboard'){echo 'active';} ?>" href="dashboard.php">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'hotels'){echo 'active';} ?>" href="hotel.php">
                        <i class="fas fa-hotel"></i>Hotels</a></li>
                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'bookings'){echo 'active';} ?>" href="bookings.php">
                        <i class="fas fa-align-center"></i>Bookings</a></li>
                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'bookings'){echo 'active';} ?>" href="room_type.php">
                        <i class="fas fa-align-center"></i>Rooms</a></li>
                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'customers'){echo 'active';}?>" href="customer_details.php">
                        <i class="fas fa-user"></i>Customers</a></li>
                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'change password'){echo 'active';}?>" href="change_pass.php">
                        <i class="fas fa-key"></i>Change Password</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">
                        <i class="fas fa-sign-out-alt"></i>Logout</a></li>
                    </ul>
                </div>
            </nav><!-- End side Bar 1st column -->
        
  
            <?php  
                     
                               
                     $result=mysqli_query($conn,"select * from hotels");
                         while($row=mysqli_fetch_array($result)){

                             ?>
<div class="col-sm-9 col-md ml-6" style="max-width: 100%;" >
  <div class="row g-2">
    <div class="col-md">
  
    <img src="<?php echo "img/".$row['image']; ?>" width="200px" height="200px" alt="Img">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['property_name'];?></h5>
        <p class="card-text"><?php echo $row['area']?>,<?php echo $row['city']?></p>
        <i class="fas fa-parking"></i>
        <span class="mr-4">Parking Facility</span>
        
        <i class="far fa-check-circle ml-9"></i>
        <span>Reception</span>
      
        <i class="fas fa-wifi"></i>
        <span>Free Wifi</span> 
        
        <span class="ml-5">More</span>
        <h5 class="card-title">Nrs <?php echo $row['price'];?></h5>
        <form action="hotel_booking.php" method="GET">
        <input type="submit" name="booking_submit" id="submit" value="See Availability" class="btn btn-primary btn-block" style="margin-top:22px;">
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
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
                         </div>
<?php 

include("includes/footer.php");

?>