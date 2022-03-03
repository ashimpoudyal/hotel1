<?php 

include('../dbConnection.php');
// include('includes/header.php');

session_start();
if($_SESSION['is_adminlogin']){
    $aEmail = $_SESSION['aEmail'];
}else{
    echo "<script> location.href='adminlogin.php'</script>";
}
$aEmail = $_SESSION['aEmail'];
?>

<div class="col-sm-9 col-md-10">
<div class="panel panel-default">
<div class="panel-heading">
        <h2>
            <a class="btn btn-success" href="add_users.php">Add Users</a>
            <a class="btn btn-info pull-right" href="index.php">Back</a>
        </h2>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <th>Hotel Name</th>
            <th>Add Room</th>
            
            <?php 
            
$result=mysqli_query($conn,"SELECT * FROM hotels");
while($row=mysqli_fetch_array($result)){
    ?>
   <tr> 
       <td><?php echo $row['hotelname'];?></td>
       <td>
       <form action="add_room.php">
           <input type="submit" name="add_rooms" class="btn btn-primary" value="Add Rooms">
           <input type="hidden" name="id" value="<?php echo $row['id']?>">
           <input type="hidden" name="hotelname" value="<?php echo $row['hotelname']?>">
           <input type="hidden" name="price" value="<?php echo $row['price']?>">
       </form>
    </td>
   
    
  
    
<?php } ?>
</table>
    </div>
</div>
</div>
<?php 
    
    include('includes/footer.php');
    
?>