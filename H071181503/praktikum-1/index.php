<!DOCTYPE html>
<html>
  <head>
    
    <title>Form Post And Get</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
  
  <div class= "container">
    <form method="post" id="post">
      <div>
        <h1>Nama
        <input type="text" name="name" placeholder=" masukkan nama" required><br></h1>
        <h1> NIM
        <input type="text" name="nim" placeholder=" masukkan nim" required maxlength="10"><br></h1>
      </div>

      <div>
      <h1><input type="radio" name="method" value="Post" checked>Post</h1>
      <h1><input type="radio" name="method" value="Get" onclick="document.getElementById('post').method='get'">Get</h1>
      </div>

      <div>
        <button type="submit" class="btn btn-primary" name="btn-submit">Submit</button>
      </div>
         
    </form>
</div>

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
