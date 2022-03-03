<?php 

include("includes/header.php");
include("dbConnection.php");
include("admin/alg/user_recommendation.php");
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
            foreach ($recommendation as $hotel=>$rating) {
                $imagequery = mysqli_query($con, "select hotels.id,hotels.img from hotels,user_hotels where hotels.id=user_hotels.hotel_id and hotels.hotel_name='$hotel'");
                $list = mysqli_fetch_array($imagequery);  
                ?>
                <div class="profile_recommend">
				 	<div class="tooltip">
				<img src="<?php echo $list['img']; ?>">
				<span class="tooltiptext"><?php echo $rating; ?></span>
			</div>
					<div class="profile_right">
						<a href="" >
						<?php 
						echo $list['hotel_name'] . " " . $list['username'];
			 			?>
						</a>
						<br/>
					<?php
						echo'<input  type="submit" name="add_friend" class="success" value="Add Friend"></br>';
				}
				?>

                <table>
		<tr>
			<td>

                
                         </div>
                         </div>
            </div>
<?php 

include("includes/footer.php");

?>