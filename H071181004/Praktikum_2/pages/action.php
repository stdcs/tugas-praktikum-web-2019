<?php $title = "Praktikum 2 - result"; ?>
<?php require_once('../include/template/header.php'); ?>

<body class="container-fluid bg-dark">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card mt-5">
                <div class="card-body">
                    <?php if (isset($_POST['submit'])) :
                        $name = htmlspecialchars($_POST['name']);
                        $ipk = htmlspecialchars($_POST['ipk']);
                        $saudara = htmlspecialchars($_POST['saudara']);
                        $income = htmlspecialchars($_POST['income']);

                        if ($ipk < 3.5 || $saudara < 5 || $income > 2000000) : ?>
                            <div class="form-group">
                                <div class="card-header bg-danger text-center">
                                    <h4 class="text-white p-2 mb-1">
                                        <i class="fa fa-warning"></i>
                                        Maaf <?= $name; ?>, anda Tidak memenuhi kriteria Penerima Bidikmisi.
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="row ">
                                        <div class="col ">
                                            <div class="p-5">
                                                <form action="../index.php">
                                                    <div class="jumbotron p-3">
                                                        <?php if ($ipk < 3.5) : ?>
                                                            <div class="form-group"><i class="fa fa-times-rectangle-o"></i>
                                                                IPK Kurang dari 3.5.
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php if ($saudara < 5) : ?>
                                                            <div class="form-group"><i class="fa fa-times-rectangle-o"></i>
                                                                Saudara Kurang dari 5.
                                                            </div>
                                                        <?php endif; ?>
                                                        <?php if ($income > 2000000) : ?>
                                                            <div class="form-group"><i class="fa fa-times-rectangle-o"></i>
                                                                Gaji Lebih Dari Rp. 2 Juta.
                                                            </div>
                                                        <?php endif; ?>
                                                        <div class="form-group text-center">
                                                            <button class="btn btn-user btn-primary"><i class="fa fa-arrow-circle-left"></i>
                                                                Back
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="form-group">
                                <div class="card-header bg-success text-center">
                                    <h4 class="text-white p-2 mb-1">
                                        <i class="fa fa-check-circle"></i>
                                        Berhasil!!
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <div class="alert alert-warning mb-1"><i class="fa fa-check-circle"></i>
                                        Selamat <strong><?= $name; ?></strong>, Anda Berhak Mendapatkan Beasiswa Ini, Selamat Yah!!!
                                    </div>
                                    <form action="../index.php">
                                        <div class="form-group text-center">
                                            <button class="btn btn-user btn-primary"><i class="fa fa-arrow-circle-left"></i>
                                                Back
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>