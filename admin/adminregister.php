<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    if(isset($_REQUEST['success']))
    {
        echo "Data has been successfully inserted";
    }

?>
   <div id="ju">
    <div class="container">
            <div class="row" >
                <h1>Admin Registration</h1>
                <div class="col-md-10">
                    <form action="admininsert.php" method="post" class="form-vertical">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id=""><br>
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
</body>
</html>