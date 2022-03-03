<?php 

include('includes/loggedin.php');
include('dbConnection.php');

$booking_id=$_GET['id'];

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
    session_start();
    $uid=$_SESSION['USER_ID'];
    
    $res=mysqli_query($conn,"select distinct(booking_detail.id),booking_detail.*,room.room_type,room.img from booking_detail,room ,`booking` where booking_detail.booking_id='$booking_id' and `booking`.user_id='$uid' and booking_detail.room_type=room.room_type");

        $total_price = 0;
        while($row=mysqli_fetch_assoc($res)){
            $total_price = $total_price+($row['qty']*$row['price']);
    ?>
    <tr>
        <td><?php 
        echo $row['room_type']?></td>
        <td><img src="<?php echo $row['img'] ?>"></td>
        <td><?php echo $row['qty'] ?></td>
        <td><?php echo $row['price'] ?></td>
        <td><?php echo $row['qty']*$row['price'] ?></td>
    </tr>
       <?php } ?>
       <tr>
        <td colspan="3"></td>
        <td>Total Price</td>
        <td><?php echo $total_price ?></td>
    </tr>
</tbody>

</table>


<?php 

include('includes/footer.php');

?>