<?php
$a= $_GET['fvalue'];
$b=$_GET['svalue'];
$c=$_GET['tvalue']
$d=$_GET['four_value']

if ($a>$b && $a>$c && $a>$d)
{
    echo "a is big";
}
elseif($b>$a && $b>$c && $b>$d)
{
    echo "b is big";
}
elseif($c>$a && $c>$b && $c>$d)
{
    echo "c is big";
}
elseif($d>$a && $d>$b && $d>$c)
{
    echo "d is big";
}
else
{
    echo "all is equal";
}
  
?>