<?php
// DB connection
$conn=new PDO("mysql:host=localhost;dbname=pdo", "root", "");

// Query
$sql=$conn->prepare("SELECT * FROM student");
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