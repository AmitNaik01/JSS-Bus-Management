<?php include('../includes/meta.php');  ?>

<body>
<?php $conn = mysqli_connect("localhost", "root", "", "bus_management");
        $sql = "SELECT Distinct ename FROM emp_details";
        // $sql ="SELECT Distinct vehicleno FROM bus_details";
        $res = mysqli_query($conn, $sql);
        ?>
<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<?php include('../includes/sidebar.php');  ?>

<div class="all-content-wrapper">
<?php include('../includes/logo.php');  ?>

<?php include('../includes/header.php');  ?>


<div class="data-table-area mg-tb-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="sparkline13-list">
<div class="sparkline13-hd">
<div class="main-sparkline13-hd">
<h1>Add <span class="table-project-n">Salary</span> Details</h1>
</div>
</div>
<div class="sparkline13-graph">
<div class="datatable-dashv1-list custom-datatable-overright">

<form action="sal_details_insert.php" method="post" enctype="multipart/form-data" name="formID" id="formID">
 <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
    <tr>
      <!-- <td width="177">Employee Name</td>
      <td width="74"><input name="ename" type="text"  class="validate[required],custom[onlyLetter]"></td> -->
      <td width="177">Select Employee</td>
                                                <td width="74"><select name="ename" id="ename" required>
                                                        <?php while ($rows = mysqli_fetch_array($res)) {
                                                        ?>
                                                            <option value="none" selected disabled hidden>Select Employee</option>
                                                            <option value="<?php echo $rows['ename']; ?>"><?php echo $rows['ename']; ?></option>

                                                        <?php
                                                        }
                                                        ?></td>
    </tr>
    <tr>
      <td >Basic Salary</td>
      <td><input name="basic" type="text"  class="validate[required],custom[onlyNumber]"></td>
    </tr>
   
   <tr>
      <td>Allowance</td>
      <td><input name="allow" type="text"   class="validate[required],custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td>Special Allowance</td>
      <td ><input name="spl_allow" type="text"  class="validate[required],custom[onlyNumber]"></textarea></td>
    </tr>
	 <!-- <tr>
      <td>Pic</td>
      <td><input type="file" name="pic" class="validate[required]"></td>
    </tr> -->
    <tr>
      <td><a href="salary.php"><button type="button" class="btn btn-info">Close</button></a></td>
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