<?php 

session_start();
include('../dbConnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit</h4>
                    </div>
                    <div class="card-body">
                    <?php 
                        $id = $_GET['id'];
                        $query = "SELECT * FROM room WHERE id='$id'";
                        $query_run = mysqli_query($conn,$query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $row){
                                
                            ?>
                                <form action="edit_room.php" method="post" enctype="multipart/form-data">


                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
                                    <div class="form-group">
                                        <label for="username">Room Type</label>
                                        <input type="text" name="room_type" value="<?php echo $row['room_type'];?>" id="hotel_name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" name="image" id="img" class="form-control">
                                        <input type="hidden" value="<?php echo $row['img'];?>" name="image_old">
                                    </div>
                                    <img src="<?php echo "img/".$row['img'];?>" width="100px">
                                    <div class="form-group">
                                        <label for="description">Room Description</label>
                                        <input type="text" name="room_desc" value="<?php echo $row['room_desc'];?>" id="desc" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="update" value="update" class="btn btn-primary" required>
                                    </div>
                                </form>
                            <?php 
                            
                            }
                        }else
                        {
                            echo "No records found";
                        }
                    ?>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>