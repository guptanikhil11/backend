<?php
$p = 10000;
$r = 4;
$t = 5;
$simpleintrest = ($p*$r*$t)/100;
$amount = $p*pow((1+$r/100),$t);
$compoundinterst = $amount - $p;
echo $simpleintrest;
echo"<br>";
echo $compoundinterst;
?> 