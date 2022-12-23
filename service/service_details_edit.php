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
        $service_id = $_REQUEST['service_id'];
        $sql = "SELECT * FROM `service_details`WHERE service_id='$service_id'";
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
                                    <h1>Edit <span class="table-project-n">Service</span> Details</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">

                                    <form action="service_details_insert.php" method="post" enctype="multipart/form-data" name="formID" id="formID">
                                    <input type="hidden" value="<?php echo $row['service_id']; ?>" >
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <tr>
                                                <td width="177">Select Bus</td>
                                                <td width="74"><input name="vehicleno" type="text"  class="  validate[required]" value="<?php echo $row['vehicleno'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td>Date</td>
                                                <td><input name="sdate" type="date" class="validate[required]" value="<?php echo $row['sdate'];?>"></td>
                                            </tr>

                                            <tr>
                                                <td>Particulars</td>
                                                <td><textarea style="resize: none;" name="particulars"   class="validate[required]" >
                                                <?php echo $row['particulars'];?></textarea></td>
                                            </tr>
                                            <tr>
                                                <td>Approval Amt</td>
                                                <td><input name="approve_amt" type="text"  class="validate[required],custom[onlyNumber]" value="<?php echo $row['approve_amt'];?>" ></td>
                                            </tr>
                                            

                                            <tr>
                                                <td><a href="salary.php"><button type="button" class="btn btn-info">Close</button></a></td>
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