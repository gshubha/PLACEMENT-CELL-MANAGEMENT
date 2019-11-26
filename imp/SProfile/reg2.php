<?php
   $connect = mysqli_connect("localhost", "root","","placement") or die("Cant Connect to database");  
if(isset($_POST['submit']))
{ 
 $USN = $_POST['USN'];
 $Name = $_POST['Fullname'];
 $gender = $_POST['gender'];
 $dob = $_POST['DOB'];
 $pob = $_POST['pob'];
 $stname = $_POST['stname'];
 $fathername = $_POST['fathername'];
 $mothername = $_POST['mothername'];
 $mobileno = $_POST['mobileno'];
 $batch = $_POST['batch'];
 $Email = $_POST['Email'];
 $password = $_POST['password'];
 $cpi = $_POST['cpi'];
 $cursem = $_POST['cursem'];
 
 if($query = $connect->query("INSERT INTO student VALUES ( '$USN','$Name','$gender','$dob','$pob','$stname','$fathername','$mothername','$mobileno','$batch','$Email','$password','$cpi','$cursem')"))
 {
                    echo "<center> You have registered successfully...!!</center>";
                    echo "<center><a href='http://localhost/imp/Homepage/home.php'>Redirect to homepage</a> </center>";
 }
 else
    {
       echo "<center>Your password do not match</center>";
    }
}  
   
?>

 
    
   
  

