<?php
  session_start();
  if($_SESSION["username"]){
    echo "Welcome, ".$_SESSION['username']."!";
  }
   else {
	   header("location: index.php");
}

?>
<?php
$connect = mysqli_connect("localhost", "root", "","placement"); // Establishing Connection with Server
// mysql_select_db("details"); // Selecting Database from Server
if(isset($_POST['update']))
{
$name = $_POST['Name'];
$gender = $_POST['gen'];
$phno = $_POST['Num'];
$email = $_POST['Email'];
$dob = $_POST['DOB'];
$cursem = $_POST['Cursem'];

if($name !=''|| $email !='')
{
	
    if($query = $connect->query("UPDATE studetail 
				SET name='$name', gender='$gender', mobileno='$phno', email='$email', dob='$dob', cursem='$cursem'
           		WHERE name = '$name'"))
    {
				echo "<center>Details has been received successfully...!!</center>";
      }

}

else{
	  echo "<center>enter your USN only...!!</center>";
}
}

?>



