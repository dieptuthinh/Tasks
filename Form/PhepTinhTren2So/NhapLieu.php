<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nhập phép tính</title>
	<link rel="stylesheet" href="">
</head>
<body>


	<div>
		<form action="KetQua.php" Method="get">
        <table style='text-align:left'  >
            <tr >
                <th colspan="2" align=center style='color:blue'>PHÉP TÍNH TRÊN HAI SỐ</th>
            </tr>
            <tr style='color:red;'>
                <th>Chọn phép tính:</th>
                <th><input type="radio" name="pheptinh" id="cong" checked value="Cộng">Cộng
                    <input type="radio" name="pheptinh" id="tru" value="Trừ">Trừ
                    <input type="radio" name="pheptinh" id="nhan" value="Nhân">Nhân
                    <input type="radio" name="pheptinh" id="chia" value="Chia">Chia
                </th>
            </tr>
            <tr>
                <th style='color:blue;'>Số thứ nhất:</th>
                <th><input type="text" name="sothunhat" ></th>
            </tr>
            <tr>
                <th style='color:blue;'>Số thứ nhì:</th>
                <th><input type="text" name="sothunhi" ></th>
            </tr>
            <tr >
                <th></th>
                <th ><input type="submit" name="tinh" value="Tính"></th>
            </tr>

        </table>
    </form>
	</div>
</body>
</html>