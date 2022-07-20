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
            <h2>RTO Details</h2>
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
                                                <th>
                                                    <strong><em>SNo</em></strong></div>
                                                </th>
                                                <th >
                                                    <em> Vehicle No </em></div>
                                                </th>
                                                <th >
                                                     Insurence<strong></strong></div>
                                                </th>
                                                <th >
                                                    <strong> Tax </strong></div>
                                                </th>
                                                <th >
                                                    <strong><em>Fitness</em></strong></div>
                                                </th>
                                                <th >
                                                    <strong><em>Permit</em></strong></div>
                                                </th>
                                                <th >
                                                    <em><strong>Edit</strong></em><strong><em></em></strong></div>
                                                </th>
                                                <th >
                                                    <em><strong>Delete</strong></em><strong><em></em></strong></div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="ans">

                                            <?php
                                            include('../includes/connect.php');
                                            $sl = 1;


                                            $sql = "select * from rto_details";
                                            $res = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($res)) {
                                            ?>
                                                <tr>
                                                <tr id=<?php echo $row["rid"]; ?>>
                                                    <td height="30">&nbsp;<?php echo $sl++; ?> </td>
                                                    <td>&nbsp;<?php echo $row['vehicleno']; ?></td>
                                                    <td>&nbsp;<?php echo $row['insurence']; ?></td>
                                                    <td>&nbsp;<?php echo $row['tax']; ?></td>
                                                    <td>&nbsp;<?php echo $row['fitness']; ?></td>
                                                    <td>&nbsp;<?php echo $row['permit']; ?></td>


                                                    <td><a href="rto_details_edit.php?rid=<?php echo $row['rid']; ?>"><i class="material-icons">&#xE254;</i></a></td>
                                                    <td><a onclick="return confirm('Are you sure you want to delete this item')" href="rto_details_delete.php?rid=<?php echo $row['rid']; ?>"><i class="material-icons">&#xE872;</i></a></td>



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