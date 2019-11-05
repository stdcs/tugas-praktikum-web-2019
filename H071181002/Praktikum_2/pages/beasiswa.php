<?php $title = "Hasil"; ?>
<?php require_once('../include/template/header.php'); ?>
<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 py-5">
                <?php
                $nama = $_POST['nama'];
                $ipk = $_POST['ipk'];
                $jml_saudara = $_POST['jumlah_saudara'];
                $gaji_ortu = $_POST['gaji_ortu'];
                ?>
                <?php if ($ipk < 3.5 || $jml_saudara < 5 || $gaji_ortu > 2000000) : ?>
                    <div class="form-group">
                        <div class="card-header bg-danger text-center">
                            <h1 class="h4 text-white p-2 mb-1"><i class="fa fa-warning"></i> Maaf</h1>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="form-group">
                        <div class="card-header bg-success text-center">
                            <h1 class="h4 text-white p-2 mb-1"><i class="fa fa-check-circle"></i> Selamat</h1>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="col-lg-12">
                    <form action="../index.php">
                        <?php if ($ipk < 3.5 || $jml_saudara < 5 || $gaji_ortu > 2000000) : ?>
                            <div class="alert alert-light">
                                <div class="alert alert-danger mb-0">
                                    <div>Maaf <strong><?= $nama; ?></strong>, Anda Tidak Berhak Menerima Beasiswa Karena :</div>
                                </div>
                                <?php if ($ipk < 3.5) : ?>
                                    <div class="alert alert-danger mb-0">
                                        <div><i class="fa fa-times-rectangle-o"></i> IPK Kurang dari 3,5</div>
                                    </div>
                                <?php endif; ?>
                                <?php if ($jml_saudara < 5) : ?>
                                    <div class="alert alert-danger mb-0">
                                        <div><i class="fa fa-times-rectangle-o"></i> Saudara Kurang dari 5</div>
                                    </div>
                                <?php endif; ?>
                                <?php if ($gaji_ortu > 2000000) : ?>
                                    <div class="alert alert-danger mb-0">
                                        <div><i class="fa fa-times-rectangle-o"></i> Gaji Lebih dari 2000000</div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php else : ?>
                            <div class="alert alert-light">
                                <div class="alert alert-warning mb-1 text-center"><i class="fa fa-check-circle"></i> Selamat <strong><?= $nama; ?></strong>, Anda Berhak Menerima Beasiswa</div>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <button class="btn btn-primary btn-user btn-block"><i class="fa fa-arrow-circle-left"></i> Back</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php require_once('../include/template/footer.php'); ?>