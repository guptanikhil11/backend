<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php curd operation with pdo extension</title>
</head>

    <body>
        <h3>Insert Record | PHP CRUD Operations using PDO Extension</h3>
        <form name="insertrecord" method="post">
            Id: <input type="text" name="id" required><br/>
            Name:<input type="text" name="name" required><br/>
            City:<input type="text" name="city" required><br/>
            DOB:<input type="text" name="dob" maxlength="10" required><br/>
            <input type="submit" name="insert" value="Submit"><br/>
        </form>
    </body>
</html>

<?php
    if(isset($_POST['insert']))
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $city=$_POST['city'];
        $dob=$_POST['dob'];

        try 
        {
            $pdo = new PDO("mysql:host=localhost;dbname=pdo", "root", "");
            $sql = "insert into student(id, name, city, dob) values(:id,:name,:city,:dob)";
            $query = $pdo -> prepare($sql);
            $query -> bindParam(':id', $id, PDO::PARAM_INT);
            $query -> bindParam(':name', $name, PDO::PARAM_STR);
            $query -> bindParam(':city', $city, PDO::PARAM_STR);
            $query -> bindParam(':dob', $dob, PDO::PARAM_STR);
            // $q = $pdo->query($sql);
            $query -> execute();
        //     $lastInsertId=$pdo->lastInsertId();
        //     if($lastInsertId!="")
        //     {
        //         echo "Data Inserted Successfully";
        //     }
        //     else
        //     {
        //         echo "Error in Inserting";
        //     }
        //     //$query->setFetchMode(PDO::FETCH_ASSOC);
        //     // while($row=$query->fetch())
        //     // {
        //         // echo $row['id']." ".$row["name"]." ".$row['address']." ".$row['mobile']." "."<br>";
                
        //     // }
        } 
        catch (PDOException $e) 
        {
            die("Could not connect to the database :" . $e->getMessage());
        }
    }
?>