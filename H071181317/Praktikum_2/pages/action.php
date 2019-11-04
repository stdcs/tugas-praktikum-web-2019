<?php require_once('../include/templates/header.php'); ?>

<body class="bg-gradient-light">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <?php
                        $nama = $_POST['nama'];
                        $ipk = $_POST['ipk'];
                        $jumlah_saudara = $_POST['jumlah_saudara'];
                        $gaji = $_POST['gaji'];
                        if ($ipk < 3.5 || $jumlah_saudara < 5 || $gaji> 2000000) {
                            echo '<div class="card-header bg-danger text-center"><h1 class="h4 text-white p-2 mb-1"><i class="fa fa-warning"></i> Maaf</h1></div>';
                        } else {
                            echo '<div class="card-header bg-success text-center"><h1 class="h4 text-white p-2 mb-1"><i class="fa fa-check-circle"></i> Selamat</h1></div>';
                        }
                        ?>
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <form action="../index.php">
                                        <div class="jumbotron p-3">
                                            <?php
                                            if ($ipk < 3.5 || $jumlah_saudara < 5 || $gaji > 2000000) {
                                                echo '<div class="alert alert-danger mb-1">';
                                                echo '<div>Maaf <strong>' . $nama . '</strong>, Anda Tidak Berhak Menerima Beasiswa Karena :</div>';
                                                if ($ipk < 3.5) {
                                                    echo '<div><i class="fa fa-times-rectangle-o"></i> IPK Kurang dari 3.5</div>';
                                                }
                                                if ($jumlah_saudara< 5) {
                                                    echo '<div><i class="fa fa-times-rectangle-o"></i> Saudara Kurang dari 5</div>';
                                                }
                                                if ($gaji > 2000000) {
                                                    echo '<div><i class="fa fa-times-rectangle-o"></i> Gaji Lebih dari 2000000</div>';
                                                }
                                                echo '</div>';
                                            } else {
                                                echo '<div class="alert alert-success mb-1"><i class="fa fa-checked-square-o"></i> Selamat <strong>' . $nama . '</strong>, Anda Berhak Menerima Beasiswa</div>';
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-block btn-user btn-success"><i class="fa fa-arrow-circle-left"></i> Back</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once('../include/templates/footer.php'); ?>