
<html lang="en">
<head>
<link rel="stylesheet" href="../../css/bootstrap.min.css">

<!--Font Awesome css-->
<link rel="stylesheet" href="../css/all.min.css">
</head>
<body>
    <div class="container">
        <h2><div class="well text-center">Recommendation For You</div></h2>

<?php
include('../../dbConnection.php');
include('recommend.php');

$hotels=mysqli_query($conn,"select * from user_hotels");

$matrix=array();

while($hotel=mysqli_fetch_array($hotels))
{
 $users=mysqli_query($conn,"select users from users where id = $hotel[user_id]");   
 $username=mysqli_fetch_array($users);
 
 $matrix[$username['users']][$hotel['hotel_name']]=$hotel['hotel_rating'];


}
// echo "<pre>";
// print_r($matrix);
// echo "</pre>";
$users=mysqli_query($conn,"select users from users where id = $_GET[id]");   
$username=mysqli_fetch_array($users);


// var_dump(getRecommendation($matrix,"Bob"));
// var_dump(getRecommendation($matrix,"Charlie"));
// var_dump(getRecommendation($matrix,"Damon"));
// var_dump(getRecommendation($matrix,"Edie"));

?>
<div class="panel panel-default">
<div class="panel-heading">
        <h2>
            <a class="btn btn-success" href="add_users.php">Add Users</a>
            <a class="btn btn-info pull-right" href="index.php">Back</a>
        </h2>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <th>Movie Name</th>
            <th>Movie Rating</th>
         

                <?php
                $recommendation=array();
                $recommendation=getRecommendation($matrix,$username['users']);
                
                foreach($recommendation as  $hotel=>$rating)
                {
                ?>

                       <tr> 
                           <td><?php echo $hotel;?></td>
                           <td><?php echo $rating;?></td>
                    </tr>
                
                
            <?php } ?>

        </table>
    </div>
</div>



