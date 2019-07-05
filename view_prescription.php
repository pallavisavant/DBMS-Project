<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['manager_id'];
$fname=$_SESSION['first_name'];
$lname=$_SESSION['last_name'];
$sid=$_SESSION['staff_id'];
$user=$_SESSION['username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php $user?> Pharmacy Sys</title>
<link rel="stylesheet" type="text/css" href="style/2.css">
<link rel="stylesheet" href="style/1.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="style/3.css" type="text/css" media="screen" /> 
<script src="js/function1.js" type="text/javascript"></script>
   <style>
</style>
</head>
<body  style="background-image:url(images/m.jpg);" >
<div id="content" style="background-image:url(images/c.jpg);" >
<div id="header" >
<h1> Pharmacy System</h1></div>
<div id="left_column" >
<div id="button" >
		<ul>
			<li><a href="manager.php">Dashboard</a></li>
			<li><a href="view.php">View Users</a></li>
			<li><a href="view_prescription.php">View Prescriptions</a></li>
			<li><a href="stock.php">Manage Stock</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>	
</div>
</div>
<div id="main" style="background-image:url(images/c.jpg);" >
<div id="tabbed_box" class="tabbed_box">  
    <h4>View Prescription</h4> 
	
    <div class="tabbed_area">  
      
        <ul class="tabs">  
             
                          
        </ul>  
          
        <div id="content_1" class="content">  
		<?php 
		/* 
		View
        Displays all data from 'Pharmacist' table
		*/
        // connect to the database
        include_once('connect_db.php');
       // get results from database
       $result = mysqli_query($con,"CALL `get_prescriptions`(); ")or die(mysql_error());
		// display data in table
        echo "<table border='1' cellpadding='5'>";
        echo "<tr> <th>Customer</th><th>Prescription N<sup>o</sup></th> <th>Invoice N<sup>o</sup></th><th>Date </th></tr>";
        // loop through results of database query, displaying them in the table
        while($row = mysqli_fetch_array( $result )) {
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['customer_name'] . '</td>';
                echo '<td>' . $row['prescription_id'] . '</td>';
				echo '<td>' . $row['invoice_id'] . '</td>';
				
				echo '<td>' . $row['date'] . '</td>';
				?>
				
				<?php
		 } 
        // close table>
        echo "</table>";
?> 
        </div>  

    </div>  
</div>
</div>

</div>
</body>
</html>