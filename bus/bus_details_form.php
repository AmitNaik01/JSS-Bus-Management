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
            <h2>Add Bus Details</h2>
        </div>

        <?php $conn = mysqli_connect("localhost", "root", "", "bus_management");
        $sql = "SELECT Distinct vehicleno FROM route_details";
        // $sql ="SELECT Distinct vehicleno FROM bus_details";
        $res = mysqli_query($conn, $sql);
        ?>

        <section class="home-section">
            <!-- <div class="page-header">
                <h4 class="page-title">Add Employee Details</h4>

            </div> -->
            <div class="home-content">

                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <form name="form1" id="formID" method="post" action='bus_details_insert.php' style="margin-left: 25px ;display:flex;">
                                        <div align="center">
                                            <table width="600" border="0" align="center">

                                                <tr>
                                                <tr>
                                                    <td height="90" colspan="2" >
                                                        <div class="close"><a href="bus.php"><img width="60%" src="../assets/img/close.png" alt="" srcset=""></a></div>
                                                        <div align="center" style="font-weight: 600;font-size: 20px; padding-left: 100px"><span class="style1">Bus Details </span></div>
                                                        
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td width="350" ><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;padding-left: 100px;
                                                    ">Vehicleno</span></td>
                                                    <td height="70">
                                                        <!-- <input name="admin_name" type="text" id="admin_name" class="form-control validate[required,custom[onlyLetter]]"> -->
                                                        <input name="vehicleno" type="text" id="vehicleno" class=" form-control validate[required]" >
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="70"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;padding-left: 100px">Driver Name </span></td>
                                                    <td ><input name="driver" type="text" id="driver"  class=" form-control validate[required],custom[onlyLetter]"></td>
                                                </tr>
                                                <tr>
                                                    <td height="70"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;padding-left: 100px">Cleaner Name </span></td>
                                                    <td ><input name="cleaner" type="text" id="cleaner" class=" form-control validate[required],custom[onlyLetter]"></td>
                                                </tr>
                                                
                                               
                                                
                                            </table>
                                            <!-- <a href="employee.php"><button type="button" class="btn btn-info">Back</button></a> -->

                                            <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
                                            <input type="reset" class="btn btn-danger" name="Reset" value="Reset">


                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </section>


    </section>
    <script src="../assets/js/script.js"></script>
    <script type="text/javascript" src="../assets/js/fetchnDisp.js"></script>
    <?php include('../includes/valid.php'); ?>
</body>

</html>