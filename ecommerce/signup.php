<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="bg-dark">
<div class="form">
    <form method="post">
        <div class="col-md-6 text-white">
            <label for="inputEmail4" class="form-label">NAME</label>
            <input type="email" name="name" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6 text-white">
            <label for="inputPassword4" class="form-label">GST NO.</label>
            <input type="text" name="gstno" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12 text-white">
            <label class="form-label">CONTACT NO.</label>
            <input type="text" name="mobile" class="form-control" id="inputAddress">
        </div>
        <div class="col-12 text-white">
            <label for="inputAddress2" class="form-label">EMAIL ID.</label>
            <input type="text" name="email" class="form-control" id="inputAddress2">
        </div>
        <div class="col-md-6 text-white">
            <label for="inputCity" class="form-label">PASSWORD</label>
            <input type="password" name="password" class="form-control" id="inputCity">
        </div>
        <div class="col-md-6 text-white">
            <label for="inputCity" class="form-label">CONFIRM PASSWORD</label>
            <input type="password" name="password" class="form-control" id="inputCity">
        </div>

        <div class="col-12">
            <input type="submit" name="submit" value="submit">  
        </div>
    </form>
</form> 

	<!-- <div class="form">
		<form method="post">
	
			NAME:<input type="text" name="name" placeholder="Enter your name"><br>
            GST NO.:<input type="text" name="gstno" placeholder="Enter your gst no."><br>
            CONTACT NO.:<input type="text" name="mobile" placeholder="Enter your contact no."><br>
			EMAIL-ID:<input type="email" name="email" placeholder="Enter your email"><br>
			PASSWORD:<input type="password" name="password" placeholder="Enter your password"><br>
            CONFIRM PASSWORD:<input type="password" name="password" placeholder="confirm your password"><br>
			<input type="submit" name="submit" value="submit">
		</form>
	</div> -->
</body>
</html>

<?php
	include "con.php";
	error_reporting(0);

    if(isset($_POST['submit']))
    {
		
        $name = $_POST['name'];
        $gstno = $_POST['gstno'];
        $mobile = $_POST['mobile'];
		$email = $_POST['email'];
        $password = $_POST['password'];
        
        $query="insert into sallerinfo (name,gstno,mobile,email,password) values('$name','$gstno',$mobile,'$email','$password')";
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