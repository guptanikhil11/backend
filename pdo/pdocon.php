<?php
// DB connection
$conn=new PDO("mysql:host=localhost;dbname=pdo", "root", "");

// Query

$sql=$conn->query("SELECT * FROM student");
// echo $sql;
// while($row=$sql->fetch())
// {
//     echo "<pre>";
//     print_r ($row);
//     echo "</pre>";
// }

// Associative array
// while($row=$sql->fetch(PDO::FETCH_ASSOC))
// {
//     echo "<pre>";
//     print_r($row);      //it will return array thats why we use print_r
//     echo "</pre>";   
//     echo "{$row['id']} - {$row['name']} - {$row['city']} - {$row['dob']} <br>";
// }

// num array
// while($row=$sql->fetch(PDO::FETCH_NUM))
// {
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";
//     echo "{$row[0]} - {$row[1]} - {$row[2]} - {$row[3]} <br>";
// }


// obj array
// while($row=$sql->fetch(PDO::FETCH_OBJ))
// {
//     echo "<pre>";
//     print_r($row);
//     echo "</pre>";
//     echo "{$row->id} - {$row->name} - {$row->city} - {$row->dob} <br>";
// }


// fatch all function

$all= $sql->fetchAll(PDO::FETCH_NUM);

// echo "<pre>";
// print_r($all);
// echo "</pre>";

if(count($all))
{
    foreach($all as $row)
    {
        echo "{$row[1]} <br>";
    }
}

//connection close

$conn = null;

?>