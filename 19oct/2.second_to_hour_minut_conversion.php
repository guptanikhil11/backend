<?php
$seconds=60010;

$tmin = $seconds/60;
$min = $tmin % 60;
$hr = $tmin/60; 
$s = $seconds % 60 ;
echo (int)$hr." hr : ".(int)$min ." min :".(int)$s." s"; 
?>
