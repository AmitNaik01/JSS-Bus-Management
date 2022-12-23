
<?php
session_start();
?>
<?php
		
	 $a=$_POST['new_password'];
   	$b=$_POST['confirm_password'];
	
		include('../includes/connect.php');
		$sql = "select * from users where user_name ='".$_SESSION['uname']."' and password='".$_POST['old_password']."'";
		$res=$conn->query($sql);
	if($a==$b)
	{
		if(mysqli_num_rows($res)>0)
		{
			 $sql1 = "update users set password = '".$_POST['new_password']."' where user_name ='".$_SESSION['uname']."'";
			$res1 = $conn->query($sql1);
			?>
				<script>
					alert('Successfully updated your password');
					document.location="cp.php";
				</script>
			<?php
		} 
		else
		{
			?>
				<script>
					alert('Failed to update your password');
					document.location="cp.php";
				</script>
			<?php
		}
	}
	else
		{
			?>
				<script>
					alert('New Password and Retype Password do not match');
					document.location="cp.php";
				</script>
			<?php
		}
		
?>
