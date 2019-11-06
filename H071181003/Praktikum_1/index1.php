<!DOCTYPE html>
<html>
  <head>
    <title>Form POST And GET</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <form method="post" id="post">
      <div>
        <input type="text" name="name" placeholder="Nama" required><br>
      </div>
      <div>
        <input type="text" name="nim" placeholder="H0711xxxxx" required maxlength="10"><br>
      </div>
      <div>
        <input type="radio" name="method" value="Post" checked>Post
      </div>
      <div>
        <input type="radio" name="method" value="Get" onclick="document.getElementById('post').method='get'">Get
      </div>
      <div>
        <button type="submit" name="btn-submit">SUBMIT</button>
      </div>   
    </form>
    <?php if(isset($_POST['btn-submit'])){ ?>
      <div>
        <h2><?php echo $_POST['method'];?></h2>
      </div>
      <div>
        <h2><?php echo $_POST['name'];?></h2>
      </div>
      <div>
        <h2><?php echo $_POST['nim'];?></h2>
      </div>
    <?php } else { ?>
      <div>
        <h2><?php echo $_GET['method'];?></h2>
      </div>
      <div>
        <h2><?php echo $_GET['name'];?></h2>
      </div>
      <div>
        <h2><?php echo $_GET['nim'];?></h2>
      </div>
    <?php } ?>
  </body>
</html>
