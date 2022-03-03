<?php 


include('dbConnection.php');

if(isset($_REQUEST['submit'])){

    $cin=$_REQUEST['cin'];
    $cout = $_REQUEST['cout'];
    $people = $_REQUEST['people'];
    $room = $_REQUEST['room'];

    $sql = "INSERT INTO booking(cin,cout,guest,room) VALUES('$cin','$cout', '$people', '$room')";
    $conn->query($sql);
    

}
?>
 <!-- <form method="post" class="colorlib-form" action="#">
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
</form> -->