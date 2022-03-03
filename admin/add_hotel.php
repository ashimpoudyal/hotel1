<?php 

include('../dbConnection.php');


    if(isset($_POST['submit'])){
        $hotel_name         = $_POST['name'];
        $location           = $_POST['location'];
        $img                = $_POST['img'];
        $desc               = $_POST['description'];
       
       
        $sql = "INSERT INTO hotels(hotelname,location,img,description)VALUES('$hotel_name','$location', 
        '$img','$desc')";
        $conn->query($sql);

    }

?>

<div class="col-sm-9 col-md-10">
<div class="panel panel-default" class="mt-20">

    
    <div class="panel-body">
        <form action="add_hotel.php" method="post" >
            <div class="form-group">
                <label for="type">Hotel Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="type">Location</label>
                <input type="text" name="location" id="location" class="form-control" required>
            </div>
            
            <label for="myfile">Select a image:</label>
            <input type="file" id="img" name="img">   
            
            <div class="form-group">
                <label for="type">Description</label>
                <input type="text" name="description" id="description" class="form-control" required>
            </div>
            
                <input type="submit" name="submit" value="submit" class="btn btn-primary">
         
            
        </form>
    </div>
</div>
</div>

<?php include('includes/footer.php');?>