<?php $title = "Praktikum 2 - Bidikmisi"; ?>
<?php require_once('include/template/header.php'); ?>

<body class="container-fluid bg-dark">
    <div class="row">
        <div class="card mx-auto mt-5 col-lg-7">
            <h5 class="card-header bg-primary text-white text-center">
                <i class="fa fa-mortar-board"></i>
                Form Bidikmisi
            </h5>
            <div class="card-body">
                <form class="text-center" action="pages/action.php" method="post">
                    <div class="form-col-lg">
                        <div class="form-group">
                            <input class="form-control mb-2" type="text" name="name" placeholder="Nama Lengkap Anda" required trim>
                        </div>
                        <div class="form-group">
                            <input class="form-control mb-2" type="number" name="ipk" placeholder="NILAI IPK ANDA" min="0.0" max="4.0" step="0.1" maxlength="1" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control mb-2" type="number" name="saudara" id="saudara" placeholder="Jumlah Saudara Anda" step="1" max="50" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control mb-2" type="number" name="income" id="income" placeholder="Gaji Orang Tua Anda" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">
                            <i class="fa fa-upload"></i>
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>