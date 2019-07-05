<?php
include_once 'connect_db.php';
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$position=$_POST['position'];
switch($position){
case 'Admin':
$result=mysqli_query($con,"SELECT admin_id, username  FROM admin WHERE username='$username' AND password='$password'");
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['admin_id']=$row[0];
$_SESSION['username']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/admin.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
case 'Pharmacist':
$result=mysqli_query($con,"SELECT pharmacist_id, first_name,last_name,staff_id,username FROM pharmacist WHERE username='$username' AND password='$password'");
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['pharmacist_id']=$row[0];
$_SESSION['first_name']=$row[1];
$_SESSION['last_name']=$row[2];
$_SESSION['staff_id']=$row[3];
$_SESSION['username']=$row[4];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/pharmacist.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
case 'Cashier':
$result=mysqli_query($con,"SELECT cashier_id, first_name,last_name,staff_id,username FROM cashier WHERE username='$username' AND password='$password'");
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['cashier_id']=$row[0];
$_SESSION['first_name']=$row[1];
$_SESSION['last_name']=$row[2];
$_SESSION['staff_id']=$row[3];
$_SESSION['username']=$row[4];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/cashier.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
case 'Manager':
$result=mysqli_query($con,"SELECT manager_id, first_name,last_name,staff_id,username FROM manager WHERE username='$username' AND password='$password'");
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['manager_id']=$row[0];
$_SESSION['first_name']=$row[1];
$_SESSION['last_name']=$row[2];
$_SESSION['staff_id']=$row[3];
$_SESSION['username']=$row[4];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/manager.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;



case 'Salesman':
$result=mysqli_query($con,"SELECT salesman_id, username FROM salesman WHERE username='$username' AND password='$password'");
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['salesman_id']=$row[0];

$_SESSION['username']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/staff_report.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
}}
echo <<<LOGIN
<!DOCTYPE html>
<html>
<head>
<title>Pharmacy Sys</title>
<link rel="stylesheet" type="text/css" href="style/mystyle_login.css">
<style>
.login{
	background-image:url("/pharmacy/images/o.jpg");
}
.container{
	background-color:black;
	 background-image:url("/pharmacy/images/o.jpg");

}
	
}
#header{

	color:red;
}
#content {
height: 100%;
background-color:black;
 background-image:url("/pharmacy/images/o.jpg");



}
}
.main{
background-color:white;
height: 100%;}
body {
  background-color:black;
  background-image:url("/pharmacy/images/o.jpg");

}
</style>
</head>
<body>
<div id="content">
<h1 style="color:white;font-size:200%;"> PHARMACY   MANAGEMENT   SYSTEM </h1>


<div class="main">

  <section class="container">
  
     <div class="login">
	 
      <h1>Login here</h1>
	  
      <form method="post" action="index.php">
		 <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
		<p><select name="position">
		<option>--Select position--</option>
			<option>Admin</option>
			<option>Pharmacist</option>
			<option>Cashier</option>
			<option>Manager</option>
			<option>Salesman</option>
			</select></p>
        <input type="submit" name="submit" value="Login">
        <input type="submit" name="register" value="Sign Up">
      </form>
    
    </section>

</body>
</html>
LOGIN;
?>



<?php
if(isset($_POST['register'])){
	header("location:registration.php");
}
else{

}
?>
