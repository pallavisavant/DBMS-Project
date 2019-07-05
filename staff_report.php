
<!DOCTYPE html>
<html>
<head>
<title><?php echo $user;?> -Pharmacy Sys</title>
<link rel="stylesheet" type="text/css" href="style/2.css">
<link rel="stylesheet" href="style/1.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="style/3.css" type="text/css" media="screen" /> 
<script src="js/function.js" type="text/javascript"></script>
<script type="text/javascript" SRC="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" SRC="js/superfish/hoverIntent.js"></script>
    <script type="text/javascript" SRC="js/superfish/superfish.js"></script>
    <script type="text/javascript" SRC="js/superfish/supersubs.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){ 
            $("ul.sf-menu").supersubs({ 
                minWidth:    12, 
                maxWidth:    27, 
                extraWidth:  1    
                                  
            }).superfish();
                            
        }); 
    </script>
    
    <script SRC="js/cufon-yui.js" type="text/javascript"></script>
    <script SRC="js/Liberation_Sans_font.js" type="text/javascript"></script>
    <script SRC="js/jquery.pngFix.pack.js"></script>
    <script type="text/javascript">
        Cufon.replace('h1,h2,h3,h4,h5,h6');
        Cufon.replace('.logo', { color: '-linear-gradient(0.5=#FFF, 0.7=#DDD)' }); 
    </script>
   <style>
 
</style>
</head>
<body style="background-image:url(images/m.jpg);">
<div id="content" style="background-image:url(images/c.jpg);" >
<div id="header">
<h1>Pharmacy System</h1></div>
<div id="left_column" >
<div  id="button">
        <ul>
            
            <li><a href="admin.php"><p style="color:white;"><b>Dashboard</b></p></a></li>
            <li><a href="staff_report.php"><p style="color:white;"><b>Sales report</b></p></a></li>
            <li><a href="logout.php"><p style="color:white;"><b>Logout</b></p></a></li>
        </ul>   
</div>
</div>
<div id="main" style="background-image:url(images/c.jpg);" >
<div id="tabbed_box" class="tabbed_box">  
    <h4>Staff Report</h4> 
  
    <div class="tabbed_area">  
      
         
          
        <div id="content_1" class="content">  
        <?php 
        /* 
        View
        Displays all data from 'Pharmacist' table
        */
        // connect to the database
        include_once('connect_db.php');
       // get results from database
       $result = mysqli_query($con,"SELECT * FROM stock")or die(mysql_error());
        // display data in table
        echo "<table border='1' cellpadding='5'align='center'>";
        echo "<tr> <th>Drug Name</th><th>category</th> <th>Description</th><th>Company</th><th>supplier</th><th>Quantity</th><th>Cost</th><th>Status</th><th>add</th></tr>";
        // loop through results of database query, displaying them in the table
        while($row = mysqli_fetch_array( $result )) {
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['drug_name'] . '</td>';
                echo '<td>' . $row['category'] . '</td>';
                echo '<td>' . $row['description'] . '</td>';
                
                echo '<td>' . $row['company'] . '</td>';
                echo '<td>' . $row['supplier'] . '</td>';
                echo '<td>' . $row['quantity'] . '</td>';
                echo '<td>' . $row['cost'] . '</td>';
                echo '<td>' . $row['status'] . '</td>';


                ?>

                
                <td><a href="cart.php">


                <img src="images/p.jpg" width="35" height="35" border="0" /></a></td>
                <?php
         } 
        // close table>

        echo "</table>";
?> 
        </div>  
