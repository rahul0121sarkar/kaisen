<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
         #ju{
            margin-top: 145px;
        }
        body{
            background-image: url('img/abstract3.jpg');
            background-size: cover;
            /* color: white; */
        }
    </style>
</head>
<body>
<?php
$id=$_REQUEST['d'];
$c=mysqli_connect("localhost","root","","test");
$d="select * from adminanime where id = '$id'";

$z=mysqli_query($c,$d);

if(mysqli_affected_rows($c)>0)
{
   while($key=mysqli_fetch_assoc($z))
   {
?>


<div id="ju">
    <div class="container">
            <div class="row" >
                <h1>Admin Registration</h1>
                <div class="col-md-10">
                    <form action="adminupdate.php" method="post" class="form-vertical">
                    <div class="form-group">
                        <label for="">ID</label>
                        <input type="text" class="form-control" name="id" id=""  value="<?php echo($key['id']);?>">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" id=""  value="<?php echo($key['username']);?>">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id=""  value="<?php echo($key['password']);?>" ><br>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                    </form>
                </div>
            </div>
    </div>
    </div>


<?php
   }
}
else
{
    header("location:adminselect.php?Failed");
}
?>


    
</body>
</html>