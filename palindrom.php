<?php 
$a=1331;
$b=$a;

$temp=0;
while($b != 0)
{
    $rem=$b%10;
    $temp=$temp*10+$rem;
    $b=(int)($b/10);
    
}
if($temp==$a)
{
    echo($a ."is a palindrom number");
}
else
{
    echo($a ."is not a palindrom");
}
?>