<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <style>
        body {
            background-image: url("http://involve.cewekbanget.id/mahasiswa-kura-kura/img/section7_img.png");
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row" style="padding: 80px 0">
            <div class="col-sm-3"></div>
            <div class="col bg-primary" style="padding: 0 10px; border-radius: 10px;">
            <form action="" method="post">
                <h1 class="text-center text-light">GET AND POST</h1>
                    <div class="form-group">
                        <label class="text-light">Nama</label>
                        <input type="text" class="form-control" name="nama" id="" required>
                        <label class="text-light">NIM</label>
                        <input type="text" class="form-control" name="nim" id="" required><br>
                        <div class="text-center">
                            <div class="form-check-inline">
                                <label class="form-check-label text-light">
                                    <input type="radio" onclick="document.getElementById(method='get')" class="form-check-input" name="radio" required>GET
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label text-light">
                                    <input type="radio" onclick="document.getElementById(method='post')" class="form-check-input" name="radio">POST
                                </label>
                            </div>
                            <button class="btn btn-outline-warning btn-lg" type="submit" name="btn-submit">SUBMIT</button>
                        </div>
                        <h4 class="text-light">
                            <?php if(isset($_POST['btn-submit'])): ?>
                                <?= $_POST['nama'] . "<br>"; ?>
                                <?= $_POST['nim']; ?>
                            <?php elseif(isset($_GET['btn-submit'])): ?>
                                <?= $_GET['nama'] . "<br>"; ?>
                                <?= $_GET['nim']; ?>
                            <?php endif; ?>
                        </h4>
                    </div>
                </div>
            </form>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>