
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

	<!-- <form>
		<div class="mb-3">
			<label for="exampleInputEmail1" class="form-label">Email address</label>
			<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			<div id="emailHelp" name="password" class="form-text">We'll never share your email with anyone else.</div>
		</div>
		<div class="mb-3">
			<label for="exampleInputPassword1" class="form-label">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1">
		</div>
		<div class="mb-3 form-check">
			<input type="checkbox" class="form-check-input" id="exampleCheck1">
			<label class="form-check-label" for="exampleCheck1">Check me out</label>
		</div>
			<input type="submit" name="login" value="login" onClick="document.location.href='ind.php'">
			<input type="button" value="sign up" onClick="document.location.href='signup.php'">
		</form> -->

	<div class="form">
		<form method="post">
			EMAIL:<input type="email" name="email" placeholder="enter Email"><br>
			PASSWORD:<input type="password" name="password" placeholder="enter password"><br>
			<input type="submit" name="login" value="login">
			<input type="button" value="sign up" onClick="document.location.href='signup.php'">
		</form>
	</div>
</body>
</html>

<?php
	session_start();
	
	include "con.php";
	error_reporting(0);

	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$password= $_POST['password'];

		$sql="Select * from sallerinfo where email='$email' and password='$password'";
		$query=mysqli_query($con,$sql);
		$rows=mysqli_num_rows($query);

		if($rows>0)
		{
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