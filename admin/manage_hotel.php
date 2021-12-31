<?php 
    define('TITLE', 'Hotels');
    define('PAGE', 'manage_hotel');
    include('includes/header.php');
    include('../dbConnection.php');
?>

<div class="col-sm-9 col-md-10 mt-5">
<?php 
    $sql = "SELECT * FROM hotels_tb";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        echo '<table class="table">';
        echo '<thead>';
        echo '<tr>';
        echo '<th scope="col">Id</th>';
        echo '<th scope="col">Hotels</th>';
        echo '<th scope="col">Location</th>';
        echo '<th scope="col">Desc</th>';
        echo '<th scope="col">Telephone</th>';
        echo '</tr>';
        echo '</thead>';
        echo '</table>';
    }
?>
</div>
<?php include('includes/footer.php');?>