<?php
    error_reporting(0);
    session_start();

    if($_SESSION['email']=='')
    {
        header('Location:login.php');
    }
    else
    {
        $did = $_GET['id'];
        include "con.php";
        echo $did;

        $sql = "delete from student where sid='$did'";
        $query = mysqli_query($con,$sql) or die("query fail");

        if($query)
        {
			echo "data seletion done";
            header('Location:dashbord.php');
        }
        else
        {
			echo "deletion failed";
		}
    }
?>