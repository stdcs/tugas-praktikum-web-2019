<?php require("templates/header.php"); ?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form action="about.php" method="post">
                    <div class="form-group" style="padding : 10px;">
                        <div class="text-center text-primary" style>
                            <h1>FORM BEASISWA</h1>
                        </div>
                        <label for="">Nama : </label>
                        <input type="text" class="form-control" name="nama" required>
                        <label for="">IPK : </label>
                        <input type="number" class="form-control" name="IPK" step=0.1 min=0 max=4 required>
                        <label for="">Jumlah Saudara : </label>
                        <input type="number" class="form-control" name="JumlahSaudara" min=0 required>
                        <label for="">Penghasilan Orang Tua :</label>
                        <input type="number" class="form-control" name="POT" min=0 required><br>
                        <button type="submit" name="btn-submit" class="btn btn-primary btn-lg btn-block"><span class="font-weight-bold">SUBMIT</span></button>
                    </div>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>

<?php require("templates/footer.php"); ?>