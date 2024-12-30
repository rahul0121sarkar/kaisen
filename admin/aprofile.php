<?php
session_start();
if(!isset($_SESSION['sess_email']))
{
    header("location:http://localhost/anime/admin/ulogin.php?direct_access");
}
echo "Welcome =".$_SESSION['sess_email'];
header("location:https://9animetv.to/filter?keyword=&type=&status=all&season=&language=&sort=default&year=&genre=");

?>
<a href="logout.php">logout</a>
<?php
// header("location:https://9animetv.to/filter?keyword=&type=&status=all&season=&language=&sort=default&year=&genre=");
?>