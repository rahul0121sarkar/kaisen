<?php
$aa=$_REQUEST['email'];
$bb=$_REQUEST['password'];

$h=mysqli_connect("localhost","root","","test");
$x="select * from anime where email ='$aa' and password ='$bb'";
$z=mysqli_query($h,$x);
if(mysqli_affected_rows($h)>0)
{
   while($key=mysqli_fetch_assoc($z))
   {
    session_start();
    $_SESSION['sess_email']=$key['email'];
    $_SESSION['sess_password']=$key['password'];
    header("location:http://localhost/anime/admin/aprofile.php");
   }

}
else
{
    echo "not inserted";
}
?>
