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
            <div class="col-sm-9 col-md-10">
           <table class="table">
               <thead>
               <tr>
                    <td>Room Type</td>
                    <td>Room Desc</td>
                    <td>Img</td>
                    <td>Reserve</td>
                </tr>
               </thead>
               <tbody>
               <?php 
        
                        
                     $hotel_id = $_GET['id']; 
                    
                     $query = "SELECT * FROM room WHERE hotel_id='$hotel_id'";
                     $query_run = mysqli_query($conn,$query);
                     foreach($query_run as $row)
                     {
                ?>
                <tr> 
                                        <td><?php echo $row['room_type'];?></td>
                                        <td><?php echo $row['room_desc'];?></td>
                                        <td>
                                        <img src="<?php echo "img/".$row['img'];?>" alt="img" width="100px">
                                        </td>
                                        <td>
                                        <form action="booking.php" method="POST">
                                        <button type="submit" name="Reserve" class="btn btn-primary">Reserve</button>
                                        </form>
                                        </td>
                </tr>
                <?php }  ?>
               </tbody>
           </table>
                     </div>
                     </div>

<?php 
include("includes/footer.php");
?>
            
               

        