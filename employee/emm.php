<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
<?php include('../includes/metatag.php'); ?>

<body>
    <!-- Sidebar -->
    <?php include('../includes/sidebar.php'); ?>
    <!-- Sidebar End -->
    <div class="modal" id="myModal"></div>
    <section class="home-section">
        <!-- Navbar Header -->
        <?php include('../includes/navbar.php'); ?>
        <!-- End Navbar -->
        <div class="title-bar">
    <h2>Employee Details</h2>
</div>
  
        <section class="home-section">
        <div class="data-table-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Orders <span class="table-project-n">View</span></h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>


                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th width="130" height="75"><strong>SNo </strong></th>
                                            <th width="156"><strong>Vehicleno </strong></th>
                                            <th width="135"><strong>Employee Name </strong></th>
                                            <th width="135"><strong>>Employee Role</strong></th>
                                            <th width="133"><strong>Phone Number</strong></th>
                                            <th width="167"><strong>Edit</strong></th>
                                            <th width="190"><strong>Delete</strong></th>
                                            <!-- <th width="190"><strong>Delete</strong></th>
                                            <th width="190"><strong>Make Payments</strong></th> -->
                                        </tr>
                                    </thead>
                                    <tbody id="ans">

                                    <?php
                                            include('../includes/connect.php');
                                            $sl = 1;


                                            $sql = "select * from emp_details";
                                            $res = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($res)) {
                                            ?>


                                            <tr id=<?php echo $row["empid"]; ?>>
                                                
                                                <td >&nbsp;<?php echo $sl++; ?></td>
                                                <td>&nbsp;<?php echo $row['vehicleno']; ?></td>
                                                    <td>&nbsp;<?php echo $row['ename']; ?></td>
                                                    <td>&nbsp;<?php echo $row['role']; ?></td>
                                                    <td>&nbsp;<?php echo $row['phno']; ?></td>
                                                    <td  ><a href="emp_details_edit.php?empid=<?php echo $row['empid']; ?>"><i class="material-icons">&#xE254;</i></a></td>
                                                    <td><a onclick="return confirm('Are you sure you want to delete this item')" href="emp_details_delete.php?empid=<?php echo $row['empid']; ?>"><i class="material-icons" >&#xE872;</i></a></td>

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
            
        </section>

        
    </section>
    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/table.js"></script>
</body>

</html>


