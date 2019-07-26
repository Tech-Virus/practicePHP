<?php
$initial = '555';
/*
*Backend processing
*/
$a = octdec($initial); // convert octal to decimal
$b = deg2rad($a); // convert degree to radian
$c = cos($b); // take the cosine
$d = round($c , 3); // round to 3 decimal (legngth is optional)
$e = log($d); // take the log of result
$f = abs($e); // getting absolute value of $e
$g = acos($f); // taking inverse of cosine(arc cosine)
$h = rad2deg($g); // convert radian to degrees
$i = floor($h); // rounding down
$j = $i - 47; // subtraction


/*
*Font end execition
*/

echo $a; //decimal
echo "\n" . $b; //radian
echo "\n" . $c; //cosine
echo "\n" . $d; //round to decimal
echo "\n" . $e; //log
echo "\n" . $f; //absolute value
echo "\n" . $g; //inverse of log
echo "\n" . $h; //degrees
echo "\n" . $i; //flooring
echo "\n" . $j; //result
