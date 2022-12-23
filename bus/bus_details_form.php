<?php include('../includes/meta.php');  ?>
<body>
        <?php include('../includes/sidebar.php');  ?>
        <div class="all-content-wrapper">
        <?php include('../includes/logo.php');  ?>
        <?php include('../includes/header.php');  ?>
        <?php
include('../includes/connect.php');
$id=$_REQUEST['id'];
$sql="SELECT * FROM `bus_details` WHERE id='$id'";
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
                                    <h1>Add <span class="table-project-n">Bus</span> Details</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <form action="bus_details_insert.php" method="post" enctype="multipart/form-data" name="formID" id="formID" autocomplete="off">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <tr>
                                                <td width="177">Vehicleno</td>
                                                <td width="74"><input name="vehicleno" type="text"  class=" validate[required]"  >
                                                        </td>
                                            </tr>
                                            <tr>
                                                <td width="177">Driver Name</td>
                                                <td width="74"><input name="driver" type="text" class="validate[required],custom[onlyLetter]" ></td>
                                            </tr>
                                            <tr>
                                                <td>Cleaner Name</td>
                                                <td><input name="cleaner" type="text" class="validate[required],custom[onlyLetter]" ></td>
                                                </td>
                                            </tr>
                                            
                                            <tr>
                                                <td><a href="bus.php"><button type="button" class="btn btn-info">Close</button></a></td>
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