<?php include('../includes/meta.php');  ?>
<body>
        <?php include('../includes/sidebar.php');  ?>
        <div class="all-content-wrapper">
        <?php include('../includes/logo.php');  ?>
        <?php include('../includes/header.php');  ?>
        <?php
include('../includes/connect.php');
$rtno=$_REQUEST['rtno'];
$sql="select * from route_details where rtno='$rtno'";
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
                                    <h1>Edit <span class="table-project-n">Route</span> Details</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <form action="route_details_update.php" method="post" enctype="multipart/form-data" name="formID" id="formID" autocomplete="off">
                                    <input type="hidden" value="<?php echo $row['rtno'];?>" name="rtno">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <tr>
                                                <td width="177">Vehicleno</td>
                                                <td width="74"> <input name="vehicleno" type="text" id="vehicleno" class="validate[required]" value="<?php echo $row['vehicleno'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td width="177">Route Name</td>
                                                <td width="74"><input name="route" type="text" id="route"  class="validate[required],custom[onlyLetter]" value="<?php echo $row['route'];?>"></td>
                                            </tr>
                                            <!-- <tr>
                                                <td>Select Role</td>
                                                <td><input name="role" type="radio" value="driver" checked>
                                                    <span class="style3">Driver
                                                        <input name="role" type="radio" value="cleaner">Cleaner</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Contact Number</td>
                                                <td><input name="phno" type="text" class="validate[required],custom[mobile]"></td>
                                            </tr> -->
                                            <tr>
                                                <td><a href="emp.php"><button type="button" class="btn btn-info">Close</button></a></td>
                                                <td><input type="submit" name="Submit" value="SUBMIT" class="btn btn-primary"></td>
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