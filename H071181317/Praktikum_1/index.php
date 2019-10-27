<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="p.css">
        <title>Form Post dan Get</title>
    </head>

    <body>
        <form method="post" id="post">
            <div>
                <input type="text" name="nama" placeholder="Nama" required><br>
            </div>
            <div>
                <input type="text" name="nim" placeholder="NIM" required maxlength="10"><br>
            </div>
            <div>
                <input type="radio" name="method" value="POST" checked>Post
            </div>
            <div>
                <input type="radio" name="method" value="GET" onclick="document.getElementById('post').method='get'">Get
            </div>
            <div>
                <button type="submit" name="btn-submit">SUBMIT</button>
            </div>   
        </form>
        <?php if(isset($_POST['btn-submit'])){ ?>
            <div>
                <h2><?php echo $_POST['method'];?></h2>
            </div>
            <div>
                <h2><?php echo $_POST['nama'];?></h2>
            </div>
            <div>
                <h2><?php echo $_POST['nim'];?></h2>
            </div>
        <?php } else if (isset($_GET['btn-submit'])){ ?>
            <div>
                <h2><?php echo $_GET['method'];?></h2>
            </div>
            <div>
                <h2><?php echo $_GET['nama'];?></h2>
            </div>
            <div>
                <h2><?php echo $_GET['nim'];?></h2>
            </div>
        <?php } ?>
    </body>
</html>
