<?php 
    define('TITLE', 'Room');
    include('../dbConnection.php');
    include('includes/header.php');
    

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Rooms</title>
  </head>
  <body>
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
                                    <th>hotel_id</th>
                                    <th>Room Type</th>
                                    <th>Img</th>
                                    <th>Room Desc</th>
                                    <th>Add</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                    <th>Available</th>


                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                             
                           
                                
                     
                               
                                $result=mysqli_query($conn,"select * from room");
                                    while($row=mysqli_fetch_array($result)){

                                        ?>
                                    <tr> 
                                        <td><?php echo $row['id'];?></td>
                                        <td><?php echo $row['hotel_id'];?></td>
                                        <td><?php echo $row['room_type'];?></td>
                                        <td>
                                            <img src="<?php echo "../img/".$row['img']; ?>" width="100px" alt="Img">
                                        </td>
                                        <td><?php echo $row['room_desc'];?></td>
                                        <td>
                                            <a href="room.php" class="btn btn-warning">Add</a>
                                        </td>
                                        <td>
                                            <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                                        </td>
                                        <td>
                                            <form action="edit_room.php" method="POST">
                                                <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                                                <input type="hidden" name="del" value="<?php echo $row['img'];?>">
                                                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                                                <td>
                                            <a href="room.php" class="btn btn-success">Available</a>
                                        </td>
                                            </form>
                                        </td>
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
                                    </div>
                                    <?php include('includes/footer.php')?>
  </body>
</html>