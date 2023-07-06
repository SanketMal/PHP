<?php
$host="localhost";
$user="root";
$dbname="php_lab";
$password="";
$con=mysqli_connect($host,$user,$password,$dbname);
if($con)
{
    echo("Successfully connected");

}
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$id=$_POST['stid'];
$age=$_POST['age'];
$sql="insert into student(`First_name`,`Last_name`,`Student_id`,`Age`)values('$fname','$lname','$id',$age)";
$result=mysqli_query($con,$sql);
if($result)
{
    echo("Record created sucessfully");
}
else
{
    echo("Error:").mysqli_error(@$con);
}
?>