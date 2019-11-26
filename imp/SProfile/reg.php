<?php
   $connect = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
   mysql_select_db("placement") or die("Cant Connect to database"); // Selecting Database from Server
   
   
if(isset($_POST['submit']))
{ 
  
 $Name = $_POST['Fullname'];
 $USN = $_POST['USN'];
 $password = $_POST['PASSWORD'];
 $repassword = $_POST['repassword'];
 $Email = $_POST['Email'];
  
  

 $check = $connect->query("SELECT * FROM student WHERE rollno='".$USN."'") or die("Check Query");
 if(mysql_num_rows($check) == 0) 
 {
  if($repassword == $password)
  {
    
    
    if($query = mysql_query("INSERT INTO intostud(name, rollno ,password,email) VALUES ('$Name', '$USN', '$password','$Email')"))
    {
                       echo "<center> You have registered successfully...!! Fill all details </center>";
					             echo "<center><a href='reg1.php'>DETAILS</a> </center>";
					   
    }
  }
   else
    {
       echo "<center>Your password do not match</center>";
    }
   }
   else
   {
       echo "<center>This USN already exists</center>"; 
  }
}
?>

