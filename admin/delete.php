<?php
$id=$_REQUEST['x'];
$h=mysqli_connect("localhost","root","","test");
$x="delete from `anime` where id ='$id'";
$z=mysqli_query($h,$x);
if(mysqli_affected_rows($h)>0)
{
    header("location:select.php?success");
}
else
{
    header("locaiton:select.php?Failed");
}
?>