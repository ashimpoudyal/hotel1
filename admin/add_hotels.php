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

<form action="#" method="post" >
            <div class="form-group">
                <label for="type">Hotel Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
           
         
            
        </form>