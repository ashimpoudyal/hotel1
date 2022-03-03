<?php 


   
            
              



include("dbConnection.php");
session_start();
if(isset($_SESSION['is_login'])){
    include("includes/loggedin.php");
  }else{
    include("includes/header.php");
  }




?>
<div class="container">

<?php

if(isset($_REQUEST['submit'])){
    $rating = $_POST['rooms'];
    $hotel_id = $_POST['hotel_id'];
    $username = $_SESSION['username'];
    $user_id = $_SESSION['USER_ID'];
    
    $sql="Insert into user_hotels(user_id,username,hotel_id,rating)values($user_id,'$username',$hotel_id,$rating)";
    $result = mysqli_query($conn,$sql);
   

}
  
    


?>

 <div class="col-sm-9 col-md-10">
     
           <table class="table">
               <thead>
               <tr>
                    <td>Hotel Name</td>
                    <td>Room Type</td>
                    <td>Room Desc</td>
                    <td>Img</td>
                    <td>Price</td>
                    <td>No of</td>
                    <td>Reserve</td>
                   
                </tr>
               </thead>
               <tbody>
               <?php 
        
                        
                     $hotel_id = $_GET['id']; 

                    include('rating.php');
                    
                     $query = "SELECT * FROM room WHERE hotel_id='$hotel_id'";
                     $query_run = mysqli_query($conn,$query);
                     foreach($query_run as $row)
                     {
                ?>
                <tr>                     <td><?php echo $row['hotel_name'];?></td>
                                        <td><?php echo $row['room_type'];?></td>
                                        <td><?php echo $row['room_desc'];?></td>
                                        <td>
                                        <img src="<?php echo "img/".$row['img'];?>" alt="img" width="100px">
                                        </td>
                                       
                                       
                                        
                                        <form action="booking_insert.php" method="POST">
                                        <td><?php echo $row['price'];?></td>
                                        <td>
                                        <input type="number" name="totalroom" value=" min='1' max='10'" placeholder="Total Room">
                                        </td>
                                       <td>
                                        <button type="submit" name="reserve" class="btn btn-primary">Reserve</button>
                                        <input type="hidden" name="hname" value="<?php echo $row['hotel_name']?>">
                                        <input type="hidden" name="room_type" value="<?php echo $row['room_type']?>">
                                        <input type="hidden" name="room_image" value="<?php echo $row['img']?>">
                                        <input type="hidden" name="price" value="<?php echo $row['price']?>">
                                        <!-- <input type="te"> -->
                                        </form>
                                        </td>
                                        
                </tr>
                <?php }  ?>
               </tbody>
           </table>
           <?php
           if(isset($_SESSION['is_login'])){
               ?>
                        <h3>Rating</h3>
                        <form action="" method="post">
                        <label for="rating">Give a rating</label>

                            <select name="rooms">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                            <input type="hidden" name="hotel_id" value="<?php echo $hotel_id;?>">
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['USER_ID'];?>">
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['username'];?>">
                            <input type="submit" value="submit" name="submit">
                        </form>
                     </div>
                     </div>
                     <?php 
           }else{
               echo"Please login to recommend";
           }
                     ?>  
                     <div class="container">
                     <h1>Recommended For You</h1>
                     <?php

                     if(isset($_SESSION['is_login'])){
                        
                        
                            include("admin/alg/recommend.php");
                            $hotels = mysqli_query($conn,"select * from user_hotels");
                        
                     $matrix=array();
                     while($hotel=mysqli_fetch_array($hotels)){

                        

                         $users=mysqli_query($conn,"select username from users where id=$hotel[user_id]");
                         $username=mysqli_fetch_array($users);
                     
                         $matrix[$username['username']][$hotel['hotelname']]=$hotel['rating'];
                     }
                     $users=mysqli_query($conn,"select username from users where id= $_SESSION[USER_ID]");
                     $username=mysqli_fetch_array($users);
                     
                     $recommendation=array();

                     $us = mysqli_query($conn, "select * from user_hotels where username='$username[username]'");
                    //  print_r($us);
                     $userrecord = mysqli_fetch_array($us);
                    //  print_r($userrecord);
                     if(isset($userrecord) || !empty($userrecord)){
                     $recommendation=getRecommendation($matrix,$username['username']);

                     foreach($recommendation as $hotel=>$rating){
                      // $imagequery=mysqli_query($conn,"select hotels.id,hotels.img,hotels.location,hotels.price 
                      // from hotels,user_hotels where hotels.id=user_hotels.hotel_id and hotels.hotelname='$hotel'");
                      
                      $imagequery=mysqli_query($conn,"select * from hotels where hotelname='$hotel'");
                     
                      
                      
                      $row=mysqli_fetch_array($imagequery);
                    
                   
                    ?>
                    <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?php echo $hotel?></h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
                     
                  
                    <?php
                    
                     }
                     
                   
                }else{
                    echo "You have not recommended to view products";
                
                }
                ?>
            </div>
       <?php
        } 

            ?>
                     
                     
                     

<?php 
include("includes/footer.php");
?>

