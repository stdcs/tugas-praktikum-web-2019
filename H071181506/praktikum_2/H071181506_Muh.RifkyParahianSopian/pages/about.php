<?php $tittle = "About Page";?>
<?php require('../templates/header.php');?>

<body>
    <?php if(isset($_POST['btn-submit'])) :?>
    <?php $nama = htmlspecialchars($_POST['name']);?>
    <?php $ipk = $_POST['ipk'];?>
    <?php $sdr = $_POST['sdr'];?>
    <?php $gaji = $_POST['gaji'];?>
        <?php if($ipk>=3.5 && $sdr>=5 && $gaji<=200000) : ?>
        <div class="sukses">
        <div class="bg-success">
        <h3 class = "text-center text-white"> <?="SELAMAT"?> <h3>
        </div>    
            <div class="isi">
            <h6 class = "text-success"><?= "Selamat ". $nama . " anda berhak menerima beasiswa"?><h6>
            </div>
        </div>
        
        <?php elseif ($ipk>=3.5 && $sdr<5 && $gaji>200000) : ?>
        <div class="gagal">
        <div class="bg-danger">
        <h3 class = "text-center text-white"> <?="MAAF"?> <h3>
        </div>    
            <div class="isi">
            <h6 class = "text-danger"><?= "Maaf ". $nama . " anda tidak berhak menerima beasiswa karena :"?><h6>
            <h6 class = "text-danger"><?= "Saudara kurang dari 5"?><h6>
            <h6 class = "text-danger"><?= "Gaji lebih dari 200000"?><h6>
            </div>
        </div>

        <?php elseif ($ipk>=3.5 && $sdr>=5 && $gaji>200000) : ?>
        <div class="gagal">
        <div class="bg-danger">
        <h3 class = "text-center text-white"> <?="MAAF"?> <h3>
        </div>    
            <div class="isi">
            <h6 class = "text-danger"><?= "Maaf ". $nama . " anda tidak berhak menerima beasiswa karena :"?><h6>
            <h6 class = "text-danger"><?= "Gaji lebih dari 200000"?><h6>
            </div>
        </div>

        <?php elseif ($ipk>=3.5 && $sdr<5 && $gaji<=200000) : ?>
        <div class="gagal" >
        <div class="bg-danger">
        <h3 class = "text-center text-white" > <?="MAAF"?> <h3>
        </div>    
            <div class="isi">
            <h6 class = "text-danger"><?= "Maaf ". $nama . " anda tidak berhak menerima beasiswa karena :"?><h6>
            <h6 class = "text-danger"><?= "Saudara kurang dari 5"?><h6>
            </div>
        </div>

        <?php elseif ($ipk<3.5 && $sdr>=5 && $gaji>200000) : ?>
        <div class="gagal">
        <div class="bg-danger">
        <h3 class = "text-center text-white"> <?="MAAF"?> <h3>
        </div>    
            <div class="isi">
            <h6 class = "text-danger" ><?= "Maaf ". $nama . " anda tidak berhak menerima beasiswa karena :"?><h6>
            <h6 class = "text-danger" ><?= "IPK kurang dari 3.5"?><h6>
            <h6 class = "text-danger" ><?= "Gaji lebih dari 200000"?><h6>
            </div>
        </div>

        <?php elseif ($ipk<3.5 && $sdr>=5 && $gaji<=200000) : ?>
        <div class="gagal" >
        <div class="bg-danger">
        <h3 class = "text-center text-white" > <?="MAAF"?> <h3>
        </div>    
            <div class="isi">
            <h6 class = "text-danger"><?= "Maaf ". $nama . " anda tidak berhak menerima beasiswa karena :"?><h6>
            <h6 class = "text-danger"><?= "IPK kurang dari 3.5"?><h6>
            </div>
        </div>

        <?php elseif ($ipk<3.5 && $sdr<5 && $gaji<=200000) : ?>
        <div class="gagal">
        <div class="bg-danger">
        <h3 class = "text-center text-white"> <?="MAAF"?> <h3>
        </div>    
            <div class="isi">
            <h6 class = "text-danger"><?= "Maaf ". $nama . " anda tidak berhak menerima beasiswa karena :"?><h6>
            <h6 class = "text-danger"><?= "IPK kurang dari 3.5"?><h6>
            <h6 class = "text-danger"><?= "Saudara kurang dari 5"?><h6>
            </div>
        </div>

        <?php else : ?>
        <div class="gagal">
        <div class="bg-danger">
        <h3 class = "text-center text-white" > <?="MAAF"?> <h3>
        </div>    
            <div class="isi">
            <h6 class = "text-danger"><?= "Maaf ". $nama . " anda tidak berhak menerima beasiswa karena :"?><h6>
            <h6 class = "text-danger"><?= "IPK kurang dari 3.5"?><h6>
            <h6 class = "text-danger"><?= "Saudara kurang dari 5"?><h6>
            <h6 class = "text-danger"><?= "Gaji lebih dari 200000"?><h6>
            </div>
        
        <?php endif; ?>
    <?php endif; ?>

            <div class = "tombol">
            <form action = "../tugaslab.php" method="post">
                <button type="submit" name="btn-submit" class="btn btn-info btn-block">Back</button>
            </form>
            </div>
        </div>



<?php require('../templates/footer.php');?>