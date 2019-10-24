<html>

<head>
    <title>Document</title>
    <style>
    h1 {
        background-color: lightblue;
        height: 50px;
        width: 500px;
        text-align: center;
        padding-top: 10px;
        border-radius: 20px;
        border-color: salmon;
        margin: auto;
        margin-bottom: 20px;
    }

    div {
        background-color: whitesmoke;
        width: 600px;
        text-align: center;
        margin: auto;
        padding: 5px;
    }

    span {
        color: red;
    }
    </style>
</head>

<body>
    <div>
        <form method="post" id="post">
            <div><input type="text" name="nama" placeholder="Nama" required="required"><span>*</span></div>
            <div><input type="text" name="nim" placeholder="NIM" maxlength="10" required="" /><span>*</span></div>
            <div>
                <input type="radio" name="radio" value="POST" checked>
                <label> POST </label>
                <input type="radio" name="radio" value="GET" onclick="document.getElementById('post').method='get'">
                <label> GET </label>
            </div>
            <input type="submit" name="submit" value="Input">
        </form>

        <?php
        $method = " ";
        $nama = " ";
        $nim = " ";

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            $method = $_POST['radio'];
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
        } elseif (isset($_GET['submit'])) {
            $method = $_GET['radio'];
            $nama = $_GET['nama'];
            $nim = $_GET['nim'];
        }
        ?>

        <h1><?= $method ?></h1>
        <h1><?= $nama ?></h1>
        <h1><?= $nim ?></h1>
    </div>
</body>

</html>