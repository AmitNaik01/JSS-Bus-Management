
<!doctype html>
<html class="no-js" lang="">


<?php include('metatag.php'); ?>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <?php include('sidebar.php'); ?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
 <?php include('header.php'); ?>
            <!-- Mobile Menu start -->
           <?php include('mobile_menu.php'); ?>
        <!-- Basic Form Start -->
        <div class="basic-form-area mg-b-15">
            <div class="container-fluid">
               
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                <div class="main-sparkline12-hd">
                                    <h1>Change Password</h1>
                                </div>
                            </div>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
<form name="form1" method="post" action="changepassword.php" class="form-horizontal">
   <table width="379" height="301" border="0" align="center">
    
    <tr>
      <td width="163"><strong>Old Password*</strong></td>
      <td width="328"><input name="old_password" type="text" id="old_pwd" class="form-control"></td>
    </tr>
    <tr>
      <td><strong>New Password* </strong></td>
      <td><input name="new_password" type="text" id="password" maxlength="6" minlength="6" title="Enter 6 characters minimum" class="form-control"></td>
    </tr>
    <tr>
      <td><strong>Confirm Password* </strong></td>
      <td><input name="confirm_password" type="text" id="con_pwd" id="confirm_password" minlength="6" maxlength="6" title="Enter 6 characters minimum" class="form-control"><span id='message'></span></td>
    </tr>
    <tr>
      <td height="29" colspan="2"><div align="center">
      <input type="submit" name="Submit" value="Submit" class="btn btn-success " onclick="PrintDiv();">
        <input type="reset" name="Reset" value="Reset" class="btn btn-default">
       </div></td>
    </tr>
  </table>
  <div align="center"></div>
</form>
 </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Form End-->
<?php include('footer.php'); ?>
<?php include('val.php'); ?>
</body>

</html>
