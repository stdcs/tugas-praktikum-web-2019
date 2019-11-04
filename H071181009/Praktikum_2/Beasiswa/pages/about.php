<?php $title = "About Page"; ?>
<?php require('../include/header.php'); ?>

<body>
    <?php isset($_POST['btn-submit']) ?>
    <?php $nama = htmlspecialchars($_POST['name']); ?>
    <?php $ipk = $_POST['ipk']; ?>
    <?php $sdr = $_POST['sdr']; ?>
    <?php $gaji = $_POST['gaji']; ?>

    <div class="container">

        <?php if ($ipk >= 3.5 && $sdr >= 5 && $gaji < 2000000) : ?>
        <div class="success bg-success">
            <div class="input">
                <h3 class="text-center text-light"> <?= "SELAMAT" ?> <h3>
            </div>
        </div>

        <div class="isi text-center">
            <h3 class="alert alert-success" role="alert">
                <?= "Selamat " . $nama . " , anda berhak menerima beasiswa" ?>
                <h3>
        </div>

        <?php elseif ($ipk < 3.5 && $sdr < 5 && $gaji > 2000000) : ?>
        <div class="danger bg-danger">
            <div class="input">
                <h3 class="text-center text-light"> <?= "MAAF" ?> <h3>
            </div>
        </div>
        <div class="isi">
            <h3 class="alert text-center alert-danger">
                <?= "Maaf " . $nama . ", anda tidak berhak menerima beasiswa" ?>
                <h3>
                    <h3 class="alert text-center alert-danger"><?= " IPK anda tidak memenuhi syarat" ?>
                        <h3>
                            <h3 class="alert text-center alert-danger">
                                <?= "Jumlah saudara anda tidak memenuhi syarat" ?>
                                <h3>
                                    <h3 class="alert text-center alert-danger">
                                        <?= "Penghasilan orang tua anda tidak memenuhi syarat" ?>
                                        <h3>
        </div>
        <?php elseif ($ipk >= 3.5 && $sdr < 5 && $gaji > 2000000) : ?>
        <div class="danger bg-danger">
            <div class="input">
                <h3 class="text-center text-light"> <?= "MAAF" ?> <h3>
            </div>
        </div>
        <div class="isi">
            <h3 class="alert text-center alert-danger">
                <?= "Maaf " . $nama . ", anda tidak berhak menerima beasiswa" ?> </h3>
            <h3 class="alert text-center alert-danger">
                <?= "Jumlah saudara anda tidak memenuhi syarat" ?>
                <h3>
                    <h3 class="alert text-center alert-danger">
                        <?= "Penghasilan orang tua anda tidak memenuhi syarat" ?>
                        <h3>
        </div>
        <?php elseif ($ipk < 3.5 && $sdr > 5 && $gaji > 2000000) : ?>
        <div class="danger bg-danger">
            <div class="input">
                <h3 class="text-center text-light"> <?= "MAAF" ?> <h3>
            </div>
        </div>
        <div class="isi">
            <h3 class="alert text-center alert-danger">
                <?= "Maaf " . $nama . ", anda tidak berhak menerima beasiswa" ?></h3>
            <h3 class="alert text-center alert-danger">
                <?= " IPK anda tidak memenuhi syarat" ?>
                <h3>
                    <h3 class="alert text-center alert-danger">
                        <?= "Penghasilan orang tua anda tidak memenuhi syarat" ?>
                        <h3>
        </div>
        <?php elseif ($ipk < 3.5 && $sdr < 5 && $gaji <= 2000000) : ?>
        <div class="danger bg-danger">
            <div class="input">
                <h3 class="text-center text-light"> <?= "MAAF" ?> <h3>
            </div>
        </div>
        <div class="isi">
            <h3 class="alert text-center alert-danger">
                <?= "Maaf " . $nama . ", anda tidak berhak menerima beasiswa" ?> </h3>
            <h3 class="alert text-center alert-danger"><?= " IPK anda tidak memenuhi syarat" ?>
                <h3>
                    <h3 class="alert text-center alert-danger">
                        <?= "Jumlah saudara anda tidak memenuhi syarat" ?>
                        <h3>
        </div>
        <?php elseif ($ipk >= 3.5 && $sdr > 5 && $gaji > 2000000) : ?>
        <div class="danger bg-danger">
            <div class="input">
                <h3 class="text-center text-light"> <?= "MAAF" ?> <h3>
            </div>
        </div>
        <div class="isi">
            <h3 class="alert text-center alert-danger">
                <?= "Maaf " . $nama . ", anda tidak berhak menerima beasiswa" ?> </h3>
            <h3 class="alert text-center alert-danger">
                <?= "Penghasilan orang tua anda tidak memenuhi syarat" ?>
                <h3>
        </div>
        <?php elseif ($ipk >= 3.5 && $sdr < 5 && $gaji <= 2000000) : ?>
        <div class="danger bg-danger">
            <div class="input">
                <h3 class="text-center text-light"> <?= "MAAF" ?> <h3>
            </div>
        </div>
        <div class="isi">
            <h3 class="alert text-center alert-danger">
                <?= "Maaf " . $nama . ", anda tidak berhak menerima beasiswa" ?> </h3>
            <h3 class="alert text-center alert-danger">
                <?= "Jumlah saudara anda tidak memenuhi syarat" ?>
                <h3>
        </div>
        <?php elseif ($ipk < 3.5 && $sdr >= 5 && $gaji <= 2000000) : ?>
        <div class="danger bg-danger">
            <div class="input">
                <h3 class="text-center text-light"> <?= "MAAF" ?> <h3>
            </div>
        </div>
        <div class="isi">
            <h3 class="alert text-center alert-danger">
                <?= "Maaf " . $nama . ", anda tidak berhak menerima beasiswa" ?></h3>
            <h3 class="alert text-center alert-danger"><?= " IPK anda tidak memenuhi syarat" ?>
                <h3>
        </div>

        <?php endif; ?>

        <form action="../formBeasiswa.php">
            <div class="text-center">
                <button type="submit" step="1000" name="btn-back" class="btn back btn-info"> Back </button>
            </div>
        </form>

        <?php require('../include/footer.php'); ?>