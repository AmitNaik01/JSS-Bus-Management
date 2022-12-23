<?php
include('../includes/connect.php');
$bid=$_POST['id'];
$vehicleno=$_POST['vehicleno'];
$driver=$_POST['driver'];
$cleaner=$_POST['cleaner'];

echo $vehicleno;
echo $driver;
echo $cleaner;
echo $bid;
$sql="update bus_details set vehicleno='$vehicleno',driver='$driver',cleaner='$cleaner' where id='$bid'";
mysqli_query($conn,$sql);
?>

<script>
alert("bus details updated successfully");
document.location="bus.php";
</script>