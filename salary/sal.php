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
            
            <div class="home-content">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><a href="emp_details_form.php" class="btn btn-primary">Add New Details</a></h4>
                            
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form name="form1" method="post" action="#">
                                    <table id="example" class="display table table-striped table-hover " style="width:100%" >
                                        <thead>
                                            <tr>
                                            
                                                <!-- <th >SNo</th>
                                                <th >Employee name</th>
                                                <th >Basic</th>
                                                <th >D A 10% </th>
                                                <th >Basic+</th>
                                                <th >DA</th>
                                                <th >Total</th>
                                                <th >Allow</th>
                                                <th >SPL Allowance</th>
                                                <th >Gross</th>
                                                <th >P F @12%</th>
                                                <th >Basic+</th>
                                                <th >Basic+</th>
                                                <th >Basic+</th>
                                                <th>Edit</th>
                                                <th>Delete</th> -->
                                                <td><strong><em>SNo</em></strong></td>
                                                <td><strong><em><strong>Employee name </strong></em></strong></td>
                                                <td><strong><em>Basic</em></strong></td>
                                                <td><strong><em>D A 10% </em></strong></td>
                                                <td><strong><em>Basic+</em></strong><strong><em>DA </em></strong><em><strong>Total</strong></em></td>
                                                <td><strong><em>Allow</em></strong></td>
                                                <td><strong><em>SPL</em></strong><em><strong>Allow</strong></em></td>
                                                <td><strong><em>Gross</em></strong></td>
                                                <td><strong><em>PF@12% </em></strong></td>
                                                <td><strong><em>Total</em></strong></td>
                                                <td><strong><em>PF@24% </em></strong></td>
                                                <td><strong><em>ESI 3.25% </em></strong></td>
                                                <td><strong><em>ESI 0.75% </em></strong></td>
                                                <td><strong><em>Total Ded </em></strong></td>
                                                <td><strong><em>Net Salary</em></strong></td>
                                                <td><strong><em>Edit</em></strong></td>
                                                <td><strong><em>Delete</em></strong></td>
                                               
                                                
                                            
                                            </tr>
                                        </thead>
                                        <tbody id="ans" >

                                            <?php
                                            include('../includes/connect.php');
                                            $sl = 1;


                                            $sql = "select * from salary_details";
                                            $res = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_array($res)) {
                                            ?>
                                                <tr eid=<?php echo $row["eid"]; ?>>
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

                                                    <td><a href="sal_details_edit.php?eid=<?php echo $row['eid']; ?>"><i class="material-icons">&#xE254;</i></a></td>
                                                    <td><a onclick="return confirm('Are you sure you want to delete this item')" href="sal_details_delete.php?eid=<?php echo $row['eid']; ?>"><i class="material-icons">&#xE872;</i></a></td>

                                                    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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