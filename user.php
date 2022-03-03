<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
 
    <div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hotels in Nepal</a>
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
          <a class="nav-link active" aria-current="page" href="#">About us</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
      </ul>
      <div class="float-end">
      <button type="button" class="btn btn-danger" onclick="location.href = 'logout.php';">Logout</button>
</div>
      </div>
  </div>
</nav>

<!-- End Navigation --> 
<div class="hotel" class="tab-pane fade in active" style="background-color:white;">
                  <div id="error"></div>
						     
                  <form method="get" class="colorlib-form" action="hotel_display1.php">
            <div class="row">
				              	 <div class="col-md-2">
				              	 	<div class="booknow">
				              	 		<h2>Check availability</h2>
					              	 	<span>Reserve now</span>
				              	 	</div>
				              	 </div>
				                <div class="col-md-2">
				                  <div class="form-group" class="hh">
				                    <label for="date">Check-in:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="date" id="cin" name="cin" class="form-control date" placeholder="Check-in date" required>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group" class="hh">
				                    <label for="date">Check-out:</label>
				                    <div class="form-field">
				                      <i class="icon icon-calendar2"></i>
				                      <input type="date" id="cout" name="cout" class="form-control date" placeholder="Check-out date" required>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group" class="hh">
				                    <label for="guests">Guest</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="people" id="people" class="form-control" required>
				                        <option value="#">1</option>
				                        <option value="#">2</option>
				                        <option value="#">3</option>
				                        <option value="#">4</option>
				                        <option value="#">5+</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-md-2">
				                  <div class="form-group" class="hh">
				                    <label for="room">Rooms</label>
				                    <div class="form-field">
				                      <i class="icon icon-arrow-down3"></i>
				                      <select name="room" id="room" class="form-control" required>
				                        <option value="#">1</option>
				                        <option value="#">2</option>
				                        <option value="#">3</option>
				                        <option value="#">4</option>
				                        <option value="#">5+</option>
				                      </select>
				                    </div>
				                  </div>
				                </div>
				                <div class="col-2">
				                  <input type="submit" name="submit" id="submit" value="Check now" class="btn btn-primary btn-block" style="margin-top:22px;">
				                </div>
				              </div>
</form>
				          
						   </div>

  <div class="card-group">
    <div class="card">
    <img class="card-img-top" src="img/1.jpg" alt="Card image cap" height="400" width="500">
    
    <div class="card-img-overlay">
        <br/> <br/> 
      <h5 class="card-title center">FIND YOUR PERFECT PLACE TO STAY</h5>
      <p class="card-text"> We offer the best hotels in Nepal and a wide range of accommodation
 for our customers worldwide. </p>
    </div>
    
  </div>
  <div class="card">
    <img class="card-img-top" src="img/hotel.jpg" alt="Card image cap" height="400" width="500">
  </div>
  </div>

  <br><br>
  <div class="container">
        <span class="float-front">Some Hotels With Their Price</span>    
        <!-- <button type="button" class="button float-end">View All</button>
      <br><br> -->
      <div class="row row-cols-1 row-cols-md-4 g-2">
     
      <div class="col">
      <div class="card" style="width: 17rem; height:23rem">
  <img src="img/download.jpg" class="card-img-top" alt="..." width="500">
  <div class="card-body">
  <span>Kathmandu, Nepal<span>
    <h5 class="card-title">Everest Hotel</h5>
    <p class="card-text">$200 per night</p>
    <!-- <a href="#" class="btn btn-primary">View Photos</a> -->
  </div>
</div>
  </div>

  <div class="col">
  <div class="card" style="width: 17rem; height:23rem">
  <img src="img/anna.jpg" class="card-img-top" alt="..." width="500" height="191">
  <div class="card-body">
  <span>Kathmandu, Nepal<span>
    <h5 class="card-title">Radisson Hotel</h5>
    <p class="card-text">$200 per night</p>
    <!-- <a href="#" class="btn btn-primary">Details</a> -->
  </div>
</div>
  </div>
  <div class="col">
  <div class="card" style="width: 17rem; height:23rem">
  <img src="img/annapurna.jpg" class="card-img-top" alt="..." width="500">
  <div class="card-body">
  <span>Kathmandu, Nepal<span>
    <h5 class="card-title">Annapurna Hotel</h5>
    <p class="card-text">$200 per night</p>
    <!-- <a href="#" class="btn btn-primary">Details</a> -->
  </div>
</div>
  </div>
  <div class="col">
  <div class="card" style="width: 17rem; height:23rem">
  <img src="img/dwarika.jpg" class="card-img-top" alt="..." width="500">
  <div class="card-body">
  <span>Kathmandu, Nepal<span>
    <h5 class="card-title">Dwarika Hotel</h5>
    <p class="card-text">$200 per night</p>
    <!-- <a href="#" class="btn btn-primary">Details</a> -->
  </div>
</div>
  </div>
</div>
</div>
<br><br>
<div class="container">
  <div class="float-front">
    <h>WE DO OUR BEST TO FACILITATE
      YOU WITH GREATER HOSPITALITY</h>
  
  <!-- <div class="float-end">
  <div class="row">
    <div class="card" style="width: 100px; height: 100px;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card" style="width: 100px; height: 100px;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  </div> -->

  </div>





<!-- <br><br>
<button type="button" class="button">Contact Now</button> -->

</div>
<br><br>
<div class="card-group">
    <div class="card">
    <img class="card-img-top" src="img/hey.png" alt="Card image cap" height="400" width="500">
    
</div>
  <div class="card">
    <img class="card-img-top" src="img/1.jpg" alt="Card image cap" height="400" width="500">
    <div class="card-img-overlay">
        <br/> <br/> 
      <h5 class="card-title center">FIND YOUR PERFECT PLACE TO STAY</h5>
      <p class="card-text"> We offer the best hotels in Nepal and a wide range of accommodation
 for our customers worldwide. </p>
    </div>
  </div>
  </div>
  </div>
</div>
</div>
<br><br>
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-1"
  >
    

    <!-- Right -->
    
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 float-front">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i></i>Hotels in Nepal
          </h6>
         <div><a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
     </div>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Home
          </h6>
          <p>
            <a href="#!" class="text-reset">Booking</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Facilities</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Contact</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Help
          </h6>
          <p>
            <a href="#!" class="text-reset">About us</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help center</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Privacy Policy</a>
          </p>
        </div>
        <!-- Grid column -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/all.min.js"></script>
    
</body>
</html>