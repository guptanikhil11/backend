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
        <h2>Catagories</h2>
    </center>
    <table class="table mt-5">
        <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">Catagory</th>
            <th scope="col">Images</th>
            <th scope="col">Add Items</th>
            <th scope="col">Details</th>
            </tr>
        </thead>

        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mens</td>
            <td><img src="men1.jpeg" alt="men with value" width="50" height="50"></td>
            <td><a href=insertion_mens.php class="text-decoration-none">Add Items</a></td>
            <td><a href=details.php class="text-decoration-none">Details</a></td>
            </tr>

            <tr>
            <th scope="row">2</th>
            <td>Womens</td>
            <td><img src="women.jpeg" alt="men with value" width="50" height="50"> </td>
            <td><a href=insertion_womens.php class="text-decoration-none">Add Items</a></td>
            <td><a href=details.php class="text-decoration-none">Details</a></td>
            </tr>

            <tr>
            <th scope="row">3</th>
            <td>Kids</td>
            <td><img src="kids.jpeg" alt="men with value" width="50" height="50"> </td>
            <td><a href=insertion_kids.php class="text-decoration-none">Add Items</a></td>
            <td><a href=details.php class="text-decoration-none">Details</a></td>
            </tr>

            <tr>
            <th scope="row">4</th>
            <td>Gadgets</td>
            <td><img src="eg.jpeg" alt="men with value" width="50" height="50"> </td>
            <td><a href=insertion_gadgets.php class="text-decoration-none">Add Items</a></td>
            <td><a href=details.php class="text-decoration-none">Details</a></td>
            </tr>

            <tr>
            <th scope="row">5</th>
            <td>Toys</td>
            <td><img src="toy.jpeg" alt="men with value" width="50" height="50"> </td>
            <td><a href="#" class="text-decoration-none">Add Items</a></td>
            <td><a href="#" class="text-decoration-none">Details</a></td>
            </tr>

            <tr>
            <th scope="row">6</th>
            <td>Luggages</td>
            <td><img src="lug.jpeg" alt="men with value" width="50" height="50"> </td>
            <td><a href="#" class="text-decoration-none">Add Items</a></td>
            <td><a href="#" class="text-decoration-none">Details</a></td>
            </tr>

            <tr>
            <th scope="row">7</th>
            <td>Mobiles</td>
            <td><img src="mob.jpeg" alt="men with value" width="50" height="50"> </td>
            <td><a href="#" class="text-decoration-none">Add Items</a></td>
            <td><a href="#" class="text-decoration-none">Details</a></td>
            </tr>
        </tbody>
</table>
    
</body>
</html>

<?php
    session_start();
    $_SESSION['mens_wear']==1;
    $_SESSION['womens_wear']==1;
    $_SESSION['kids_wear']==1;
    $_SESSION['electronics_gadgets']==1;
?>