<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H071181002</title>
</head>
<body>
    <form method="post" action="H071181002_CeciliaTania.php" id="get">
        <div>
            <input type="text" name="nama" placeholder="Nama" required>
        </div>
        <div>
            <input type="text" name="nim" placeholder="NIM" maxlength="10" required>
        </div>
        <div>
            <input type="radio" name="method" value="post" checked>
            <label>Post</label>
        </div>
        <div>
            <input type="radio" name="method" value="get" onclick="document.getElementById('get').method='get'">
            <label>Get</label>
        </div>
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
    <?php if(isset($_POST['submit'])){ ?>
        <div>
            <h1>POST</h1>
            <h3>Nama : <?= $_POST['nama'];?></h3>
            <h3>NIM : <?= $_POST['nim'];?></h3>
        </div>
    <?php } else if (isset($_GET['submit'])){ ?>
        <div>
            <h1>GET</h1>
            <h3>Nama : <?= $_GET['nama'];?></h3>
            <h3>NIM : <?= $_GET['nim'];?></h3>
        </div>
    <?php } ?>
</body>
</html>