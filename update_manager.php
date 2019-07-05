<?php
include_once('connect_db.php');
if(isset($_GET['username'])){
	$username=$_GET['username'];
	$get_pharmacist="select * from manager where username='$username'";
	$run_pharmacist=mysqli_query($con,$get_pharmacist);
	$row_pharmacist=mysqli_fetch_array($run_pharmacist);
	$username=$row_pharmacist['username'];
	$fname=$row_pharmacist['first_name'];
	$lname=$row_pharmacist['last_name'];
	$staff_id=$row_pharmacist['staff_id'];
	$postal_address=$row_pharmacist['postal_address'];
	$phone=$row_pharmacist['phone'];
	$email=$row_pharmacist['email'];
	$username=$row_pharmacist['username'];
	$password=$row_pharmacist['password'];

}
?>
<html>
<head>
<title><?php $username?> Pharmacy Sys</title>
<link rel="stylesheet" type="text/css" href="style/2.css">
<link rel="stylesheet" href="style/1.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="style/3.css" type="text/css" media="screen" /> 
<script src="js/function.js" type="text/javascript"></script>
 <style>#left-column {height: 477px;}
 #main {height: 477px;}</style>
</head>
<body style="background-image:url(images/m.jpg);">
<div id="content" style="background-image:url(images/c.jpg);">
<div id="header">
<h1> Pharmacy System</h1></div>
<div id="left_column">
<div id="button">
<ul>
			<li><a href="admin.php">Dashboard</a></li>
			<li><a href="admin_pharmacist.php">Pharmacist</a></li>
			<li><a href="admin_manager.php">Manager</a></li>
			<li><a href="admin_cashier.php">Cashier</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>	
</div>


		</div>
		<form method="post">
<input type="text" name="name" placeholder="name" value="<?php echo $fname ?>"/>
</br>

				<input name="last_name" type="text" style="width:170px" placeholder="Last Name" id="last_name" value="<?php  echo $lname?>" />
				</br><input name="staff_id" type="text" style="width:170px" placeholder="Staff ID" id="staff_id" value="<?php  echo $staff_id?>" /> 
				</br><input name="postal_address" type="text" style="width:170px" placeholder="Address" id="postal_address" value="<?php  echo $postal_address?>" />  
				</br><input name="phone" type="text" style="width:170px" placeholder="Phone" id="phone" value="<?php  echo $phone?>" />  
				</br><input name="email" type="email" style="width:170px" placeholder="Email" id="email"value="<?php  echo $email?>" />  
				</br><input name="username" type="text" style="width:170px" placeholder="Username" id="username"value="<?php  echo $username ?>" />
				</br><input name="password" placeholder="Password" id="password"value="<?php  echo $password?>"type="password" style="width:170px"/>
				</br><input name="submit" type="submit" value="Update"/>

</form>
		</div>
	</body>
	</html>


<?php
 

if(isset($_POST['submit']))
{

	$update_pharmacist=$username;
	$new_pharmacist=$_POST['name'];
	$new_lname=$_POST['last_name'];
	$new_staff=$_POST['staff_id'];
	$new_postal=$_POST['postal_address'];
	$new_phone=$_POST['phone'];
	$new_email=$_POST['email'];
	$new_username=$_POST['username'];
	$new_password=$_POST['password'];
	$update_pharmacist1="update manager set first_name='$new_pharmacist' ,last_name='$new_lname' , staff_id='$new_staff',postal_address='$new_postal' , phone='$new_phone' , email='$new_email', username='$new_username', password='$new_password' where username='$update_pharmacist'";
$run_pharmacist=mysqli_query($con,$update_pharmacist1);

	
if( $run_pharmacist)
	{
		header('location:admin_manager.php');
	
}}

?>