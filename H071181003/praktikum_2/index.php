<?php require_once('include/templates/header.php'); ?>

<body class="bg-gradient-light">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><i class="fa fa-mortar-board"></i> FORM BEASISWA</h1>
                                    </div>
                                    <form action="pages/action.php" method="POST">
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="text" name="name" placeholder="Nama Lengkap" required trim>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="number" name="ipk" placeholder="Nilai IPK" min="0.0" max="4.0" step="any" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="number" name="sibling" placeholder="Jumlah Saudara" required>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control form-control-user" type="number" name="income" placeholder="Jumlah Penghasilan" required>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-block btn-user btn-success" type="submit" name="btn-submit"><i class="fa fa-upload"></i> Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once('include/templates/footer.php'); ?>