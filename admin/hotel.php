<?php 
    define('TITLE', 'Hotels');
    define('PAGE', 'manage_hotel');
    include('includes/header.php');
    include('../dbConnection.php');
?>
 <div class="col-sm-9 col-md-10">
   <div class="container mt-5">
       <div class="row">
           <div class="col-md-12">
               <div class="card">
                   <div class="card-header bg-info">
                       <h4 class="text">Room Details</h4>
                   </div>
                   <div class="card-body">
                       
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Area</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th>Hotel Overview</th>
                                    <th>Property Name</th>
                                    <th>Property Type</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Update</th>
                                    <th>Delete</th>


                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php  
                     
                               
                                $result=mysqli_query($conn,"select * from hotels");
                                    while($row=mysqli_fetch_array($result)){

                                        ?>
                                    <tr> 
                                        <td><?php echo $row['id'];?></td>
                                        <td><?php echo $row['area'];?></td>
                                        <td><?php echo $row['city'];?></td>
                                        <td><?php echo $row['country'];?></td>
                                        <td><?php echo $row['hotel_overview'];?></td>
                                        <td><?php echo $row['property_name'];?></td>
                                        <td><?php echo $row['property_type'];?></td>
                                 
                                        <td>
                                            <img src="<?php echo "../img/".$row['image']; ?>" width="100px" alt="Img">
                                        </td>
                                        <td><?php echo $row['price'];?></td>
                                        <td>
                                            <form action="edit_hotel.php" method="POST">
                                            <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
                                            <button type="submit" name="edit_data_btn" class="btn btn-info">Edit</a>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="hotel_crud.php" method="POST">
                                                <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                                                <button type="submit" name="delete_hotel" class="btn btn-danger">Delete</button>
                                                <td>
                                       
                                            </form>
                                    </tr>
                                <?php } ?>
                            
                            </tbody>
                        </table>
                   </div>
               </div>
           </div>
       </div>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
                            

<?php include('includes/footer.php');?>


