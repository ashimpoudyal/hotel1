<?php 

include("includes/header.php");

?>


     

<!-- End Navigation --> 
<!-- <script defer sec="script.js"></script> -->
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

<br><br>
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
        <span align="center">Some Hotels With Their Price</span>    
        
      <br><br>
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
<?php 

include("includes/footer.php");

?>