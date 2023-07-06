<?php
$orginal=array('1','2','3','4','5');
echo("Before insertion .....");
echo("<br/>");
foreach($orginal as $x)
{
    echo "$x";
}
$newdata='6';
array_splice($orginal , 3,1 , $newdata);
echo("<br/>");
echo("After insertion...");
echo("<br/>");
foreach($orginal as $x)
{
    echo "$x";
}
?>