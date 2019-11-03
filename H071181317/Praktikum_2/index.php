<?php require_once('include/templates/header.php'); ?>

    <form action="pages/action.php" method="POST">
        <div class="form-group">
            <input type="text" name="nama" placeholder="Nama" required><br>
        </div>
        <div class="form-group">
            <input type="number" name="ipk" placeholder="IPK" min="0.0" max="4.0" step="any" required><br>
        </div>
        <div class="form-group">
            <input type="number" name="jumlah_saudara" placeholder="Jumlah Saudara" min="0" max="100" step="any" required><br>
        </div>
        <div class="form-group">
            <input type="number" name="gaji" placeholder="Gaji Orang Tua" required ><br>
        </div>
        <div class="form-group">
            <button type="submit" name="btn-submit">SUBMIT</button>
        </div>   
    </form>
<?php require_once('include/templates/footer.php'); ?>