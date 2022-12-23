<?php include('../includes/meta.php');  ?>

<body>
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
                                    <h1>Bus <span class="table-project-n">Details</span> Table 
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
                                        <a href="bus_details_form.php" class="btn btn-info" >ADD NEW</a>
                                    </div>


                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <!-- <th data-field="state" data-checkbox="true"></th> -->

                                                <th >SNo</th>
                                                <th >Vehicleno</th>
                                                <th >Driver Name</th>
                                                <th >Cleaner Name</th>
                                                <th >Edit</th>
                                                <th >Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include('../includes/connect.php');
                                            $sl = 1;


                                            $sql = "select * from bus_details";
                                            $res = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($res)) {
                                            ?>
                                                <tr>

                                                    <!-- <td height="30">&nbsp;</td> -->
                                                    <td height="30">&nbsp;<?php echo $sl++; ?> </td>
                                                    <td>&nbsp;<?php echo $row['vehicleno']; ?></td>
                                                    <td>&nbsp;<?php echo $row['driver']; ?></td>
                                                    <td>&nbsp;<?php echo $row['cleaner']; ?></td>

                                                    <td  ><a href="bus_details_edit.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil fa-2x icon-wrap blue-color" aria-hidden="true"></i></a></td>
                                                    <td><a onclick="return confirm('Are you sure you want to delete this item')" href="bus_details_delete.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash fa-2x icon-wrap red-color" aria-hidden="true"></i></a></td>

                                                    

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

        <?php include('../includes/footer.php'); ?>