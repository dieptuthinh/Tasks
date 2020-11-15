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
        if(isset($_POST["year"])){
            $year = $_POST["year"];
        }else{
            $year = "";
        }
        
        $can = array("Qúy","Giáp","Ất","Bính","Đinh","Mậu","Kỷ","Canh","Tân","Nhâm");
        $chi = array("Hợi","Tý","Sửu","Dần","Mão","Thìn","Tỵ","Ngọ","Mùi","Thân","Dậu","Tuất");
        $pictures = array("hoi","chuot","suu","dan","meo","thin",
        "ty","ngo","mui","than","dau","tuat");

        if($year){
            $lunarYear = $year - 3;
            $Ncan = $year % 10;
            $Nchi = $year % 12;
            $pic = $pictures[$Nchi];
        	$result = $can[$Ncan]." ".$chi[$Nchi];
        }
    ?>
    <div class="container">
        <h2 style="text-align: center;">Lunar year</h2>
        <form action="" method="POST">
            <div class="year">
                <p>Year</p>
                <input type="text" name="year" value="<?php echo $year?>">
            </div>
            <div class="lunarYear">
                <button>=></button>
            </div>
            <div>
                <p>Lunar year</p>
                <input type="text" name="lunarYear" value="<?php echo $result?>" readonly>
            </div>
        </form>
        <div class="image">
            <img src="img/<?php echo $pic?>.jpg">
        </div>
    </div>

</body>

</html>