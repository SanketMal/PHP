<?php
$host="localhost";
$user="root";
$password="";
$dbname="php_lab";
$con=mysqli_connect($host,$user,$password,$dbname);
if($con)
{
    echo("Successfully connected...");
}
else
{
    echo("Unsuccessfully connected...");
}
$fname=$_POST['ufname'];
$lname=$_POST['ulname'];
$id=$_POST['stid'];
$age=$_POST['uage'];
$sql="update student set `First_name`='$fname' , `Last_name`='$lname',`age`=$age where `Student_id`='$id'";
$result=mysqli_query($con, $sql);
if($result)
{
    echo("Updated successfully");
}
else
{
    echo("Error:").mysqli_error(@$con);
}
?>