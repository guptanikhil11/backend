<?php
session_start();
include "con.php";


if($_SESSION['email']=='')
{
header('Location:login.php');
}
else
{
    $id= $_GET['id'];
    $email=$_SESSION['email'];
    $query1=mysqli_query($con,"Select * from student where semail='$email'") or die("Error in Query");
    $row1=mysqli_fetch_array($query1);
    echo "hello ".$row1['sname'];

    $query2=mysqli_query($con,"Select * from student where sid='$id'") or die("Error in Query");
    $row2=mysqli_fetch_array($query2);

    $sname=$row2['sname'];
    $sadd=$row2['susername'];
    $smob=$row2['smobile'];
    $semail=$row2['semail'];
    $spass=$row2['pass'];

}
?>

<html>
<body>
    <form method="post">
        name<input type="text" name="name" value="<?php echo $sname ?>">  <br />
        address<input type="text" name="address" value="<?php echo $sadd ?>">  <br />
        mobile<input type="text" name="mobile" value="<?php echo $smob ?>">  <br />
        email<input type="text" name="email" value="<?php echo $semail ?>">  <br />
        password<input type="text" name="pass" value="<?php echo $spass ?>">  <br />
        <input type="submit" value="Update" name="Update"/>
    </form>
</body>
</html>

<?php
    if(isset($_POST['Update']))
    {
        $snam=$_POST['name'];
        $saddd=$_POST['address'];
        $smobi=$_POST['mobile'];
        $smail=$_POST['email'];
        $sspass=$_POST['pass'];

        include "con.php";

        $sql="update student set sname='$snam', susername='$saddd', smobile='$smobi', semail='$smail', pass='$sspass' where sid =$id";
        // echo $sql;
        $query=mysqli_query($con,$sql) or die("Error in Query");


        if($query)
        {
            echo "Data Updated";
            header('Location:dashbord.php');

        }
        else
        {
            echo "Error in updating";
        }

    mysqli_close($con);
    }
?>