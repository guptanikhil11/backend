<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<div class="form">
		<form method="post">
			<input type="email" name="email" placeholder="enter Email"><br>
			<input type="password" name="password" placeholder="enter password"><br>
			<input type="submit" name="login" value="login">
			<a href="signup.php">SignUp</a>
		</form>
	</div>
</body>
</html>

<?php

	include "con.php";
	error_reporting(0);

	if(isset($_POST['login']))
	{
		$semail = $_POST['email'];
		$pass= $_POST['password'];

		$sql="Select * from student where semail='$semail' and pass='$pass'";
		$query=mysqli_query($con,$sql);
		$rows=mysqli_num_rows($query);

		if($rows>0)
		{
			session_start();
			$_SESSION['email']=$semail;
			header('Location:dashbord.php');
			echo "Login Success";
		}
		else
		{
			echo "Incorrect Username or password";
		}
	}
	
	mysqli_close($con);
?>