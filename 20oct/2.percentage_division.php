<?php
$math=80;
$science=90;
$ss=85;

$total=$math+$science+$ss;
$percentage=($total/300.0)*100;

switch($percentage)
{
    case $percentage>=60%:
        echo "first division";
    break;
    case $percentage>=45%:
        echo "second division";
    break;
    case $percentage>=33%:
        echo "third division";
    break;
    case $percentage<33%:
         echo"fail";
    break;
}
?>