<?php 
    define('TITLE', 'Dashboard');
    define('PAGE', 'dashboard');
    include('../dbConnection.php');
    include('includes/header.php');
    session_start();
if($_SESSION['is_adminlogin']){
    $aEmail = $_SESSION['aEmail'];
}else{
    echo "<script> location.href='adminlogin.php'</script>";
}

$booking_id=$_GET['id'];

if(isset($_POST['update_booking_status'])){
     $update_booking_status=$_POST['update_booking_status'];
     mysqli_query($conn,"update booking set booking_status='$update_booking_status' 
     where id='$booking_id'");
}

?>
                <div class="col-sm-9 col-md-10">
                <div class="mx-5 mt-5 text-center">
                    <p class="bg-dark text-white p-2">Booking Detail</p>
                <?php 
                 $sql = "SELECT * FROM reg_tb";
                 $result = $conn->query($sql);
                 if($result->num_rows>0){
                     ?>
                    <table class="table">

                    <thead>
                        <tr>
                            <th>Room Type</th>
                            <th>Room Image</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
<tbody>
    <?php
    
    
    
    $res=mysqli_query($conn,"select distinct(booking_detail.id),booking_detail.*,room.room_type,room.img from booking_detail,room ,
    `booking` where booking_detail.booking_id='$booking_id' and booking_detail.room_type=room.room_type");

        $total_price = 0;
        while($row=mysqli_fetch_assoc($res)){
           
            $total_price = $total_price+($row['qty']*$row['price']);
            // $booking_status=$row['booking_status'];
    ?>
                <tr>
                    <td><?php 
                    echo $row['room_type']?></td>
                    <td><img src="<?php echo $row['img'] ?>"></td>
                    <td><?php echo $row['qty'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['qty']*$row['price'] ?></td>
                </tr>
                <?php } }?>
                <tr>
                    <td colspan="3"></td>
                    <td>Total Price</td>
                    <td><?php echo $total_price ?></td>
                </tr>
</tbody>

                    </table>
                   <div>
                       <strong>Booking Status</strong>
                        <?php 
                            $booking_status_arr=mysqli_fetch_assoc(mysqli_query($conn,"select booking_status.name from booking_status,booking
                            where booking.id='$booking_id' and booking.booking_status=booking_status.id"));
                            // print_r($booking_status_arr);
                            echo $booking_status_arr['name'];
                        ?>
                        <div>
                            <form method="post">
                                <select class="form-control" name="update_booking_status">
                                    <option>Select Status</option>
                                    <?php
                                        $res = mysqli_query($conn,"select * from booking_status");
                                        while($row=mysqli_fetch_assoc($res)){
                                            echo "<option value=".$row['id'].">".$row['name']."</option>";
                                        }
                                    
                                    ?>
                                </select>
                                <input type="submit" class="form-control"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- End 2nd column -->
    <?php
        include('includes/footer.php');
    ?>