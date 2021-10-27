<?php
$cost_price= $_GET['fvalue'];
$selling_price=$_GET['svalue'];

$a=|$selling_price-$cost_price|;

if($cost_price<$selling_price){
    echo "profit=".$a;
}
else{
    echo "loss=".$a;
}
?>