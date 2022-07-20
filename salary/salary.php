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
    <h2>Salary Details</h2>
</div>
  
        <section class="home-section">
            
            <div class="home-content">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><a href="sal_details_form.php" class="btn btn-primary">Add New Details</a></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form name="form1" method="post" action="#">
                                  
                                    <table id="example" class="display table table-striped table-hover " style="width:100%" >
                                        <thead>
                                            <tr>
                                                <th width="10%">SNo</th>
                                                <th width="20%">Employee name </th>
                                                <th width="30%">Basic</th>
                                                <th width="20%">D A 10%</th>
                                                <th width="30%">Basic+DA Total</th>
                                                <th width="30%">Allow</th>
                                                <th width="30%">Spl Allow</th>
                                                <th width="30%">Gross</th>
                                                <th width="30%">PF@12% </th>
                                                <th width="30%">Total</th>
                                                <th width="30%">PF@24% </th>
                                                <th width="30%">ESI 3.25% </th>
                                                <th width="30%">ESI 0.75%  </th>
                                                <th width="30%">Total Ded</th>
                                                <th width="30%">Net Salary</th>
                                                <th width="5%">Edit</th>
                                                <th width="5%">Delete</th>
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