<!DOCTYPE html>
<html>
  <head>
    <title>Form Post And Get</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>     
    .content{
        width: 800px;
        margin : 120px auto;
        background-color: #dfe6e9;
        border-style: solid;
        border-width: 8px;
        border-color: #dfe6e9;
        border-radius: 20px;
    }
    .input{
        padding-top: 20px;
        width:500px;
        margin: auto;
    }
    </style>
  </head>

  <body>
    <div class = "content">
    <div>
    <h4 class = "text-center text-info" >FORM MAHASISWA<h4>
    </div>
    <div class="input">
    <form method="post" id="post">
    <div class="form-group">
    <label>Nama:</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label>NIM:</label>
      <input type="text" class="form-control" name="nim">
      </div>
      <label class = "radio-inline"><input type="radio" name="method" value="Post" checked> POST</label>
      <label class = "radio-inline"><input type="radio" name="method" value="Get" onclick="document.getElementById('post').method='get'"> GET</label>
      <div>
        <button type="submit" name="btn-submit" class="btn btn-info">Submit</button>
      </div>   
    </form>
    
    <?php if(isset($_POST['btn-submit'])){ ?>
      <?php $nama =  $_POST['name']?>
      <?php $nim =  $_POST['nim']?>
      <?php $post = $_POST['method']?>
      
      <?php if(empty($nama)){
			echo "Nama masih kosong";
      }?>
      <?php if(empty($nim)){
			echo "NIM masih kosong";
      }?>  
      <?php if(!empty($nama) && !empty($nim)){
			
      echo"<h4>{$post}</h4>";
      echo"<h4>Nama : {$nama}</h4>";
      echo"<h4>NIM : {$nim}</h4>";
      }?>
      
      <?php } elseif (isset($_GET['btn-submit'])){ ?>
      <?php $nama =  $_GET['name']?>
      <?php $nim =  $_GET['nim']?>
      <?php $get = $_GET['method']?>

      <?php if(empty($nama)){
			echo "Nama masih kosong";
      }?>
      <?php if(empty($nim)){
			echo "NIM masih kosong";
      }?>  
      <?php if(!empty($nama) && !empty($nim)){
			
      echo"<h4>{$get}</h4>";
      echo"<h4>Nama : {$nama}</h4>";
      echo"<h4>NIM : {$nim}</h4>";
      }?>
      <?php } ?>
      </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
