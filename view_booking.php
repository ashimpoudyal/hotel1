<?php 

include('includes/header.php');
include('dbConnection.php');

?>
 <div class="container">
     <div class="row">
        <div class="col-lg-12 text-center bg-light mb-5">
            <h1 class="text-warning">My Booking</h1>
        </div>
     </div>
 </div>

 <div class="container-fluid">
     <div class="row justify-content-around">
         <div class="col-sm-12 col-md-6 col-lg-9">
             <table class="table table-bordered text-center">
                 <thead class="bg-danger text-white fs-5">
                     <th>Hotel Name</th>
                     <th>Room Type</th>
                     <th>Price</th>
                     <th>Quantity</th>
                     <th>Total Price</th>
                     <th>Update</th>
                     <th>Delete</th>
                 </thead>
                 <tbody>
                     <?php
                        session_start();
                        $total = 0;
                        if(isset($_SESSION['hotel'])){
                            foreach($_SESSION['hotel'] as $key => $value){
                               
                                $total = (int)$value['Hprice'] * (int)$value['Trooms'];

                               echo "
                               <form action= 'booking_insert.php' method='POST'>
                                <tr>
                                <td>$value[hotelName]</td>
                                <td>$value[roomType]</td>
                                <td>$value[Hprice]</td>
                                <td>$value[Trooms]</td>
                                <td>$total</td>
                                <td><button class='btn-warning'>Update</button></td>
                                
                                <td><button name='remove' class='btn-danger'>Delete</button></td>
                                <td><input type='text' name='item' value='$value[roomType]'></td>
                                </tr>
                                </form>
                                ";
                                
                            }
                        }
                     ?>
                 </tbody>
             </table>
         </div>
     </div>
 </div>

 <?php
 
 include('includes/footer.php');

 ?>