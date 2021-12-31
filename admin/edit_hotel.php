<?php 

session_start();
include('../dbConnection.php');
include('includes/header.php');
?>

<div class="col-sm-9 col-md-10">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit</h4>
                    </div>
                    <div class="card-body">
                    <?php 
                    if(isset($_POST['edit_data_btn']))
                    {
                     $id = $_POST['edit_id'];  
                     $query = "SELECT * FROM hotels WHERE id='$id'";
                     $query_run = mysqli_query($conn,$query);
                     foreach($query_run as $row)
                     {
                                
                    ?>
                        <form action="hotel_crud.php" method="post" enctype="multipart/form-data">


                            <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>"/>
                            <div class="form-group">
                                <label for="area">Area</label>
                                <input type="text" name="area" value="<?php echo $row['area'];?>" id="area" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" value="<?php echo $row['city'];?>" id="city" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="country">Country</label>
                                <input type="text" name="country" value="<?php echo $row['country'];?>" id="country" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="overview">Hotel overview</label>
                                <input type="text" name="overview" value="<?php echo $row['hotel_overview'];?>" id="overview" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="Property name">Property Name</label>
                                <input type="text" name="name" value="<?php echo $row['property_name'];?>" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="Property type">Property Type</label>
                                <input type="text" name="type" value="<?php echo $row['property_type'];?>" id="type" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" id="img" value="<?php echo $row['image'];?>" class="form-control">  
                            </div>
                            <div class="form-group">
                                <label for="Price">Price</label>
                                <input type="text" name="price" value="<?php echo $row['price'];?>" id="price" class="form-control" required>
                            </div>
                                <button type="submit" name="hotel_update" value="update" class="btn btn-primary">Update</button>
                            
                        </form>
                        <?php
                        }
                    }
                      ?>
                            
                               
                           
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>