<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Upload example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid text-white">
            <a class="navbar-brand text-white"><h1>Dashboard</h1></a>
            <span>
                <i class="fas fa-user-shield"></i>
                Hello,Admin |
                <i class="fas fa-sign-out-alt"></i>
                
                <a href="logout.php" class="text-decoration-none text-white">Logout</a>
            </span>
        </div>
    </nav> 
    <center>
        <h2>KIDS WEAR</h2>
    </center>

    <form enctype="multipart/form-data" method="post">
    <div class="mb-3 mt-5">
            <!-- <label>Product Name</label> -->
            PRODUCT NAME:<input type="text" name="pname" class="form-control" id="exampleInputEmail1">   
        </div>

        <div class="mb-3 mt-3">
            <!-- <label>Product Price</label> -->
            PRICE:<input type="text" name="price" class="form-control" id="exampleInputPassword1">
        </div>

        <div class="mb-3 mt-3">
            <!-- <label>Product Price</label> -->
            DESCRIPTION:<input type="text" name="descri" class="form-control" id="exampleInputPassword1">
        </div>
        Select image :<input type="file" name="file"><br/>
        <input type="submit" value="Add Item" name="add"> <br/>
    </form>
</body>
</html>

<?php   

    include "con.php";
    error_reporting(0);

    if(isset($_POST['add']))
    { 
        $pname=$_POST['pname'];
        $price=$_POST['price'];
        $descri=$_POST['descri'];
        $filepath = "images/" . $_FILES["file"]["name"];

        
        $sql = "INSERT INTO kids_wear (img_url,pname,price,descri) VALUES('$filepath','$pname',$price,'$descri')";
        echo $sql;
        move_uploaded_file($_FILES["file"]["tmp_name"], $filepath);
        $query =mysqli_query($con, $sql) or die("error in query");
        
        if($query) 
        {
            echo "Data Inserted";
        } 
        else 
        {
            echo "Error !!";
        }
    } 
    mysqli_close($con);
?>