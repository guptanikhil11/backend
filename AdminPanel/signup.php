<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>signup</title>
</head>

<body>
	<div class="form">
		<form method="post">
	
			NAME:<input type="text" name="name" placeholder="Enter your name"><br>
            USERNAME:<input type="text" name="username" placeholder="Enter your username"><br>
            CONTACT NO.:<input type="text" name="mobile" placeholder="Enter your contact no."><br>
			EMAIL-ID:<input type="email" name="email" placeholder="Enter your email"><br>
			PASSWORD:<input type="password" name="password" placeholder="Enter your password"><br>
            CONFIRM PASSWORD:<input type="password" name="password" placeholder="confirm your password"><br>
			<input type="submit" name="submit" value="submit">
		</form>
	</div>
</body>
</html>

<?php
	include "con.php";
	error_reporting(0);

    if(isset($_POST['submit']))
    {
		
        $sname = $_POST['name'];
        $susername = $_POST['username'];
        $smobile = $_POST['mobile'];
		$semail = $_POST['email'];
        $pass = $_POST['password'];
        
        $query="insert into student (sname,susername,smobile,semail,pass) values('$sname','$susername',$smobile,'$semail','$pass')";
        //echo $query;
        $sql = mysqli_query($con, $query) or die("query failed");

        if($sql)
        {
            //echo "data inserted!!";
            header('Location:login.php');
        }
        else
        {
			echo "Data insertion failed";
		}
    }
    
	mysqli_close($con);
?>