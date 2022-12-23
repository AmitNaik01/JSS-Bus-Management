<?php 
session_start(); 
include "../includes/connect.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users ";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
		

		if($row['user_name'] == $uname){
			if($row['password'] == $pass){
				$_SESSION['uname'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: ../home/home.php");
			}
			else{header("Location: index.php?error=Incorect Password");
		        exit();}
			
			
		}else{
			header("Location: index.php?error=Incorect Username");
		        exit();
			

		}
		
	
	}
	
}
else{
	header("Location: index.php");
	exit();
}
