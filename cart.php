
<?php
include_once('connect_db.php');

	$get_report="select * from stock  ";
	$run_report=mysqli_query($con,$get_report);
	$row_report=mysqli_fetch_array($run_report);
	$drug_name=$row_report['drug_name'];
	$quantity=$row_report['quantity'];
	$cost=$row_report['cost'];
	$total=$quantity*$cost;
	

?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $username;?> -  Pharmacy Sys</title>
<link rel="stylesheet" type="text/css" href="style/2.css">
<link rel="stylesheet" href="style/1.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="style/3.css" type="text/css" media="screen" /> 
<script src="js/function.js" type="text/javascript"></script>
<script>
function validateForm()
{

//for alphabet characters only
var str=document.form1.first_name.value;
	var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//comparing user input with the characters one by one
	for(i=0;i<str.length;i++)
	{
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("First Name Cannot Contain Numerical Values");
	document.form1.first_name.value="";
	document.form1.first_name.focus();
	return false;
	}}
	
if(document.form1.first_name.value=="")
{
alert("Name Field is Empty");
return false;
}

//for alphabet characters only
var str=document.form1.last_name.value;
	var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//comparing user input with the characters one by one
	for(i=0;i<str.length;i++)
	{
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("Last Name Cannot Contain Numerical Values");
	document.form1.last_name.value="";
	document.form1.last_name.focus();
	return false;
	}}
	

if(document.form1.last_name.value=="")
{
alert("Name Field is Empty");
return false;
}

}

</script>



   <style>
</style>
</head>
<body style="background-image:url(images/m.jpg);">
<div id="content" style="background-image:url(images/c.jpg);">
<div id="header" >
<h1>Pharmacy System</h1></div>
<div id="left_column">
<div  id="button">
		<ul>
			<li><a href="cart.php"><p style="color:white;"><b>Dashboard</b></p></a></li>
			
			<li><a href="staff_report.php"><p style="color:white;"><b>Staff Report</b></p></a></li>
			<li><a href="logout.php"><p style="color:white;"><b>Logout</b></p></a></li>
		</ul>	
</div>
</div>
<div id="main" style="background-image:url(images/c.jpg);">
<div id="tabbed_box" class="tabbed_box">  
    
<hr/>	
    <div class="tabbed_area">  
      
        <ul class="tabs">  
            <li><a href="javascript:tabSwitch('tab_1', 'content_1');" id="tab_1" class="active">View </a></li>  
            <li><a href="javascript:tabSwitch('tab_2', 'content_2');" id="tab_2">Add </a></li>  
              
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

       $result = mysqli_query($con,"SELECT * FROM cart")or die(mysql_error());
		// display data in table
        echo "<table border='1' cellpadding='5'align='center'>";
        echo "<tr> <th>Drug name</th><th>quantity </th> <th>cost</th><th>total</th><th>Delete</th></tr>";

        // loop through results of database query, displaying them in the table
        while($row = mysqli_fetch_array( $result )) {
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['drug_name'] . '</td>';
                echo '<td>' . $row['quantity'] . '</td>';
				echo '<td>' . $row['cost'] . '</td>';
				echo '<td>' .$row['total'] .'</td>';

				?>
				
				<td><a href="delete_cart.php?cart_id=<?php echo $row['cart_id']?>"><img src="images/delete-icon.jpg" width="35" height="35" border="0" /></a></td>


				<?php
				}
			
				
        echo "</table>";
?> 
<form action="cart.php">
<input name="print" type="button" placeholder="print" value="PRINT"/>
</form> 
        </div>  
        <div id="content_2" class="content">  
		           <!--Pharmacist-->
				   
		<form method="post">
<input type="text" name="drug_name" placeholder="name" value="<?php echo $drug_name?>"/>
</br>

				<input name="quantity" type="number" style="width:170px" placeholder="Last Name" id="last_name" value="<?php  echo $quantity?>" />
				</br><input name="cost" type="text" style="width:170px" placeholder="Staff ID" id="staff_id" value="<?php  echo $cost?>" /> 
				</br><input name="total" type="text" style="width:170px" placeholder="Staff ID" id="staff_id" value="<?php  echo $total?>" /> 
				
				</br><input name="submit" type="submit" value="add"/>

</form>
        </div>  
        
    </div>

</div>
</body>
</html>
<?php
 

if(isset($_POST['submit'])){
$drug_name=$_POST['drug_name'];
$quantity=$_POST['quantity'];
$cost=$_POST['cost'];
$total=$quantity*$cost;



mysqli_query($con,"INSERT INTO cart(drug_name,quantity,cost,total)
VALUES('$drug_name','$quantity','$cost','$total')");
}
?>