<?php
$a=4;
$factorial=1;
for($i=$a;$i>0;$i--)
{
    $factorial=$factorial*$i;
}
echo("Factorial of ". $a . "is" .$factorial);
?>