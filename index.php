<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>

	<form method="post" action="#">
		<label>Username</label>
		<input name="Username" id="txtUsername">

		<label>Password</label>
		<input name="Password" id="txtPassword">

		<input type="submit" name="submit" text="Submit">
	</form>

</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$Username = $_POST["Username"];
		$Password = $_POST["Password"];		

		if($Username == "asdf" && $Password == "asdf"){
			echo "Login Successfully";
		}
		else{
			echo "Error";
		}
	}
	

		
?>