<?php
  session_start();
 if (isset($_SESSION['priusername'])){
    
	   }
   else {
	   header("location: index.php");
  }  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--favicon-->
        <link rel="shortcut icon" href="favicon1.ico" type="image/icon">
        <link rel="icon" href="favicon1.ico" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>QUERIES</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
  <div class="bg">
   <div class="templatemo-content-container">
  <div class="templatemo-content-widget no-padding">
<?php
$connect = mysqli_connect('localhost','root','',"placement");
if(isset($_POST['s2']))
{ 
$Susn = $_POST['susn'];
$RESULT = $connect->query("SELECT * FROM student WHERE rollno='$Susn'");
$row = $RESULT->fetch_assoc();
echo "<br><h3>Details of Student '$Susn'&nbsp:&nbsp";
echo "</h3>";
            print "<center><tr>"; 
	print "<br><td>rollno :";
    echo $row['rollno'];
	print "<br></td><td>name :"; 
	echo $row['name'];	
	print "<br></td><td>gender :"; 
	echo $row['gender'];
	print "<br></td><td>dob :"; 
	echo $row['dob'];
	print "<br></td><td>pob :";
    echo $row['pob'];	
	print "<br></td><td>state name :"; 
	echo $row['stname'];
	print "<br></td><td>father name :"; 
	echo $row['fathername'];
	print "<br></td><td>mother name :"; 
	echo $row['mothername'];	
	print "<br></td><td>mobile no :";
	echo $row['mobileno'];
	print "<br></td><td>batch :";
	echo $row['batch'];
	print "<br></td><td>email :";
	echo $row['email'];
	print "<br></td><td>CPI :";
	echo $row['cpi'];
	print "<br></td><td>current sem :";
	echo $row['cursem'];
print "</td></tr></center>"; 
}
?>
<footer class="text-right">
            <p>Copyright &copy; 2018 IIITDMJ
            |  Developed by <a href="#" target="_parent">SSH Technology</a></p>
          </footer>         
        </div>
      </div>
    </div>    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
	</body>
	</html>