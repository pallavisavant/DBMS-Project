<?php
session_start();
include_once('connect_db.php');

$id=$_GET[cart_id];
$sql="delete from cart where cart_id='$id'";
mysqli_query($con,$sql);
//$rows=mysql_fetch_assoc($result);
header("location:cart.php");
?>


