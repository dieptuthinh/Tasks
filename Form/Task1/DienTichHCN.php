<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../bootstrap-4.4.1-dist/css/bootstrap.min.css" >
    <script src="../../bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
      if(isset($_POST["height"]))
        $height = trim($_POST["height"]);
      else $height = 0;
      if(isset($_POST["width"]))
        $width = trim($_POST["width"]);
      else $width = 0;
        $acreage = $width * $height;
      ?>
      
  <h1 class="text-center">Diện tích hình chữ nhật</h1>
  <div class="container d-flex justify-content-center">
    <form class="form-group" action="" method ="POST">
      <label for="height">Chiều cao</label>
      <input class="form-control" name="height" id="height" value = "<?php echo $height?>">
      <label for="width">Chiều rộng</label>
      <input class="form-control" name="width" id="width" value = "<?php echo $width?>">
      <label for="acreage">Diện tích</label>
      <input class="form-control" name="acreage" id="acreage" value="<?php echo $acreage;?>">
      <button class="btn btn-sm btn-success mt-3">Caculate</button>
      </form>
  </div>

</body>
</html>