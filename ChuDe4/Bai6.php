<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tìm kiếm</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
			function tim_kiem($mang,$soCanTim){
				$n = count($mang);
				$kq = -1;
				for($i = 0 ;$i<$n;$i++){
					if($mang[$i] == $soCanTim){
						$kq = $i;
						break;
					}
				}
				return $kq;
			}
			$mang_kq=null;
			$ketQua =null;
			if(isset($_POST['mang']) && isset($_POST['soCanTim'])){
				$mang_chuoi = trim($_POST['mang']);
				$soCanTim = $_POST['soCanTim'];
				$mang = explode(",", $mang_chuoi);
				$kq = tim_kiem($mang,$soCanTim);
				$mang_kq =implode(",", $mang);
				if($kq <> -1){
					$kq =$kq+1;
					$ketQua = "Tìm thấy ".$soCanTim." tại ví trí ".$kq;
				}
				else{
					$ketQua ="Không tìm thấy ".$soCanTim." 	trong mảng";
				}
			}
	 ?>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td>
					<h1>TÌM KIẾM</h1>
				</td>

			</tr>
			<tr>
				<td>
					Nhập mảng: <input type="text" name="mang" echo >
				</td>
			</tr>
			<tr>
				<td>
					Nhập số cần tìm: <input type="text" name="soCanTim">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="timKiem" value="Tìm kiếm">
				</td>
			</tr>
			<tr>
				<td>
					Mảng: <input type="text" name="xuatMang" disabled="disabled" value="<?php echo $mang_kq;?>">
				</td>
			</tr>
			<tr>
				<td>
					Kết quả tìm kiếm: <input type="text" name="ketQua" disabled="disabled" value="<?php echo $ketQua;?>">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>