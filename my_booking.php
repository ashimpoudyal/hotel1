<?php 

include('includes/loggedin.php');
include('dbConnection.php');

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
    session_start();
    $uid=$_SESSION['USER_ID'];
    $res = mysqli_query($conn,"select booking.*,booking_status.name as booking_status_str from booking,booking_status where booking.user_id='$uid'
    and booking_status.id=booking.booking_status");
    while($row=mysqli_fetch_assoc($res)){
    ?>
    <tr>
        <td><a href="my_booking_details.php?id=<?php echo $row['id'] ?>">
        <?php echo $row['id']?></a></td>
        <td><?php echo $row['added_on'] ?></td>
        <td><?php echo $row['payment_type'] ?></td>
        <td><?php echo $row['payment_status'] ?></td>
        <td><?php echo $row['booking_status_str'] ?></td>
    </tr>
       <?php } ?>
</tbody>

</table>


<?php 

include('includes/footer.php');

?>