<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap Stuff -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- Extra Things -->
    <a href="/"></a>
    <style>
    body {
        background: rgb(74, 58, 218);
        background: linear-gradient(to right, rgb(45, 79, 194), rgb(154, 63, 207));
    }
    .vertical-center{
        min-height: 100%;
        min-height: 100vh;

        display: flex;
        align-items: center;
    }
    .card {
        border: 0;
        border-radius: 1.5rem;
    }
    .form-rounded {
        border-radius : 2rem;
    }
    </style>
    <title>Form Input</title>
</head>
<body>
    <div class="container vertical-center">
        <div class="col-sm-5S mx-auto">
            <div class="card bg-light">
                <div class="container p-5">
                    <div class="card-body text-center"><h2>Form Input</h2></div>
                    <form method="post" id="post">  
                        <div class="form-group">
                            <input class="form-control form-rounded form-control-lg" type="text" name="name" placeholder="Nama" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-rounded form-control-lg" type="text" name="nim" placeholder="H071xxxxxx" maxlength="10" required>
                        </div>
                        <div class="d-flex justify-content-center">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="option" value="Post" checked>Post
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="option" value="Get" onclick="document.getElementById('post').method='get'">Get
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <input class="btn btn-block btn-primary form-rounded btn-lg" type="submit" name="submit" value="Submit">  
                        </div>
                        </form>
                        
                        <?php
                        if(isset($_POST['submit'])) {
                            $name = $_POST['name'];
                            $nim = $_POST['nim']; ?>
                        <div class="card-body text-center"><h2>Your Input:</h2></div>
                        <div class="form-group">
                            <input class="form-control form-rounded form-control-lg" type="text" name="name" value="<?php echo $name; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-rounded form-control-lg" type="text" name="nim" maxlength="10" value="<?php echo $nim; ?>" disabled>
                        </div>
                        <?php } else if(isset($_GET['submit'])) {
                            $name = $_GET['name'];
                            $nim = $_GET['nim']; ?>
                        <div class="card-body text-center"><h2>Your Input:</h2></div>
                        <div class="form-group">
                            <input class="form-control form-rounded form-control-lg" type="text" name="name" value="<?php echo $name; ?>" disabled>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-rounded form-control-lg" type="text" name="nim" maxlength="10" value="<?php echo $nim; ?>" disabled>
                        </div>
                        <?php }                       
                        ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
