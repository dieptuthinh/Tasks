<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tìm năm nhuận</title>
    <link rel="stylesheet" href="">
</head>

<body>
    <?php
    function LeapYear($year)
    {
        if ($year % 400 == 0 || $year % 4 == 0 && $year % 100 <> 0) {
            return 1;
        } else
            return 0;
    }


    $year = null;
    $result = null;
    $secondYear = null;
    $secondResult = null;
    if (isset($_POST['search'])) {
        if (isset($_POST['year'])) {
            $year = $_POST['year'];
            if ($year > 2000) {
                $result = "";
                foreach (range(2000, $year) as $year) {
                    if (LeapYear($year) == 1)
                        $result = $result . $year . " ";
                }
                if ($result != "") {
                    $result = $result . " là năm nhuận";
                } else {
                    $result = "Không có năm nhuận";
                }
            }
        }
        if (isset($_POST['secondYear'])) {
            $secondYear = $_POST['secondYear'];
            if ($secondYear < 2000) {
                $secondResult = "";
                foreach (range(2000, $secondYear) as $year) {
                    if (LeapYear($year) == 1)
                        $secondResult = $secondResult . $year . " ";
                }
                if ($secondResult != "") {
                    $secondResult = $secondResult . " là năm nhuận";
                } else {
                    $secondResult = "Không có năm nhuận";
                }
            }
        }
    }



    ?>

    <form action="" method="post">
        <div align="center">
            <h4>Năm nhập vào lớn hơn năm 2000</h4>
        </div>
        <table align="center">
            <tr>
                <td>
                    <h1>TÌM NĂM NHUẬN</h1>
                </td>
            </tr>
            <tr>
                <td>
                    Năm: <input type="text" name="year" value="<?php echo $year; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        <p style="background: #FFFFCC">
                            <?php
                            echo $result;
                            ?>
                        </p>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="search" value="Tìm năm nhuận">
                </td>

            </tr>
        </table>

    </form>

    <form action="" method="post">
        <div align="center">
            <h4>Năm nhập vào bé hơn năm 2000</h4>
        </div>
        <table align="center">
            <tr>
                <td>
                    <h1>TÌM NĂM NHUẬN</h1>
                </td>
            </tr>
            <tr>
                <td>
                    Năm: <input type="text" name="secondYear" value="<?php echo $secondYear; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>
                        <p style="background: #FFFFCC">
                            <?php
                            echo $secondResult;
                            ?>
                        </p>
                    </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="search" value="Tìm năm nhuận">
                </td>

            </tr>
        </table>

    </form>

</body>

</html>