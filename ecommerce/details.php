<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    <nav class="navbar navbar-light bg-dark">
    <div class="container-fluid text-white">
        <a class="navbar-brand text-white "><h1>Dashboard</h1></a>
        <span>
            <i class="fas fa-user-shield"></i>
            Hello,Admin ||
            <i class="fas fa-sign-out-alt"></i>
            <a href="logout.php" class="text-decoration-none text-white">Logout</a>
        </span>
    </div>
    </nav> 

    <center>
        <h2>Products</h2>
    </center>


    <div class="container"> 
        <form action="" method="POST">
            <table class="table mt-5">
                <thead>
                    <tr>
                    <th scope="col">Product ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">DELETE</th>
                    </tr>
                </thead>
            

    <?php
        include "con.php";
        error_reporting(0);

        $sql="Select * from mens_wear"; 
        $query=mysqli_query($con,$sql);
        // echo $query;
        while ($rows=mysqli_fetch_array($query))
        {
            ?>
            <tr>
                <td> <?php echo $rows['pid'] ?> </td>
                <td> <?php echo $rows['pname'] ?> </td>
                <td> <?php echo $rows['price'] ?> </td>
                <td> <img width=50px height=50px src="<?php echo $rows['img_url'];?>"> </td>
                <td> <?php echo $rows['descri'] ?> </td>
                <td><a href=edit.php class="text-decoration-none">EDIT</a></td>
                <td><a href=delete.php class="text-decoration-none">DELETE</a></td>
                <br>
            </tr>

            <?php
        }
        mysqli_close($con);
    ?> 
        </table>
    </form>
    </div>

</body>
</html>