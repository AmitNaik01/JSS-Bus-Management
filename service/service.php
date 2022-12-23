<?php include('../includes/meta.php');  ?>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <?php include('../includes/sidebar.php');  ?>

    <div class="all-content-wrapper">
        <?php include('../includes/logo.php');  ?>

        <?php include('../includes/header.php');  ?>

        <?php $conn = mysqli_connect("localhost", "root", "", "bus_management");
        $sql = "SELECT Distinct vehicleno FROM service_details";
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

                                    <h1>Service <span class="table-project-n">Details</span> Table
                                        
                                    </h1>


                                </div>


                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <!-- <select class="form-control">
                                            <option value="">Export Basic</option>
                                            <option value="all">Export All</option>
                                            <option value="selected">Export Selected</option>
                                        </select> -->
                                        <a href="service_details_form.php" class="btn btn-info" >ADD NEW</a>



                                    </div>




                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <label>select Bus : </label>
                                        <select id="busNo" onchange="selectBrand()">
                                            <?php while ($rows = mysqli_fetch_array($res)) {
                                            ?>
                                                <option value="<?php echo $rows['vehicleno']; ?>"><?php echo $rows['vehicleno']; ?></option>

                                            <?php
                                            }
                                            ?>
                                            <thead>
                                                <tr>
                                                    <!-- <th data-field="state" data-checkbox="true"></th> -->

                                                    <th>
                                                        <div><strong><em>SNo</em></strong></div>
                                                    </th>
                                                    <th>
                                                        <div><em><strong>Vehicleno</strong></em></div>
                                                    </th>
                                                    <th>
                                                        <div><em>Date</em></div>
                                                    </th>
                                                    <th>
                                                        <div><em>Particulars </strong></em></div>
                                                    </th>
                                                    <th>
                                                        <div><em>Approval Amt <strong></strong></em></div>
                                                    </th>

                                                    <th>
                                                        <div><em><strong>Edit</strong></em><strong><em></em></strong></div>
                                                    </th>
                                                    <th>
                                                        <div><em><strong>Delete</strong></em><strong><em></em></strong></div>
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody id="ans">
                                                <?php

                                                $conn = mysqli_connect("localhost", "root", "", "bus_management");
                                                // $sql="select * from route_details";
                                                $sql = "SELECT * FROM service_details WHERE vehicleno ='KA25AB0331'";
                                                $res = mysqli_query($conn, $sql);
                                                $sl = 1;
                                                while ($row = mysqli_fetch_array($res)) {
                                                ?>
                                                    <tr>

                                                        <!-- <td height="30">&nbsp;</td> -->
                                                        <td height="30">&nbsp;<?php echo $sl++; ?> </td>
                                                        <td>&nbsp;<?php echo $row['vehicleno']; ?></td>
                                                        <td>&nbsp;<?php echo $row['sdate']; ?></td>
                                                        <td>&nbsp;<?php echo $row['particulars']; ?></td>
                                                        <td>&nbsp;<?php echo $row['approve_amt']; ?></td>
                                                        <td><a  href="service_details_edit.php?service_id=<?php echo $row['service_id']; ?>"><i class="fa fa-pencil fa-2x icon-wrap blue-color" aria-hidden="true"></i></a></td>
                                                    <td><a onclick="return confirm('Are you sure you want to delete this item')" href="service_details_delete.php?service_id=<?php echo $row['service_id']; ?>"><i class="fa fa-trash fa-2x icon-wrap red-color" aria-hidden="true"></i></a></td>
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="../js/select/fetchnDisp.js"></script>
        <?php include('../includes/footer.php'); ?>