<?php
// DB connection
$conn=new PDO("mysql:host=localhost;dbname=pdo", "root", "");

// Query
$city="jaipur";
$sql=$conn->prepare("SELECT * FROM student where city= ? ");
// $sql->bindParam(1,$city);

//we can also define DT here
$sql->bindParam(1,$city,PDO::PARAM_STR);

//we can also pass bindvalue at the place of bindparam
$sql->bindvalue(1,$city,PDO::PARAM_STR);

$sql->execute();
// echo $sql;

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