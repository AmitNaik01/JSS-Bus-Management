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
                                    <h1>Salary <span class="table-project-n">Details</span> Table 
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
                                        <a href="sal_details_form.php" class="btn btn-info" >ADD NEW</a>
                                    </div>


                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <!-- <th data-field="state" data-checkbox="true"></th> -->

                                                <th>SNo</th>
                                                <th>Employee name </th>
                                                <th>Basic</th>
                                                <th>D A 10%</th>
                                                <th>Basic+DA Total</th>
                                                <th>Allow</th>
                                                <th>Spl Allow</th>
                                                <th>Gross</th>
                                                <th>PF@12% </th>
                                                <th>Total</th>
                                                <th>PF@24% </th>
                                                <th>ESI 3.25% </th>
                                                <th>ESI 0.75% </th>
                                                <th>Total Ded</th>
                                                <th>Net Salary</th>
                                                <th width="5%">Edit</th>
                                                <th width="5%">Delete</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include('../includes/connect.php');
                                            $sl = 1;


                                            $sql = "select * from salary_details";
                                            $res = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($res)) {
                                            ?>
                                                <tr eid=<?php echo $row["eid"]; ?>>
                                                    <!-- <td height="30"> </td> -->
                                                    <td height="30"><?php echo $sl++; ?> </td>
                                                    <td>&nbsp;<?php echo $row['ename']; ?></td>
                                                    <td>&nbsp;<?php echo $row['basic']; ?></td>
                                                    <td>&nbsp;<?php echo $row['da_20']; ?></td>
                                                    <td>&nbsp;<?php echo $row['basic_da_total']; ?></td>
                                                    <td>&nbsp;<?php echo $row['allow']; ?></td>
                                                    <td>&nbsp;<?php echo $row['spl_allow']; ?></td>
                                                    <td>&nbsp;<?php echo $row['gross']; ?></td>
                                                    <td>&nbsp;<?php echo $row['pf_12']; ?></td>
                                                    <td>&nbsp;<?php echo $row['total']; ?></td>
                                                    <td>&nbsp;<?php echo $row['pf_24']; ?></td>
                                                    <td>&nbsp;<?php echo $row['esi_3']; ?></td>
                                                    <td>&nbsp;<?php echo $row['esi_75']; ?></td>
                                                    <td>&nbsp;<?php echo $row['total_ded']; ?></td>
                                                    <td>&nbsp;<?php echo $row['net_sal']; ?></td>
                                                    

                                                    <td><a href="sal_details_edit.php?eid=<?php echo $row['eid']; ?>"><i class="fa fa-pencil fa-2x icon-wrap blue-color" aria-hidden="true"></i></a></td>
                                                    <td><a onclick="return confirm('Are you sure you want to delete this item')" href="sal_details_delete.php?eid=<?php echo $row['eid']; ?>"><i class="fa fa-trash fa-2x icon-wrap red-color" aria-hidden="true"></a></td>

                                                    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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