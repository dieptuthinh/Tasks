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
        if(isset($_POST["firstNumber"]))
        $firstNumber = $_POST["firstNumber"];
        else $firstNumber = 0;

        if(isset($_POST["secondNumber"]))
        $secondNumber = $_POST["secondNumber"];
        else $secondNumber = 0;

        if(isset($_POST["result"])){
            $result = $_POST["result"];
        }           
        else $result = 0;
        switch($pt = $_POST["pt"])
            {
                case "+" : $result = $firstNumber + $secondNumber; break;
                case "-" : $result = $firstNumber - $secondNumber; break;
                case "*": $result = $firstNumber * $secondNumber; break;
                case "/": if($secondNumber == 0){
                    $result = "Không chia được";
                }
                else{
                    $result = $firstNumber / $secondNumber;
                }
                
            }
     ?> 
  <h1 class="text-center">Caculator!</h1>
  <div class="container d-flex justify-content-center">
    <form class="form-group" action="" method ="POST">
        <div class="check-box">
            <label>
                <input type="radio" name="pt" value="+" checked> Plus
            </label>
            <label>
                <input type="radio" name="pt" value="-"> Sub
            </label>
            <label>
                <input type="radio" name="pt" value="*"> Multiple
            </label>
            <label>
                <input type="radio" name="pt" value="/"> Devide
            </label>
        </div>
      <label for="firstNumber">First number</label>
      <input class="form-control" name="firstNumber" id="firstNumber" value ="<?php echo $firstNumber?>">

      <label for="secondNumber">Second number</label>
      <input class="form-control" name="secondNumber" id="secondNumber" value="<?php echo $secondNumber;?>">

      <label for="result">Result</label>
      <input class="form-control" name="result" id="result" value = "<?php echo $result?>" readonly>

      
      <button class="btn btn-sm btn-success mt-3">Caculate!</button>
      </form>
  </div>
</body>
</html>