<?php
$id=$_REQUEST['id'];
$aa=$_REQUEST['email'];
$bb=$_REQUEST['password'];

$h=mysqli_connect("localhost","root","","test");
$x="update anime set email ='$aa',password='$bb' where id ='$id'";
$z=mysqli_query($h,$x);

if(mysqli_affected_rows($h)>0)
{
    header("location:selectupdate.php?success");
}
else
{
    header("location:update.php?failed");
}

?>