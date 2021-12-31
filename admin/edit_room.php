<?php
    include('../dbConnection.php');
    session_start();

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $type = $_POST['room_type'];
        $new_image = $_FILES['image']['name'];
        $old_image = $_POST['image_old'];
        $desc = $_POST['room_desc'];
    
        if($new_image != '')
        {
            $update_filename = $_FILES['image']['name'];
        }
        else
        {
            $update_filename = $old_image;
        }
        if(file_exists("upload/" . $_FILES['image']['name']))
        {
            $filename = $_FILES['image']['name'];
            $_SESSION['status'] = "Image already exists".$filename;
            header('Location: room_type.php');
        }
        else
        {
          $query = "UPDATE room SET room_type='$type', img='$update_filename', room_desc='$desc' WHERE id='$id'";
          $query_run = mysqli_query($conn,$query);

          if($query_run)
          {
              if($_FILES['image']['name'] !='')
              {
                move_uploaded_file($_FILES['image']['tmp_name'],"img/".$_FILES['image']['name']);
                unlink("img/".$old_image);
              }
            $_SESSION['status'] = "Updated successfully";
            header("Location: room_type.php");
          }
          else{
            $_SESSION['status'] = "Image not Updated successfully";
            header("Location: room_type.php");
          }
        }
    }
    if(isset($_POST['delete'])){
        $id = $_POST['delete_id'];
        $img = $_POST['del'];

        $query = "DELETE FROM room WHERE id='$id'";
        $query_run = mysqli_query($conn,$query);

        if($query_run)
        {
            header("Location: room_type.php");
        }else{

        }
    }

?>