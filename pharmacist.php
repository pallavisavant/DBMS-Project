<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['pharmacist_id'];
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
<title><?php echo $user;?> - Pharmacy Sys</title>
<link rel="stylesheet" type="text/css" href="style/2.css">
<link rel="stylesheet" type="text/css" href="style/3.css">
<link rel="stylesheet" href="style/1.css" type="text/css" media="screen" /> 
<link rel="stylesheet" type="text/css" href="style/dashboard_styles.css"  media="screen" />
<script src="js/function.js" type="text/javascript"></script>
<style>#left-column {height: 477px;}
 #main {height: 477px;}
</style>
</head>
<body style="background-image:url(images/m.jpg);" >
<div id="content"style="background-image:url(images/c.jpg);" >
<div id="header" >
<h1> Pharmacy System</h1></div>
<div id="left_column" >
<div id="button" >
<ul>
			<li><a href="pharmacist.php">Dashboard</a></li>
			<li><a href="prescription.php">Prescription</a></li>
			<li><a href="stock_pharmacist.php">Stock</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>	
</div>
</div>
<div id="main" style="background-image:url(images/c.jpg);">
<!-- Dashboard icons -->
            <div class="grid_7">
            	<a href="pharmacist.php" class="dashboard-module">
                	<img src="images/pharmacist_icon.jpg" width="100" height="100" alt="edit" />
                	<span>Dashboard</span>
                </a>
                             
                <a href="prescription.php" class="dashboard-module">
                	<img src="images/prescri.jpg"  width="100" height="100" alt="edit" />
                	<span>Prescription</span>
                </a>
	            <a href="stock_pharmacist.php" class="dashboard-module">
                	<img src="images/stock_icon.jpg" width="100" height="100" alt="edit" />
                	<span>Stock</span>
                </a>
              </div>
</div>

</div>
</body>
</html>
