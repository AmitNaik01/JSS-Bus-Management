<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/c/CodingLabYT-->
<html lang="en" dir="ltr">
<?php include('../includes/metatag.php'); ?>

<body>
    <!-- Sidebar -->
    <?php include('../includes/sidebar.php'); ?>
    <!-- Sidebar End -->

    <section class="home-section">
        <!-- Navbar Header -->
        <?php include('../includes/navbar.php'); ?>
        <!-- End Navbar -->
        <div class="title-bar">
            <h2>Employee Details</h2>
        </div>

        <section class="home-section">

            <div class="home-content">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><a href="emp_details_form.php" class="btn btn-primary">Add New Details</a></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form name="form1" method="post" action="#">

                                    <table id="example" class="display table table-striped table-hover " style="width:100%">
                                        <thead>
                                            <tr>
                                                <th width="10%">SNo</th>
                                                <th width="20%">Vehicleno</th>
                                                <th width="30%">Employee Name</th>
                                                <th width="20%">Employee Role</th>
                                                <th width="30%">Phone Number</th>
                                                <th width="5%">Edit</th>
                                                <th width="5%">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody id="ans">

                                            <?php

                                            $conn = mysqli_connect("localhost", "root", "", "bus_management");
                                            // $sql="select * from route_details";
                                            $sql = "SELECT * FROM service_details WHERE vehicleno = 'ka35AB1001'";
                                            $res = mysqli_query($conn, $sql);
                                            $sl = 1;
                                            while ($row = mysqli_fetch_array($res)) {
                                            ?>
                                                <tr>

                                                    <td height="30">&nbsp;<?php echo $sl++; ?> </td>
                                                    <td>&nbsp;<?php echo $row['vehicleno']; ?></td>
                                                    <td>&nbsp;<?php echo $row['sdate']; ?></td>
                                                    <td>&nbsp;<?php echo $row['particulars']; ?></td>
                                                    <td>&nbsp;<?php echo $row['approve_amt']; ?></td>

                                                    <td  ><a href="emp_details_edit.php?empid=<?php echo $row['empid']; ?>"><i class="material-icons">&#xE254;</i></a></td>
                                                    <td><a onclick="return confirm('Are you sure you want to delete this item')" href="emp_details_delete.php?empid=<?php echo $row['empid']; ?>"><i class="material-icons" >&#xE872;</i></a></td>

                                                    <td align="center" width="18%"><a href="../route/route_details_edit.php?service_id=<?php echo $row['service_id']; ?>"><input type='button' value='Update' class='update'></a>
                                                        <a href="route_details_delete.php?service_id=<?php echo $row['service_id']; ?>"><input type='button' value='Delete' class='delete' onclick='return checkdelete()'></a>
                                                    </td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                        <!-- <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot> -->
                                    </table>
                                </form>
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