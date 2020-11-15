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
        if(isset($_POST["math"]))
            $math = $_POST["math"];
        else $math = 0;

        if(isset($_POST["physical"])){
            $physical = $_POST["physical"];
        }
   
        else $physical = 0;

        if(isset($_POST["chemistry"])){
            $chemistry = $_POST["chemistry"];
        }
            
        else $chemistry = 0;
        
        if(isset($_POST["benchmarks"])){
            $benchmarks = $_POST["benchmarks"];
        }           
        else $benchmarks = 0;

        if(isset($_POST["examResult"])){
            $examResult = $_POST["examResult"];
        }           
        else $examResult = "";

        if(isset($_POST["total"])){
            $total = ($math + $physical + $chemistry);
        }           
        else $total = 0;

        if($math != 0 && $physical != 0 && $chemistry != 0){
            if(($math + $chemistry + $physical) >= $benchmarks)
                $examResult = "Pass!";
            else $examResult = "Failed!";
        }
        
     ?> 
  <h1 class="text-center">Kết quả thi đại học</h1>
  <div class="container d-flex justify-content-center">
    <form class="form-group" action="" method ="POST">
      <label for="math">Toán</label>
      <input class="form-control" name="math" id="math" value = "<?php echo $math?>">

      <label for="physical">Vật lý</label>
      <input class="form-control" name="physical" id="physical" value="<?php echo $physical;?>">


      <label for="chemistry">Hoá học</label>
      <input class="form-control" name="chemistry" id="chemistry" value = "<?php echo $chemistry?>">


      <label for="benchmarks">Điểm chuẩn</label>
      <input class="form-control" name="benchmarks" id="benchmarks" value = "<?php echo $benchmarks?>">


      <label for="total">Tổng Điểm</label>
      <input class="form-control" name="total" id="total" value = "<?php echo $total?>" readonly>

      <label for="examResult">Kết quả thi</label>
      <input class="form-control" name="examResult" id="examResult" value = "<?php echo $examResult?>" readonly>

      
      <button class="btn btn-sm btn-success mt-3">View</button>
      </form>
  </div>
</body>
</html>