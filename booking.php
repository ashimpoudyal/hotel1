<?php 


include('dbConnection.php');



                                
				session_start();
        
        if(isset($_SESSION['is_login'])){
          include("includes/loggedin.php");
        }else{
          include("includes/header.php");
        }
        
        if(!isset($_SESSION['hotel']) || count($_SESSION['hotel'])==0){
?>
         <script>
           window.location.href='hotel_display.php';
         </script>
<?php
        }
        $book_total=0;
        foreach($_SESSION['hotel'] as $key=>$value){
          $total = (int)$value['Hprice'] * (int)$value['Trooms'];
          $book_total =  $book_total + $total;
        }

        if(isset($_POST['submit'])){
          $fullname       = $_POST['fname'];
          $email          = $_POST['email'];
          $phonenumber    = $_POST['phone_number'];
          $payment_type   = $_POST['payment_type'];
          // $user_id        = $_SESSION['USER_ID'];
          $total_price    = $book_total;
          $payment_status = 'pending';
          if($payment_type=='coh'){
          $payment_status = 'success';
          }
          $booking_status = '1';
          $added_on=date('Y-m-d h:i:s');

          $sql = "Insert into booking(user_id,fullname,email,phone_number,payment_type,total_price,
          payment_status,booking_status,added_on)
          values('$_SESSION[USER_ID]','$fullname','$email','$phonenumber','$payment_type',$total_price,'$payment_status', 
          '$booking_status','$added_on')";         
           mysqli_query($conn,$sql);
        

        $booking_id=mysqli_insert_id($conn);

        foreach($_SESSION['hotel'] as $key=>$value){
          $price = $value['Hprice'];
          $qty   = $value['Trooms'];
          $room_type = $value['roomType'];

          $sql1 = "Insert into booking_detail(booking_id,room_type,qty,price)
          values('$booking_id','$room_type','$qty','$price')";         
           mysqli_query($conn,$sql1);
       
           
          }
          ?>
           <script>
             window.location.href='thank_you.php';
           </script>
  <?php
      }

?>
<div class="container">
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
    <div class="card-header">
    Featured
  </div>
      <div class="card-body">
        <h5 class="card-title">We will use this details for your booking info</h5>
       
        <form action="#" method="POST">
          <div>
            <br>
            <label for="fullname">Full Name</label>
            <input type="text" name="fname" placeholder="Enter your name" class="form-control" required>
          </div>
          <br>
          <label for="email">Email</label>
            <input type="email" name="email" placeholder="Enter your Email" class="form-control" required>
            <br>
          <label for="phone_number">Phone number</label>
          <input type="tel" name="phone_number" placeholder="+977" class="form-control" required>
           
      
        <br>
        <div class="card" style="width: 40rem;">
            <div class="card-body">
              <h5 class="card-title"> Payment Method
          </h5>
          COH   <input type="radio" name="payment_type" value="COH"/>
          &nbsp;&nbsp;STRIPE <input type="radio" name="payment_type" value="stripe"/>

          <input type="submit" name="submit">

        </form>
        </div>
    </div>	
      </div>
    </div>
  </div>
  
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title" align="center"><b>Your room</b></h3>
         
            


        <p class="card-text"> 
         
        <?php 
        $total = 0;
        $book_total=0;
        if(isset($_SESSION['hotel'])){
                            foreach($_SESSION['hotel'] as $key => $value){
                               
                                $total = (int)$value['Hprice'] * (int)$value['Trooms'];
                                $book_total =  $book_total + $total;

                               echo "
                               
                               <form action= 'booking_insert.php' method='POST'>
                                <h5>$value[hotelName]<h5>
                              <table class='table'>
                              <tr>
                                <td>$value[Rimage]</td>
                                <td>$value[roomType]</td>
                                <td>$total</td>
                              
                                
                                <td><button name='remove' class='btn-danger'>Delete</button></td>
                                <td><input type='hidden' name='item' value='$value[roomType]'></td>
                               
                                </tr>
                               
                                
                               
                                
                             
                                </table>
                                <h5>Total</h5>
                                <h5>$book_total</h5>
                                </form>
                                ";
                             
                                
                            }
                        }
               
                        ?>
            

            </div>
  </div>
</div>

<br><br>

                     		
              