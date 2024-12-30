<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <style>
        body{
            background-image: url('img/silent.jpg');
            background-size: cover;
            
        }
    </style>
</head>
<body>

<center>



<?php
session_start();

if(!isset($_SESSION['sess_username']))
{
header("location:http://localhost/anime/admin/alogin.php?direct_access");
}
echo "WELCOME ".$_SESSION['sess_username'];
?>
</center>

<nav class="nav navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Admin</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="select.php">Userdata</a></li>
            <li class=""><a href="adminselect.php">AdminInfo</a></li>
            <li class=""><a href="adminregister.php">Admin Register</a></li>
            <li class=""><a href="alogout.php">Logout</a></li>
        </ul>
      
    </div>
</nav>

</body>
</html>

