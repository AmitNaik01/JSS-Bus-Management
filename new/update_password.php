

<?php
include('../includes/connect.php');
$a = $_POST['new_password'];
$b = $_POST['confirm_password'];
$uname = $_POST['user_name'];
if($a==$b){
    $sql = "UPDATE users SET password = '$b' WHERE user_name='$uname';";
    mysqli_query($conn, $sql);
}
else{
    header("Location: forgot_pass_change1.php?error=New password and confirm password not matching");
	    exit();
    
}
// echo $a;
// echo $b;
// echo $uname;




?>

<script>
alert("Password Changed successfully");
document.location="signin.php";
</script>