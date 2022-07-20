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
            <h2>Add Route Details</h2>
        </div>

        <?php $conn = mysqli_connect("localhost", "root", "", "bus_management");
        $sql = "SELECT Distinct vehicleno FROM route_details";
        // $sql ="SELECT Distinct vehicleno FROM bus_details";
        $res = mysqli_query($conn, $sql);
        ?>

        <section class="home-section">
            
            <div class="home-content">

                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <form name="form1" id="formID" method="post" action='route_details_insert.php' style="margin-left: 25px ;display:flex;">
                                        <div align="center">
                                            <table width="600" border="0" align="center">

                                                <tr>
                                                <tr>
                                                    <td height="90" colspan="2" >
                                                        <div class="close"><a href="route.php"><img width="60%" src="../assets/img/close.png" alt="" srcset=""></a></div>
                                                        <div align="center" style="font-weight: 600;font-size: 20px; padding-left: 100px"><span class="style1">Route Details </span></div>
                                                        
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td width="350" ><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;padding-left: 100px;
                                                    ">Vehicleno</span></td>
                                                    <td height="70">
                                                        <select name="vehicleno" id="vehicleno" required >
                                                            <?php while ($rows = mysqli_fetch_array($res)) {
                                                            ?>
                                                                <option value="<?php echo $rows['vehicleno']; ?>"><?php echo $rows['vehicleno']; ?></option>

                                                            <?php
                                                            }
                                                            ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td height="70"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 15px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;padding-left: 100px">Route Name </span></td>
                                                    <td ><input name="route" type="text" id="route"  class=" form-control validate[required],custom[onlyLetter]"></td>
                                                </tr>   
                                            </table>
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