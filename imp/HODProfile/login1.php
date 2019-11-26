<?php
	session_start();
	$husername = ($_POST['username']);
	$password  = ($_POST['password']);


	if ($husername&&$password)
	{
		$connect = mysqli_connect("localhost","root","","placement") or die("Couldn't Connect");
		// mysql_select_db("placement") or die("Cant find DB");

		$query = $connect->query("SELECT * FROM company WHERE cid='$husername'");

		$numrows = $query->num_rows;

		if ($numrows!=0)
		{
			while($row = $query->fetch_assoc())
			{
				
				$dbusername = $row['cid'];
				$dbpassword = $row['password'];
				$dbname = $row['name'];
			}
			if ($husername==$dbusername && $password==$dbpassword)
			{
				  echo "<center>Login Successfull..!! <br/>Redirecting you to HomePage! </br>If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='3; url=index.php'>";
				$_SESSION['husername'] = $dbname;
			}
			else {
				$message = "Username and/or Password and/or Department are/is incorrect.";
  			echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=index.php'>";
			}
			  } else
			   die("User not exist");
	}
	else {
	$message = "Feild Can't be Left Blank";
  			echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='index.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=index.php'>";
			  }
		?>
