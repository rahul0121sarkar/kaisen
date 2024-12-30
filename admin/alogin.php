<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        #df{
            margin-top: 175px;
        }
        body{
            background-image: url('img/blue.jpg');
            background-size: cover;
            color: white;
        }
    </style>
</head>
<body>
    <center>
    <?php
    
    if(isset($_REQUEST['direct_access']))
    
    {
        echo "you need to fill the data for login";
    }

    if (isset($_REQUEST['logout']))
    {
        echo "succesfully logout";
    }
    ?>
    <div class="container">
        <div id="df">
       <div class="col-md-6">
        <form action="ainsert.php" method="post" class="form-vartical">
            <div class="form-group">
                <label for="">Admin</label>
                <input type="text" class="form-control" name="username" id="">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id=""><br>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info">Login</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
        </div>
       </div>
    </center>
    </div>
</body>
</html>