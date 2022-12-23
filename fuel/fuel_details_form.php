<?php include('../includes/meta.php');  ?>
<body>
        <?php include('../includes/sidebar.php');  ?>
        <div class="all-content-wrapper">
        <?php include('../includes/logo.php');  ?>
        <?php include('../includes/header.php');  ?>
        <?php $conn = mysqli_connect("localhost", "root", "", "bus_management");
        $sql = "SELECT Distinct vehicleno FROM bus_details";
        // $sql ="SELECT Distinct vehicleno FROM bus_details";
        $res = mysqli_query($conn, $sql);
        ?>
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Add <span class="table-project-n">Fuel</span> Details</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <form action="fuel_details_insert.php" method="post" enctype="multipart/form-data" name="formID" id="formID" autocomplete="off">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <tr>
                                                <td width="177">Select Bus</td>
                                                <td width="74"><select name="vehicleno" id="vehicleno" required>
                                                        <?php while ($rows = mysqli_fetch_array($res)) {
                                                        ?>
                                                            <option value="none" selected disabled hidden>Select Bus</option>
                                                            <option value="<?php echo $rows['vehicleno']; ?>"><?php echo $rows['vehicleno']; ?></option>

                                                        <?php
                                                        }
                                                        ?></td>
                                            </tr>
                                            <tr>
                                                <td width="177">Date</td>
                                                <td width="74"><input name="date" type="date" id="date"  class=" validate[required],"></td>
                                            </tr>
                                            <tr>
                                                <td>Indent No</td>
                                                <td><input name="ino" type="text" id="ino"  class=" validate[required],custom[onlyNumber]">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Recent Km</td>
                                                <td><input name="rkm" type="text" id="rkm"  class="validate[required],custom[onlyNumber]"></td>
                                            </tr>
                                            <tr>
                                                <td>Last Km</td>
                                                <td><input name="lkm" type="text" id="lkm"  class="validate[required],custom[onlyNumber]"></td>
                                            </tr>
                                            <tr>
                                                <td>Fuel Qty</td>
                                                <td><input name="qty" type="text" id="qty"  class=" validate[required],custom[onlyNumber]"></td>
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