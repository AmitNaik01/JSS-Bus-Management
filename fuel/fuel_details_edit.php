<?php include('../includes/meta.php');  ?>
<body>
        <?php include('../includes/sidebar.php');  ?>
        <div class="all-content-wrapper">
        <?php include('../includes/logo.php');  ?>
        <?php include('../includes/header.php');  ?>
        <?php
    include('../includes/connect.php');
    $fno = $_REQUEST['fno'];
    $sql = "select * from fuel_details where fno='$fno'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($res);
    ?>
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Edit <span class="table-project-n">Fuel</span> Details</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <form action="fuel_details_update.php" method="post" enctype="multipart/form-data" name="formID" id="formID" autocomplete="off">
                                    <input type="hidden" value="<?php echo $row['fno'];?>" name="fno">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <tr>
                                                <td width="177">Vehicleno</td>
                                                <td width="74"><input name="vehicalno" type="text" id="vehicalno" class="validate[required]" value="<?php echo $row['vehicalno'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td width="177">Date</td>
                                                <td width="74"><input name="date" type="date" id="date" class=" validate[required]," value="<?php echo $row['date'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td>Indent No</td>
                                                <td><input name="ino" type="text" id="ino" class=" validate[required],custom[onlyNumber]" value="<?php echo $row['ino']; ?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Recent Km</td>
                                                <td><input name="rkm" type="text" id="rkm" class=" validate[required],custom[onlyNumber]" value="<?php echo $row['rkm']; ?>"></td>
                                            </tr>
                                            <tr>
                                                <td>Last Km</td>
                                                <td><input name="lkm" type="text" id="lkm" class=" validate[required],custom[onlyNumber]" value="<?php echo $row['lkm']; ?>"></td>
                                            </tr>
                                            <tr>
                                                <td>Fuel Qty</td>
                                                <td><input name="qty" type="text" id="qty" class=" validate[required],custom[onlyNumber]" value="<?php echo $row['qty']; ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><a href="fuel.php"><button type="button" class="btn btn-info">Close</button></a></td>
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