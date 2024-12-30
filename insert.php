<?php
$aa=$_REQUEST['email'];
$bb=$_REQUEST['password'];



$h=mysqli_connect("localhost","root","","test");
$x="INSERT INTO `anime`(`email`, `password`) VALUES ('$aa','$bb')";
mysqli_query($h,$x);
if(mysqli_affected_rows($h)>0)
{
    header("location:system.php?success");

}
else
{
    header("location:system.php?failed");
}
?>