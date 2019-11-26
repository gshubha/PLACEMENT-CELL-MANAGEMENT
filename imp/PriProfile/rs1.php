<?php
	session_start();
	
	$USN1 = $_POST['USN'];
	$password = $_POST['PASSWORD'];
	$confirm = $_POST['repassword'];
	
	$connect = mysqli_connect("localhost", "root", "","placement")
     or die("Cant Connect to database"); // Selecting Database from Server
	
	if($password == $confirm) {
		if($sql = $connect->query("UPDATE administrator SET password ='$password' WHERE usrid = '$USN1'"));
		echo "<center>Password Reset Complete</center>";
		echo "<center> <a href='index.php'>Go Back</a></center>";
		session_unset();
	} else
	echo "Update Failed";
?>