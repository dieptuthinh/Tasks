<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <script src="../bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    $zodiac = array(
        "08" => "chuot", "09" => "suu", "10" => "dan", "99" => "mao",
        "00" => "thin", "01" => "chuot", "02" => "ngo",
        "03" => "mui", "04" => "than", "05" => "dau", "06" => "tuat", "07" => "hoi", "20" => "chuot"
    );

    if (isset($_POST["dateofbirth"])) {
        $dateofbirth = $_POST["dateofbirth"];

        $year = substr($dateofbirth, 2, 2);

        $src = $zodiac["$year"];
    } else {
        $dateofbirth = "Enter your birthday";
        $current = date("d/m/Y");
        $year = substr($current, -2);
        $src = $zodiac["$year"];
    }
    ?>
    <header>
        <h2 class="text-center">Find your zodiac from 1999 to 2010</h2>
    </header>
    <div class="container mt-5 border d-flex justify-content-center">

        <div class="col-md-6">
            <form class="form-group mt-2" method="POST" action="">
                <input type="date" class="form-control" name="dateofbirth" value="<?php echo $dateofbirth; ?>" placeholder="Enter your birthday">
                <button class="btn btn-sm btn-danger mt-3">Check</button>
            </form>
            <div class="">
                <img src="../images/<?php echo $src; ?>.jpg">
            </div>
        </div>


    </div>


</body>

</html>