<?php $title = "About"; ?>
<?php require("templates/header.php"); ?>

<body>
    <div class="row" style="margin-top: 50px">
        <div class="col-sm-3"></div>
        <div class="col-sm-5 bg-warning" style="padding: 10px;">
            <?php if(isset($_POST['btn-submit'])): ?>
                <?php $nama = $_POST['nama']; ?>
                <?php $ipk = $_POST['IPK']; ?>
                <?php $js = $_POST['JumlahSaudara']; ?>
                <?php $POT = $_POST['POT']; ?>
                <?php $b_ipk = true; $b_js = true; $b_POT = true; ?>
                <?php if($ipk < 3.5): ?>
                    <?php  $b_ipk = false;?>
                <?php endif; ?>
                <?php if($js < 5): ?>
                    <?php  $b_js = false;?>
                <?php endif; ?>
                <?php if($POT > 2000000): ?>
                    <?php  $b_POT = false;?>
                <?php endif; ?>
                <?php if($b_ipk && $b_js && $b_POT): ?>
                    <div style="width: 630px;  margin:0 auto; color:white"; class="text-center bg-danger">
                        <h1> SELAMAT </h1>
                    </div>
                    <?= "<h4>" . $nama . " Mendapatkan BEASISWA </h4>" ?>
                <?php else: ?>
                    <div style="width: 630px;  margin:0 auto; color:white"; class="text-center bg-danger">
                        <h1> MAAF </h1>
                    </div>
                    <div style="padding: 50px; color: white;">
                    <?php if($b_ipk == false): ?>
                        <?= "<h4>IPK anda tidak memenuhi</h4>"; ?>
                    <?php endif; ?>
                    <?php if($b_js == false): ?>
                        <?= "<h4>Jumlah Saudara anda kurang dari 5</h4>"; ?>
                    <?php endif; ?>
                    <?php if($b_POT == false): ?>
                        <?= "<h4>Jumlah Penghasilan anda melebihi ketentuan</h4>"; ?>
                    <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <form action="index.php" method="get">
                <button type="submit" name="btn-submit" class="btn btn-danger btn-lg btn-block"><span class="font-weight-bold">BACK</span></button>
            </form>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</body>

<?php require("templates/footer.php"); ?>