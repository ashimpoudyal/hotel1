<?php 
    define('TITLE', 'Dashboard');
    define('PAGE', 'dashboard');
    include('../dbConnection.php');
    include('includes/header.php');
    session_start();
if($_SESSION['is_adminlogin']){
    $aEmail = $_SESSION['aEmail'];
}else{
    echo "<script> location.href='adminlogin.php'</script>";
}
?>
                <div class="col-sm-9 col-md-10">
                <div class="mx-5 mt-5 text-center">
                    <p class="bg-dark text-white p-2">Details of Customers</p>
                <?php 
                 $sql = "SELECT * FROM reg_tb";
                 $result = $conn->query($sql);
                 if($result->num_rows>0){
                     echo '
                     <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>';
                        
                        while($row = $result->fetch_assoc()){

                       echo '<tr>';
                       echo  '<td>'.$row["id"].'</td>';
                       echo  '<td>'.$row["fname"].$row["lname"].'</td>';
                       echo  '<td>'.$row["email"].'</td>';
                       echo '</tr>';
                        }
                        echo '</tbody>
                     </table>';
                 }else{
                     echo '0 results';
                 }
                ?>
                    
                </div>
            </div><!-- End 2nd column -->
    <?php
        include('includes/footer.php');
    ?>