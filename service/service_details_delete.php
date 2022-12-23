<?php
include('../includes/connect.php');
$bid=$_REQUEST["service_id"];
$sql="delete from service_details where service_id='$bid'";
mysqli_query($conn,$sql);
?>

<script>
alert("Route details deleted successfully");
document.location="service.php";
</script>
