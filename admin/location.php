<?php 
include('includes/header.php');
include('../dbConnection.php');


    if(isset($_POST['submit'])){
        $area           = $_POST['area'];
        $city           = $_POST['city'];
        $country        = $_POST['country'];
        $overview       = $_POST['overview'];
        $pro_name       = $_POST['pro_name'];
        $type           = $_POST['type'];
        $img            = $_POST['img'];
       
        $sql = "INSERT INTO hotels(area,city,country,hotel_overview,property_name,property_type,image)VALUES('$area', '$city', 
        '$country', '$overview', '$pro_name','$type','$img')";
        $conn->query($sql);

    }

?>

<div class="col-sm-9 col-md-10">
<div class="panel panel-default" class="mt-20">

    
    <div class="panel-body">
        <form action="add_hotel.php" method="post" >
            <div class="form-group">
                <label for="type">Area</label>
                <input type="text" name="area" id="area" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="type">City</label>
                <input type="text" name="city" id="city" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="type">Country</label>
                <input type="text" name="country" id="country" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="type">Hotel Overview</label>
                <input type="text" name="overview" id="overview" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="type">Property Name</label>
                <input type="text" name="pro_name" id="pro_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="type">Property type</label>
                <input type="text" name="type" id="type" class="form-control" required>
            </div>
            <label for="myfile">Select a image:</label>
            <input type="file" id="img" name="img">   
            <div class="form-group">
                <input type="submit" name="submit" value="submit" class="btn btn-primary" required>
            </div>
        </form>
    </div>
</div>
</div>

<?php include('includes/footer.php');?>