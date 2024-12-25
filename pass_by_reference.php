<?php 

function sum(&$a)
{ 
     $a=$a+1; 
}

$num=5;

sum($num);

echo "$num";
?>