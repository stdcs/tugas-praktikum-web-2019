<?php require_once('include/templates/header.php'); ?>
    <div class="text-center">
    <h1 class="h4 text-gray-900 mb-4"><i class="fa fa-mortar-board"></i> Form Beasiswa</h1>
    </div>
    <form action="pages/action.php" method="POST">
        <div class="form">
            <input class="form-control form-control-user" type="text" name="nama" placeholder="Nama" required>
        </div>
        <div class="form">
            <input class="form-control form-control-user" type="text" name="ipk" placeholder="IPK" min="0.0" max="4.0" step="any" required>
        </div>
        <div class="form">
            <input class="form-control form-control-user" type="text" name="jumlah_saudara" placeholder="Jumlah Saudara" min="0" max="100" step="any" required>
        </div>
        <div class="form">
            <input class="form-control form-control-user" type="text" name="gaji" placeholder="Gaji Orang Tua" required >
        </div>
        <div class="form">
            <button type="submit" name="btn-submit">SUBMIT</button>
        </div>   
    </form>
<?php require_once('include/templates/footer.php'); ?>