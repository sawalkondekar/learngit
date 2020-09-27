<?php
include ('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<style>
		body {text-align: center;
			background-color: lightblue;}
		input{margin-top: 10px;}
	</style>
</head>
<body>

	<h3> Form</h3>
	<form action="add.php?action=registration" method="post">
	

	<input type="text" name="name" id="name" placeholder="Name" required="Please Enter Name">
	<br>

	<input type="email" name="email" id="email" placeholder="Email" required="Please Enter Email">
	<br>
	Comment:<br> <textarea name="comment" rows="5" cols="40" placeholder="Comment"></textarea><br><br>
	

	<input type="submit" name="Submit">
	<?php if (isset($comment)) {
		echo "$comment";
	} ; ?>
	</form>
</body>
</html>

