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


            <div class="col-sm-9 col-md-10"><!-- Start 2nd column -->
                <div class="row text-center mx-5">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                            <div class="card-header">Users</div>
                            <div class="card-body">
                                <h4 class="card-title">43</h4>
                                <a class="btn text-white" href="#">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                            <div class="card-header">Bookings</div>
                            <div class="card-body">
                                <h4 class="card-title">23</h4>
                                <a class="btn text-white" href="#">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-info mb-3" style="max-width:18rem;">
                            <div class="card-header">Hotels</div>
                            <div class="card-body">
                                <h4 class="card-title">13</h4>
                                <a class="btn text-white" href="#">View</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mx-5 mt-5 text-center">
                    <p class="bg-dark text-white p-2">List of Admins</p>
                <?php 
                 $sql = "SELECT * FROM admin_reg";
                 $result = $conn->query($sql);
                 if($result->num_rows>0){
                     echo '
                     <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Admin Id</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>';
                        
                        while($row = $result->fetch_assoc()){

                       echo '<tr>';
                       echo  '<td>'.$row["id"].'</td>';
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