<?php
$aa=$_REQUEST['username'];
$bb=$_REQUEST['password'];

$c=mysqli_connect("localhost","root","","test");
$d="INSERT INTO `adminanime`(`username`, `password`) VALUES ('$aa','$bb')";

mysqli_query($c,$d);

if(mysqli_affected_rows($c)>0)
{
    header("location:adminregister.php?success");
}
else
{
    header("location:adminregister.php?Failed");
}
?>