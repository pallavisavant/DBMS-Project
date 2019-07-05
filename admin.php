<?php
session_start();
include_once('connect_db.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['admin_id'];
$user=$_SESSION['username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $user;?> - Pharmacy System</title>
<link rel="stylesheet" type="text/css" href="style/2.css">
<link rel="stylesheet" href="style/1.css" type="text/css" media="screen" /> 
<link rel="stylesheet" type="text/css" href="style/dashboard_styles.css"  media="screen" />
<link rel="stylesheet" href="style/3.css" type="text/css" media="screen" /> 
<script src="js/function.js" type="text/javascript"></script>
<style>
body{
    background-image:url('/pharmacy/images/1.jpg');
}




</style>
</head>
<body style="background-image:url(images/m.jpg);">
<div id="content" style="background-image:url(images/c.jpg);">
<div id="header"  style="background-color: black;">
<h1> PHARMACY MANAGEMENT SYSTEM</h1></div>
<div id="left_column"  style="background-color: black;">
<div   id="button">
<ul>
			<li><a href="admin.php"><p style="color:white;" ><b>Dashboard</b></p></a></li><br/>
			<li><a href="admin_pharmacist.php"><p style="color: white;"><b>Pharmacist</b></p></a></li></br>
			<li><a href="admin_manager.php"><p style="color: white;"><b>Manager</b></p></a></li></br>
			<li><a href="admin_cashier.php"><p style="color: white;"><b>Cashier</b></p></a></li></br>
            <li><a href="staff_report.php"><p style="color: white;"><b>Sales report</b></p></a></li></br>
            
			<li><a href="logout.php"><p style="color: white"><b>Logout</b></p></a></li>
		</ul>	
</div>
		</div>
<div id="main" style="background-image:url(images/c.jpg);">
    
 <!-- Dashboard icons -->
            <div class="grid_7">
            	<a href="admin.php" class="dashboard-module">
                	<img src="images/admin_icon.jpg" width="75" height="75" alt="edit" />
                	<span style="color:white;">Dashboard</span>
                </a>
                <a href="admin_pharmacist.php" class="dashboard-module">
                	<img src="images/14.jpg"  width="75" height="75" alt="edit" />
                	<span style="color:white;">Pharmacist</span>
                </a>
                
                <a href="admin_manager.php" class="dashboard-module">
                	<img src="images/13.jpg"  width="75" height="75" alt="edit" />
                	<span style="color:white;">Manager</span>
                </a>
                  
                <a href="admin_cashier.php" class="dashboard-module">
                	<img src="images/15.jpg" width="75" height="75" alt="edit" />
                	<span style="color:white;">Cashier</span>
                </a>

                <a href="staff_report.php" class="dashboard-module">
                    <img src="images/16.jpg" width="75" height="75" alt="edit" />
                    <span style="color:white;">Sales reports</span>
                </a>				  
			</div>
</div>

</div>
</body>
</html>

}

