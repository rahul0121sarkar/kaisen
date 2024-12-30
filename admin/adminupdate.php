<?php
$id=$_REQUEST['id'];
$aa=$_REQUEST['username'];
$bb=$_REQUEST['password'];

$c=mysqli_connect("localhost","root","","test");
$d="update adminanime set username ='$aa', password = '$bb' where id = '$id'";

$z=mysqli_query($c,$d);

if(mysqli_affected_rows($c)>0)
{
   header("location:adminselectupdate.php?success");            
}        
else
{
    header("location:adminselectupdate.php?failed");
}





?>