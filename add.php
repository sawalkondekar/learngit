<?php
include('connection.php');
error_reporting(0);

if ($_GET["action"]=="registration")
{
   $comment = '".$_POST["comment"]."';
   //echo "$comment";
 	$query="INSERT INTO registration
						(name,
						email,
						comment)
			VALUES ('".$_POST["name"]."',
					'".$_POST["email"]."',
					'".$_POST["comment"]."'
					)";

				
				
	if(mysqli_query($conn,$query)) 
		echo "<script type='text/javascript'>alert('You are successfully registered..');window.location.href='meetform.php';</script>";
	
	else echo "Data Not Insereted.";
}

?>