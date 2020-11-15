<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['soN']))
            $_soN = $_POST['soN'];
        else $_soN = 0;
        $_arr = [];
        for($i = 0; $i < $_soN; $i++){
            $_arr[$i] = rand(-100, 200);
        }
        $_result = "mảng là: " . implode(", ", $_arr);

        function eventNumber ($arr) {
            $count = 0;
            $dem100 = 0;
            $sum = 0;
            $vitri0 = "";
            foreach($arr as $key => $value) {
                if($value % 2 == 0)
                    $count++;
                if($value < 100)
                    $dem100++;
                if($value < 0)
                    $sum += $value;
                if($value == 0)
                    $vitri0 == $key;
            }
           echo "\nSố chẵn: ", $count ,"\nSố lượng nhỏ hơn 100: ", $dem100, "\nTổng số âm: ", $sum, "\nVi trí số 0: ", $vitri0;
        }
        sort($_arr);
        $_result = "mảng là: " . implode(", ", $_arr);
    ?>
    <form action="" method = "post">
        <h3>tạo mảng</h3>
        <table>
            <tr>
                <td>Nhập vào n: </td>
                <td><input type="text" name = "soN"></td>
                <td><input type="submit" value = "Hiển thị" name = "hienThi"></td>
            </tr>
        </table>
        <textarea name="result" id="" cols="60" rows="20">
            <?php 
                echo $_result;
                eventNumber($_arr);
                echo  "\nSắp xếp tăng dần: ", $_result;
            ?>
        </textarea>
    </form>
</body>
</html>