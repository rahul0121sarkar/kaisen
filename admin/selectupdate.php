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

<?php
// we request it from x because we store value in x and we will call value with there id 
$id=$_REQUEST['x'];
$h=mysqli_connect("localhost","root","","test");
// we request to get value from x and store it in id 
$x ="select * from `anime` where id = '$id' ";
$z=mysqli_query($h,$x);

if(mysqli_affected_rows($h)>0)
{
    while($key=mysqli_fetch_assoc($z))
    {
?>
      <form action="update.php" method="post" class="form-vertical">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                <div class="form-gropup">
                        <label for="">ID</label>
                        <input type="text" name="id" class="form-control" id="" value="<?php echo($key['id']);?>">
                    </div>
                    <div class="form-gropup">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control" id="" value="<?php echo($key['email']);?>">
                    </div>
                    <div class="form-gropup">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" id="" value="<?php echo($key['password']);?>"><br>
                    </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger" >Reset</button>
                    
                </div>
            </div>
        </div>
      </form>

<?php
    }
}
else
{
    header("location:select.php?faild");
}

?>





    
</body>
</html>

