<?php
session_start();
include_once('connect_db.php');
if(isset($_POST['submit'])){
$invoice_no=$_POST['invoiceno'];
$amount=$_POST['amount'];
$id=$_POST['id'];

$sql=mysqli_query($con,"INSERT INTO payment(invoice_no,amount,id)
VALUES('$invoice_no','$amount','$id')");
if($sql>0) {header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/payment.php");
}else{
$message1="<font color=red> Failed, Try again</font>";
}}	
?>

<html>
<head>
<title><?php echo $user;?> -  Pharmacy Sys</title>
<link rel="stylesheet" type="text/css" href="style/2.css">
<link rel="stylesheet" href="style/.css"1 type="text/css" media="screen" /> 
<link rel="stylesheet" href="style/3.css" type="text/css" media="screen" /> 
<script src="js/function.js" type="text/javascript"></script>
<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
	
   <style>
</style>
</head>
<body  style="background-image:url(images/m.jpg);" >
<div id="content" style="background-image:url(images/c.jpg);">
<div id="header" >
<h1>Pharmacy System</h1></div>
<div id="left_column" >
<div id="button" >
		<ul>
			<li><a href="cashier.php">Dashboard</a></li>
			<li><a href="payment.php"target="_top">Process payment</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>	
</div>
</div>
<div id="main" style="background-image:url(images/c.jpg);">
<div id="tabbed_box" class="tabbed_box">  
    <h4> Manage Payments</h4> 

    <div class="tabbed_area">  
      
        <ul class="tabs">  
         
              
        </ul>  
          
       
 	

									
		
		
        <div id="content_1" class="content"> 
		<div id="viewer1"><span id="viewer2"></span></div>
		  <form  method="post" >
			<table width="220" height="106" border="0" >	
				<tr><td ><input name="invoiceno" type="text" style="width:170px" placeholder="Invoice No"   /></td></tr>
				<tr><td ><input name="amount" type="text" style="width:170px" placeholder="Amount" required="required" /></td></tr> 
				
				<tr><td ><input name="id" type="text" style="width:170px" placeholder="Id"  /></td></tr>  
				<tr><td><input name="submit"  type="submit" value="Submit" /></td></tr>
            </table>
		</form>         
        </div>  
    </div>  
</div>
</div>

</div>
</body>
</html>
