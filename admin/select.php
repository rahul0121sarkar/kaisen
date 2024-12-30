<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Document</title>

</head>
<body>
<table class="table table-hover table-bordered">
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
 <?php
$h=mysqli_connect("localhost","root","","test");
$x="select * from `anime`";
$z=mysqli_query($h,$x);
if(mysqli_affected_rows($h)>0)
{
    while($key=mysqli_fetch_assoc($z))
    {
 ?>     
        <tr>
          <td><?php echo($key['id']);?></td>
          <td><?php echo($key['email']);?></td>
          <td><?php echo($key['password']);?></td>
          <td><a href="delete.php?x=<?php echo($key['id']);?>" class="btn btn-danger">Delete</a> <a href="selectupdate.php?x=<?php echo ($key['id'])?>" class="btn btn-primary">Update</a></td>
        </tr>

<?php       
    }
}
else
{
    echo "data should not been able to show";
}
?>
    
</table>
</body>
</html>

