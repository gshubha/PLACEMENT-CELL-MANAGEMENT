<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "placement"); // Establishing Connection with Server
// mysql_select_db("placement"); // Selecting Database from Server

	$Username = $_SESSION['username'];
	$Password = $_POST['Password'];
	$repassword = $_POST['repassword'];
	$cur = $_POST['curpassword'];
	if($Password && $repassword && $cur)
	{
		if($Password == $repassword)
		{
			$sql = $connect->query("SELECT * FROM student WHERE name='$Username'");
			if($sql->num_rows == 1)
			{
				$row = $sql->fetch_assoc();
				$dbpassword = $row['password'];

				if($cur == $dbpassword)
				{
					if($query =$connect->query("UPDATE student SET password = '$Password' WHERE name = '$Username'"))
					{
						echo "<center>Password Changed Successfully</center>";
					} else {
						echo "<center>Can't Be Changed! Try Again</center>";
					}
				} else {
					die("<center>Error! Please Check ur Password</center>");
				}
			} else {
				die("<center>Username not Found</center>");
			}
		} else{
			die("<center>Passwords Donot Match</center>");
		}
	} else {
		die ("<center>Enter All Fields</center>");
	}
