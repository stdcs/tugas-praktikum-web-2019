<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Awesome</title>
	</head>
	<body>
		<form method="post" id="post">
			<div>
				<input type="text" name="nama" required="true" placeholder="Name">
			</div>
			<div>
				<input type="text" name="nim" required="true" placeholder="NIM" maxlength="10">
			</div>
			<div>
				<input type="radio" name="method" checked>POST
			</div>
			<div>
				<input type="radio" name="method" onclick="document.getElementById('post').method='get'">GET
			</div>
			<div>
				<input class="btn" type="submit" name="submit" value="submit">
			</div>
		</form>
		<?php
			if(isset($_POST['submit'])) {
				$nama = $_POST['nama'];
				$nim = $_POST['nim'];
		?>
		<div>
			<h1>METHOD POST</h1>
			<h4><?=$nama; ?></h4>
			<h4><?=$nim; ?></h4>
		</div>
		<?php	
			} else if (isset($_GET['submit'])) {
				$nama = $_GET['nama'];
				$nim = $_GET['nim'];
		?>
		<div>
			<h1>METHOD GET</h1>
			<h4><?=$nama; ?></h4>
			<h4><?=$nim; ?></h4>
		</div>
		<?php
			}
		?>
		
		<!-- <?php
			phpinfo();
			if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
				$uri = 'https://';
			} else {
				$uri = 'http://';
			}
			$uri .= $_SERVER['HTTP_HOST'];
			header('Location: '.$uri.'/index.php');
			exit;
		?> -->
	</body>
</html>
