<?php
include("connection.php");
$query = "SELECT * FROM registration WHERE 1=1";
//echo $query;
$data = mysqli_query($conn, $query);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Table View</title>
	<style>
    body {
    	text-align: center;
			background-color: lightblue;}
		input{margin-top: 10px;}

		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		table.center {
		  margin-left:auto; 
		  margin-right:auto;
		}
	</style>
</head>
<body>
<div id="wrapper"></div>	
	<h3>All Users Data</h3>
	   
 <table class="center">
 <tr>
 	
 	<th>FirstName</th>
 	<th>LastName</th>
 	<th>Email</th>
 	<th>Date Of Birth</th>
 	
 	

 </tr>
<tbody>
<?php $i=0; while($row = mysqli_fetch_assoc($data)) { ?>
	<tr>
	
	<td><?php echo $row['t_name']; ?></td>	
	<td><?php echo $row['t_lname'];?></td>
	<td><?php echo $row['t_email'];?></td>
	<td><?php echo $row['t_dob']; ?></td>	
	

</tr>
<?php $i++; }	
   ?>                                                    
                                           
</tbody></table></body></html>




