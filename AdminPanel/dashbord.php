<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="navbar">
        
            <a class="nav-link" href="signup.php">Insert</a>

            <a class="nav-link" href="logout.php">Logout</a>
            
        </div>
    </div>    
</body>
</html>

<?php
    session_start();
    include "con.php";

    if($_SESSION['email']=='')
    {
        header('Location:login.php');
    }
    else
    {
        $semail= $_SESSION['email'];

        $query1=mysqli_query($con,"Select sname from student where semail='$semail'") or die("Error in Query");

        $row1=mysqli_fetch_array($query1);
        
        echo "hello ".$row1['sname'];


        $query=mysqli_query($con,"Select * from student") or die("Error in Query");

        echo "<table border=3><tr><td>id</td><td>sname</td><td>susername</td><td>smobile</td><td>semail</td><td>pass</td><td>Edit</td><td>Delete</td></tr>";
        while($row=mysqli_fetch_array($query))
        {
            $sid=$row['sid'];
            echo "<tr>";
            echo "<td>".$sid."</td>";
            echo "<td>".$row['sname']."</td>";
            echo "<td>".$row['susername']."</td>";
            echo "<td>".$row['smobile']."</td>";
            echo "<td>".$row['semail']."</td>";
            echo "<td>".$row['pass']."</td>";
            echo "<td><a href=update.php?id=$sid>Edit</a></td>";
            echo "<td><a href=delete.php?id=$sid>Delete</a></td>";
            echo "</tr>";
        } 
        echo "</table>";
    }

    mysqli_close($con);
?>