<?php 

include('dbConnection.php');

// $hotel_id = $_POST['hotel_id'];
$product_review_res = mysqli_query($conn, "select users.username,hotels.hotelname,user_hotels.id,user_hotels.rating 
from users,user_hotels,hotels where user_hotels.user_id=users.id and user_hotels.hotel_id=hotels.id;
");



$avg_rating_sql = "SELECT AVG(rating) As avg FROM user_hotels WHERE hotel_id=$hotel_id";
$avg_rating_query = mysqli_query($conn, $avg_rating_sql);

while ($row = mysqli_fetch_assoc($avg_rating_query)) {

    $avg_rating = $row['avg'];
    round($avg_rating,2);
    echo($avg_rating);

}


if ($avg_rating == '') {
    $avg_rating = 0;
}




//If there are approved reviews, calculate the average review rating
// If ($numrows5 > 0) {

// // //Calculate AverageReviewRating
// $sql4 = "SELECT AVG(rating) FROM user_rating WHERE  LIKE $ProductId AND ReviewIsApproved LIKE 1";
// $result4 = mysql_query($sql4);



// //obtain
// while($row4 = mysql_fetch_array($result4)){
//       //mysql_num_rows($result4) always equal to 1 when calculating an average
//   //echo mysql_num_rows($result4);
//   $AverageReviewRating = $row4['AVG(ReviewRating)'];
//   //format to 2 decimal places
//   $AverageReviewRating = number_format($AverageReviewRating, 2);
//       echo " Average Rating: " . $AverageReviewRating . " / 10";
//       }

// // End if there are approved reviews 


?>

