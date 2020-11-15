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
        if(isset($_POST["radious"]))
            $radious = trim($_POST["radious"]);
        else $radious = 0;

        if(isset($_POST["radious"])){
            $acreage = pi() * pow($radious, 2);
        }
            
        else $acreage = 0;

        if(isset($_POST["parimeter"])){
            $parimeter = 2 * pi() * $radious;
        }
            
        else $parimeter = 0;
        
      ?>
      
  <h1 class="text-center">Diện tích và chu vi hình tròn</h1>
  <div class="container d-flex justify-content-center">
    <form class="form-group" action="" method ="POST">
      <label for="height">Bán kính</label>
      <input class="form-control" name="radious" id="radious" value = "<?php echo $radious?>">

      <label for="acreage">Diện tích</label>
      <input class="form-control" name="acreage" id="acreage" value="<?php echo round($acreage);?>">

      <label for="width">Chu vi</label>
      <input class="form-control" name="parimeter" id="parimeter" value = "<?php echo round($parimeter)?>">

      <button class="btn btn-sm btn-success mt-3">Caculate</button>
      </form>
  </div>
</body>
</html>