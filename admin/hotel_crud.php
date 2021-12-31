<?php
    include('../dbConnection.php');
    session_start();

    if(isset($_POST['hotel_update']))
    {
        $id             = $_POST['edit_id'];
        $area           = $_POST['area'];
        $city           = $_POST['city'];
        $country        = $_POST['country'];
        $overview       = $_POST['overview'];
        $property_name  = $_POST['name'];
        $property_type  = $_POST['type'];
        $image      = $_FILES['image']['name'];
        $price  = $_POST['price'];
       
        $query = "UPDATE hotels SET area='$area',city='$city',country='$country',hotel_overview='$overview',property_name='$property_name',property_type='$property_type',
        image='$image',price='$price' WHERE id='$id'";
        $query_run = mysqli_query($conn,$query);
    
        if($query_run)
        {
          move_uploaded_file($_FILES['image']['tmp_name'],"../img/".$_FILES['image']['name']);
          $_SESSION['status'] = "Updated successfully";
          header("Location: hotel.php");
        }
        else
        {
          $_SESSION['status'] = "Not updated successfully";
          header("Location: hotel.php");
           
        }
      }
    if(isset($_POST['delete_hotel'])){
        $id = $_POST['delete_id'];

      $check_query="SELECT * FROM hotels WHERE id='$id'";
      $check_query_run = mysqli_query($conn,$check_query);
      foreach($check_query_run as $rows)
      {
        echo $rows['image'];
        if($img_path = "img/".$rows['image'])
        {
          $query = "DELETE FROM hotels WHERE id='$id'";
          $query_run = mysqli_query($conn,$query);


            if($query_run)
            {
              unlink($img_path);
              $_SESSION['success'] = "Deleted successfully";
                header("Location: hotel.php");
            }
            else
            {

              $_SESSION['status'] = "Not deleted successfully";
              header("Location: hotel.php");

            }
        }
        
      
      }

        
    }

?>