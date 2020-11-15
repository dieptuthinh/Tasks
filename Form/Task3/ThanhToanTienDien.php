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
        if(isset($_POST["name"]))
            $name = $_POST["name"];
        else $name = "";

        if(isset($_POST["oldNumber"])){
            $oldNumber = $_POST["oldNumber"];
        }
   
        else $oldNumber = 0;

        if(isset($_POST["newNumber"])){
            $newNumber = $_POST["newNumber"];
        }
            
        else $newNumber = 0;
        
        if(isset($_POST["total"])){
            $total = ($newNumber - $oldNumber) * $_POST["unitPrice"];
        }           
        else $total = 0;
      ?>
      
  <h1 class="text-center">Thanh toán tiền điện</h1>
  <div class="container d-flex justify-content-center">
    <form class="form-group" action="" method ="POST">
      <label for="name">Chủ hộ</label>
      <input class="form-control" name="name" id="name" value = "<?php echo $name?>">

      <label for="oldNumber">Chỉ số cũ</label>
      <input class="form-control" name="oldNumber" id="oldNumber" value="<?php echo round($oldNumber);?>">
      <p>(Kw)</p>

      <label for="newNumber">Chỉ số mới</label>
      <input class="form-control" name="newNumber" id="newNumber" value = "<?php echo round($newNumber)?>">
      <p>(Kw)</p>

      <label for="unitPrice">Đơn giá</label>
      <input class="form-control" name="unitPrice" id="unitPrice" value = "20000">
      <p>(VND)</p>

      <label for="total">Tổng số tiền thanh toán</label>
      <input class="form-control" name="total" id="total" value = "<?php echo round($total)?>" readonly>
      <p>(VND)</p>
      
      <button class="btn btn-sm btn-success mt-3">Tính</button>
      </form>
  </div>
</body>
</html>