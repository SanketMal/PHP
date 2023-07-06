<?php
$color= array("red","green","blue","purple","yellow","orange");
sort($color);
$n=count($color);
for($i=0;$i<$n;$i++)
{
    echo("<li/>");
    echo($color[$i]);
}
?>