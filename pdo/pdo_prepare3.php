<?php
// DB connection
$conn=new PDO("mysql:host=localhost;dbname=pdo", "root", "");

// Query
$city="jaipur";

//we can use :value at the place of ?
$sql=$conn->prepare("SELECT * FROM student where city= :city ");

// $sql->bindvalue(":city",$city,PDO::PARAM_STR);

//we can also pass the whole statement in execute block

$sql->execute(array(":city"=>$city));
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