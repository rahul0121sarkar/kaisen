<?php 
// we took d because we store value in d in delete 
$id=$_REQUEST['d'];
$c=mysqli_connect("localhost","root","","test");
$d="delete from adminanime where id ='$id'";

$z=mysqli_query($c,$d);

if(mysqli_affected_rows($c)>0)
{
    header("location:adminselect.php?success");
}
else
{
    header("location:adminselect.php?failed");
}   
?>