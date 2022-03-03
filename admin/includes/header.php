<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE?></title>
    <!--Bootstrap css-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

     <!--Font Awesome css-->
     <link rel="stylesheet" href="../css/all.min.css">

     <!--Custom css-->
     <link rel="stylesheet" href="../css/custom.css">
     
</head>
<body>

<nav class="navbar navbar-light fixed-top bg-white 
      navbar-expand-lg flex-md-nowrap p=0 shadow">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hotels in Nepal</a>
  </div>
</nav>

<div class="container-fluid" style="margin-top:40px;">
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'dashboard'){echo 'active';} ?>" href="dashboard.php">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'hotels'){echo 'active';} ?>" href="hotel.php">
                        <i class="fas fa-hotel"></i>Hotels</a></li>
                        <li class="nav-item"><a class="nav-link <?php if(PAGE == 'bookings'){echo 'active';} ?>" href="booking_master.php">
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