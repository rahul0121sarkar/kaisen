<?php 
$aa = $_REQUEST['username'];
$bb =$_REQUEST['password'];

$c=mysqli_connect("localhost","root","","test");
$d="select * from adminanime where username = '$aa' and password = '$bb'";

$z=mysqli_query($c,$d);

if(mysqli_affected_rows($c)>0)
{
   while($key=mysqli_fetch_assoc($z))
   
   {
        session_start();
        $_SESSION['sess_username']=$key['username'];
        $_SESSION['sess_password']=$key['password'];
        header("location:http://localhost/anime/admin/profile.php");
  }
}
else
{
    echo"not inserted";
}   
?>