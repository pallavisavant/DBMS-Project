




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
	background-color:black;
     background-image:url("/pharmacy/images/o.jpg");

	
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
	 
      <h1>Register here</h1>
	  
      <form method="post" action="registration.php">
		 <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <input type="submit" name="submit" value="admin">
        <input type="submit" name="submit1" value="pharmacist">
        <input type="submit" name="submit2" value="manager">
        <input type="submit" name="submit3" value="cashier">
        <input type="submit" name="submit4" value="salesman">
        <input type="submit" name="submit5" value="login">



		
        

      </form>
    </div>
    </section>

</body>
</html>

<?php
include_once('connect_db.php');
if (isset($_POST['submit'])){
        $username = $_POST['username'];
	
        $password = $_POST['password'];
 
        $query = "INSERT INTO admin (username, password) VALUES ('$username', '$password' )";
        $result = mysqli_query($con, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }}
?>

<?php
include_once('connect_db.php');
if (isset($_POST['submit1'])){
        $username = $_POST['username'];
	
        $password = $_POST['password'];
 
        $query = "INSERT INTO pharmacist(username, password) VALUES ('$username', '$password' )";
        $result = mysqli_query($con, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }}
?>
<?php
include_once('connect_db.php');
if (isset($_POST['submit2'])){
        $username = $_POST['username'];
	
        $password = $_POST['password'];
 
        $query = "INSERT INTO manager(username, password) VALUES ('$username', '$password' )";
        $result = mysqli_query($con, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }}
?>

<?php
include_once('connect_db.php');
if (isset($_POST['submit3'])){
        $username = $_POST['username'];
	
        $password = $_POST['password'];
 
        $query = "INSERT INTO cashier (username, password) VALUES ('$username', '$password' )";
        $result = mysqli_query($con, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }}
?>


<?php
include_once('connect_db.php');
if (isset($_POST['submit4'])){
        $username = $_POST['username'];
    
        $password = $_POST['password'];
 
        $query = "INSERT INTO salesman (username, password) VALUES ('$username', '$password' )";
        $result = mysqli_query($con, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }}
?>









<?php
if(isset($_POST['submit5'])){
    header("location:index.php");
}
else{

}
?>















