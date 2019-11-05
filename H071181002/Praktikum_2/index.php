<?php $title = "Registrasi"; ?>
<?php require_once('include/template/header.php'); ?>
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="py-5 text-center">
                    <h4 class="mb-4"><i class="fa fa-mortar-board"></i> Form Beasiswa</h4>
                </div>
                <form action="pages/beasiswa.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="ipk" placeholder="IPK" min="0.00" max="4.00" step="0.01" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="jumlah_saudara" placeholder="Jumlah Saudara" min="0" step="0" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="gaji_ortu" placeholder="Gaji Orang Tua" min="0" step="1000" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-user btn-block" name="btn-submit"><i class="fa fa-upload"></i> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php require_once('include/template/footer.php'); ?>