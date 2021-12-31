<?php
define('TITLE', 'Change Password');
define('PAGE', 'change_pass');
include('../dbConnection.php');
include('includes/header.php');
session_start();
if($_SESSION['is_adminlogin']){
    $aEmail = $_SESSION['aEmail'];
}else{
    echo "<script> location.href='adminlogin.php'</script>";
}
$aEmail = $_SESSION['aEmail'];
if(isset($_REQUEST['passupdate'])){
    if($_REQUEST['aPassword']==""){
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5
        mt-2">Fill all fields</div>';
    }else{
$aPass = $_REQUEST['aPassword'];
$sql = "UPDATE admin_reg SET password = '$aPass' 
WHERE email = '$aEmail'";
if($conn->query($sql) == TRUE){
    $passmsg = '<div class="alert alert-success col-sm-6 ml-5
        mt-2">Updated Successfully</div>';
}else{
    $passmsg = '<div class="alert alert-danger col-sm-6 ml-5
        mt-2">Unable to update</div>';
}
    }
    
}

?>
<div class="col-sm-9 col-md-10">
    <form class="mt-5 mx-5" action="" method="POST">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" id="inputEmail" 
        value="<?php echo $aEmail; ?>" readonly>
<div class="form-grpup">
    <label for="inputnewpassword">New Password</label>
    <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password"
    name="aPassword">
</div>
<button type="submit" class="btn btn-danger mr-4 mt-4" 
name="passupdate">Update</button>
<?php if(isset($passmsg)){echo $passmsg; }?>    
</form>
</div>

<?php
        include('includes/footer.php');
    ?>