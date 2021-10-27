<?php
$a= $_GET['fvalue'];
$b=$_GET['svalue'];
$c=$_GET['tvalue']

if ($a>$b && &a>$c)
{
    echo "a is big";
}
elseif($b>$a && $b>$c)
{
    echo "b is big";
}
elseif($c>$a && $c>$b)
{
    echo "c is big";
}
else
{
    echo "all ae equals";
}
  
?>