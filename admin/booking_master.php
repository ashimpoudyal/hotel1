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
?>
                <div class="col-sm-9 col-md-10">
                <div class="mx-5 mt-5 text-center">
                    <p class="bg-dark text-white p-2">Details of Customers</p>
                <?php 
                 $sql = "SELECT * FROM reg_tb";
                 $result = $conn->query($sql);
                 if($result->num_rows>0){
                     ?>
                    <table class="table">

                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Booked Date</th>
                            <th>Payment Type</th>
                            <th>Payment Status</th>
                            <th>Booking Status</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                           
                           
                            $res = mysqli_query($conn,"select booking.*,booking_status.name as booking_status_str from booking,booking_status where booking_status.id=booking.booking_status");
                            while($row=mysqli_fetch_assoc($res)){
                            ?>
                        <tr>
                            <td><a href="booking_master_detail.php?id=<?php echo $row['id'] ?>">
                            <?php echo $row['id']?></a></td>
                            <td><?php echo $row['added_on'] ?></td>
                            <td><?php echo $row['payment_type'] ?></td>
                            <td><?php echo $row['payment_status'] ?></td>
                            <td><?php echo $row['booking_status_str'] ?></td>
                        </tr>
                            <?php } }?>
                        </tbody>

                    </table>
                    
                </div>
            </div><!-- End 2nd column -->
    <?php
        include('includes/footer.php');
    ?>