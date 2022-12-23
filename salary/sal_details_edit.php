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
$emid=$_REQUEST['eid'];
$sql="SELECT * FROM `salary_details` WHERE eid='$emid'";
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
<h1>Edit <span class="table-project-n">Salary</span> Details</h1>
</div>
</div>
<div class="sparkline13-graph">
<div class="datatable-dashv1-list custom-datatable-overright">

<form action="sal_details_update.php" method="post" enctype="multipart/form-data" name="formID" id="formID">
 <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
 <input type="hidden" value="<?php echo $row['eid'];?>" name="eid">
    <tr>
      <td width="177">Employee Name</td>
      <td width="74"><input name="ename" type="text"  class="validate[required],custom[onlyLetter]" value="<?php echo $row['ename'];?>"></td>
    </tr>
    <tr>
      <td >Basic Salary</td>
      <td><input name="basic" type="text"  class="validate[required],custom[onlyNumber]" value="<?php echo $row['basic'];?>"></td>
    </tr>
   
   <tr>
      <td>Allowence</td>
      <td><input name="allow" type="text"   class="validate[required],custom[onlyNumber]" value="<?php echo $row['allow'];?>"></td>
    </tr>
    <tr>
      <td>Special Allowence</td>
      <td ><input name="spl_allow" type="text"  class="validate[required],custom[onlyNumber]" value="<?php echo $row['spl_allow'];?>"></textarea></td>
    </tr>
	 <!-- <tr>
      <td>Pic</td>
      <td><input type="file" name="pic" class="validate[required]"></td>
    </tr> -->
    <tr>
      <td><a href="salary.php"><button type="button" class="btn btn-info">Close</button></a></td>
      <td><input type="submit" name="Submit" value="UPDATE" class="btn btn-primary"></td>
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