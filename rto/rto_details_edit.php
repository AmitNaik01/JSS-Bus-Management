<?php include('../includes/meta.php');  ?>

<body>
<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<?php include('../includes/sidebar.php');  ?>

<div class="all-content-wrapper">
<?php include('../includes/logo.php');  ?>

<?php include('../includes/header.php');  ?>

<?php
include('../includes/connect.php');
$rid=$_REQUEST['rid'];
$sql="select * from rto_details where rid='$rid'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<div class="data-table-area mg-tb-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="sparkline13-list">
<div class="sparkline13-hd">
<div class="main-sparkline13-hd">
<h1>Add <span class="table-project-n">RTO</span> Details</h1>
</div>
</div>
<div class="sparkline13-graph">
<div class="datatable-dashv1-list custom-datatable-overright">

<form action="rto_details_update.php" method="post" enctype="multipart/form-data" name="formID" id="formID">
 <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
 <input type="hidden" value="<?php echo $row['rid'];?>" name="rid">
    <tr>
      <td width="177">Select Bus</td>
      <td width="74"><input name="vehicleno" type="text"  class="  validate[required]" value="<?php echo $row['vehicleno'];?>"></td>
                                                       
    </tr>
    <tr>
      <td >Insurence Date</td>
      <td><input  name="insurence" type="date"  class="validate[required],custom[onlyDate]" value="<?php echo $row['insurence'];?>"></td>
    </tr>
   
   <tr>
      <td>TAX Date </td>
      <td><input name="tax" type="date"   class="validate[required]," value="<?php echo $row['tax'];?>"></td>
    </tr>
    <tr>
      <td>Fitness Date </td>
      <td ><input name="fitness" type="date"  class="validate[required]," value="<?php echo $row['fitness'];?>"></td>
    </tr>
    <tr>
      <td>Permit Date </td>
      <td ><input name="permit" type="date"   class="validate[required]," value="<?php echo $row['permit'];?>"></td>
    </tr>
	 <!-- <tr>
      <td>Pic</td>
      <td><input type="file" name="pic" class="validate[required]"></td>
    </tr> -->
    <tr>
      <td><a href="rto.php"><button type="button" class="btn btn-info">Close</button></a></td>
      <td><input type="submit" name="Submit" value="SUBMIT" class="btn btn-primary"></td>
      <!-- <td>&nbsp;</td> -->
    </tr>
  </table>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include('../includes/val.php'); ?>
<?php include('../includes/footer.php'); ?>  