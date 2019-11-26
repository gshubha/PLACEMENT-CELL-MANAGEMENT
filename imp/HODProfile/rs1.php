<?php
	session_start();
	
	$USN1 = $_POST['USN'];
	$password = $_POST['PASSWORD'];
	$confirm = $_POST['repassword'];
	
	$connect = mysqli_connect("localhost", "root", "","placement")
    or die("Cant Connect to database"); // Selecting Database from Server
	
	if($password == $confirm) {
		if($sql = $connect->query("UPDATE company SET password ='$password' WHERE cid = '$USN1'"));
		echo "<center>Password Reset Complete</center>";
		echo "<p><center><a href='http://localhost/imp/Homepage/home.php'>Redirect to homepage</a></center></p>";
		session_unset();
	} else
	echo "Update Failed";
?>