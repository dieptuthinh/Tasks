<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    if (isset($_POST["nInterger"])) {
        $nInterger = $_POST["nInterger"];
    } else {
        $nInterger = 0;
    }
    $array = [];

    for ($i = 0; $i < $nInterger; $i++) {
        $array[$i] = rand(-100, 200);
    }

    function Number($array)
    {
        $evenNumber = 0;
        $lessThanOneHundred = 0;
        $sumNegativeNumber = 0;
        $zeroPosition = "";
        foreach ($array as $key => $value) {
            if ($value % 2 == 0) {
                $evenNumber++;
            }
            if ($value < 100) {
                $lessThanOneHundred++;
            }
            if ($value < 0) {
                $sumNegativeNumber += $value;
            }
            if ($value = 0) {
                $zeroPosition == $key;
            }
        }
        $affterSort = sort($array);
        echo "a) Array with n numbers: ";
        foreach($array as $value){
            echo " ".$value;
        }
        echo "\n";
        echo "b) Even number: ", $evenNumber, "\n";
        echo "c) Less than 100: ", $lessThanOneHundred, "\n";
        echo "d) Sum of negative numbers: ", $sumNegativeNumber, "\n";
        echo "e) Position of 0: ", $zeroPosition, "\n";
        echo "f) Array after sort: ", $affterSort, "\n";
    }

    ?>
    <div class="container">
        <form action="" method="POST">
            <label for="nInterger">Enter n</label>
            <input type="text" name="nInterger">
            <button>Submit</button>
        </form>
        <textarea cols="60" rows="20">
            <?php
            Number($array);
            ?>
        </textarea>
    </div>

</body>

</html>