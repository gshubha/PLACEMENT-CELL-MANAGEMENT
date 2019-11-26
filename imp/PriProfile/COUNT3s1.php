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
    <title>Manage Students</title>
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
            <div class="panel panel-default table-responsive">
			<table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>            
                    <td><a class="white-text templatemo-sort-by">ROll No </a></td>
                    <td><a  class="white-text templatemo-sort-by">Name </a></td>
                    <td><a  class="white-text templatemo-sort-by">Gender </a></td>
                    <td><a  class="white-text templatemo-sort-by">DOB </a></td>
					   <td><a  class="white-text templatemo-sort-by">POB </a></td>
                       <td><a  class="white-text templatemo-sort-by">State Name</a></td>
   <td><a  class="white-text templatemo-sort-by">Father Name </a></td>               
   <td><a  class="white-text templatemo-sort-by">Mother Name </a></td>
   <td><a  class="white-text templatemo-sort-by">Mobile No </a></td>
   <td><a  class="white-text templatemo-sort-by">Batch </a></td>
			      <td><a  class="white-text templatemo-sort-by">email </a></td>
			      <td><a  class="white-text templatemo-sort-by">CPI </a></td>
				     <td><a class="white-text templatemo-sort-by">Current Sem </a></td>
				     
				  </thead>
			   </tr>			   
 <?php		
$connect = mysqli_connect('localhost','root','',"placement");
if(isset($_POST['s1']))
{ 
$Sname = $_POST['sname'];
$RESULT = $connect->query("SELECT count(*) FROM student WHERE name LIKE '%$Sname%' ");
$data=$RESULT->fetch_assoc();
echo "<br><h3>Number of Students with Name '$Sname'&nbsp:&nbsp";
echo $data['count(*)'];
echo "</h3>"; 
$sql = $connect->query("SELECT * FROM student WHERE name LIKE '%$Sname%'");
while($row = $sql->fetch_assoc())
{
              print "<tr>"; 	
              
              echo '<td>'.$row['rollno'].'</td>';		        
              echo '<td>'.$row['name'].'</td>';		
	            echo '<td>'.$row['gender'].'</td>';	
              echo '<td>'.$row['dob'].'</td>';	
              echo '<td>'.$row['pob'].'</td>';		
              echo '<td>'.$row['stname'].'</td>';	
              echo '<td>'.$row['fathername'].'</td>';	 
              echo '<td>'.$row['mothername'].'</td>';		
              echo '<td>'.$row['mobileno'].'</td>';	
              echo '<td>'.$row['batch'].'</td>';	
              echo '<td>'.$row['email'].'</td>';	
              echo '<td>'.$row['cpi'].'</td>';	
              echo '<td>'.$row['cursem'].'</td>';	
            print "</tr>"; 
}
}
?>
     </tbody>
              </table>  
			  </div>
			  </div>
			  </div>
 <footer class="text-right">
            <p>Copyright &copy; 2018 IIITDMJ
            |  Developed by <a href="#" target="_parent">SSH Technology</a></p>
                        <center>    <a href ="http://localhost/imp/PriProfile/studsearch.php"> Return</a>  </center>
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