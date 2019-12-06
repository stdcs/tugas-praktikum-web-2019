<?php $tittle = "Main Page";?>
<?php require('templates/header.php');?>

<body>
    <div class = "content">
    <div>
    <h4 class = "text-center text-info"> FORM BEASISWA <h4>
    </div>
        <div class = "input">
            <form action = "pages/about.php" method="post">
            <div class="form-group">
            <label>Nama:</label>
            <input type="text" class="form-control" name="name" required>
            </div>

            <div class="form-group">
            <label>IPK:</label>
            <input type="number" class="form-control" step ="0.1" name="ipk" min="0.0" max="4.0" required>
            </div>

            <div class="form-group">
            <label>Jumlah Saudara:</label>
            <input type="number" class="form-control" name="sdr" min="0" required>
            </div>

            <div class="form-group">
            <label>Gaji Orang Tua:</label>
            <input type="number" class="form-control" name="gaji" min="0" required>
            </div>

            <div class = "col-md-12 text-center">
            <button type="submit" name="btn-submit" class="btn btn-info">Submit</button>
            </div>
            </form>
        </div>  
    </div>

<?php require('templates/footer.php');?>