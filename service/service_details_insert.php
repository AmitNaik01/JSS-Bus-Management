<?php
include('../includes/connect.php');
$vehicleno=$_POST['vehicleno'];
$sdate=$_POST['sdate'];
$particulars=$_POST['particulars'];
$approve_amt=$_POST['approve_amt'];

// echo $vehicleno;
// echo $sdate;
// echo $particulars;
// echo $approve_amt;
$sql="insert into service_details values(null,'$vehicleno','$sdate','$particulars','$approve_amt')";
mysqli_query($conn,$sql);
?>

<script>
alert("Service details inserted successfully");
document.location="service.php";
</script>