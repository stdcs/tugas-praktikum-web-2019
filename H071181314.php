<html>

<body>
    <form action="" method="post" id="form">
        <div><input type="text" name="nama" placeholder="Nama" required></div>
        <div><input type="text" name='nim' placeholder="H07xxxxxxx" required maxlength="10"></div>
        <div><input type="radio" name="radio" value="POST" checked>
            <label for="post">POST</label></div>
        <div><input type="radio" name="radio" value="GET" onclick="document.getElementById('form').method='get'">
            <label for="get">GET</label></div>
        <div><input type="submit""></div>
    </form> 

    <?php if(isset($_POST['nama'])){ ?>
        <h4><?php echo $_POST['radio']; ?></h4>
        <h4><?php echo $_POST['nama']; ?></h4>
        <h4><?php echo $_POST['nim'];?></h4>
    <?php } elseif(isset($_GET['nama'])) { ?>
        <h4><?php echo $_GET['radio']; ?></h4>
        <h4><?php echo $_GET['nama']; ?></h4>
        <h4><?php echo $_GET['nim'];?></h4>
    <?php } ?>
</body>

</html> 