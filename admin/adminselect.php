<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Table Display</title>
</head>
<body>

    <div class="container">
        <table class="table table-hover table-bordered">
            <tr>

                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
            </tr>            

<?php
// because we store and fetch in d 

$c=mysqli_connect("localhost","root","","test");
$d="select * from adminanime ";

$z=mysqli_query($c,$d);

if(mysqli_affected_rows($c)>0)
{
    while($key=mysqli_fetch_assoc($z))
    {

?>
        <tr>
            <td><?php echo($key['id']);?></td>
            <td><?php echo($key['username']);?></td>
            <td><?php echo($key['password']);?></td>
            <!-- we tool d because we store and fetch in d and we find things through id   -->
            <td><a href="admindelete.php?d=<?php echo($key['id']);?>">Delete</a><a href="adminselectupdate.php?d=<?php echo($key['id']);?>">Update</a></td>
            
        </tr>

<?php


    }
}
else
{
    header("location:adminregister.php?Failed");
}
?>
            
        </table>
    </div>
</body>
</html>



