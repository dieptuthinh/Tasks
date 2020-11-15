<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mảng phát sinh tính toán </title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		function tao_mang($soPhanTu){
			for($i=0;$i<$soPhanTu;$i++)
				$mang[$i] = rand(0,20);
			return $mang;
		}
		function xuat_mang($mang){
			$n = count($mang);
			$chuoi = "";
			for($i=0;$i<$n;$i++){
				$chuoi = $chuoi.$mang[$i]." ";
			}
			return $chuoi;
		}
		function tinhTong($mang){
			$n = count($mang);
			$tong = 0;
			for($i=0;$i<$n;$i++){
				$tong = $tong + $mang[$i];
			}
			return $tong;
		}
		function tim_max($mang){
			$n = count($mang);
			$max = $mang[0];
			for($i=0;$i<$n;$i++){
				if($mang[$i] > $max){
					$max = $mang[$i];
				}
			}
			return $max;
		}
		function tim_min($mang){
			$n = count($mang);
			$min = $mang[0];
			for($i=0;$i<$n;$i++){
				if($mang[$i] < $min){
					$min = $mang[$i];
				}
			}
			return $min;
		}
		$soPhanTu =null;
		$mang  = null;
		$xuat_mang = null;
		$tinhTong =null;
		$tim_max =null;
		$tim_min = null;
		if(isset($_POST['soPhanTu'])){
			$soPhanTu = $_POST['soPhanTu'];
			$mang = tao_mang($soPhanTu);
			$xuat_mang = xuat_mang($mang);
			$tinhTong = tinhTong($mang);
			$tim_max = tim_max($mang);
			$tim_min = tim_min($mang);
		}
	?>
	<form action=""method="post">
	<table align="center">
			<tr>
			<td><h1>MẢNG PHÁT SINH VÀ TÍNH TOÁN</h1></td>
		</tr>
		<tr>
			<td>Nhập số phần tử: <input type="text"name="soPhanTu" value="<?php echo $soPhanTu;?>"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Phát sinh và tính toán"></td>
		</tr>
		<tr>
			<td>
				Mảng: <input type="text" disabled="disabled" value="<?php echo $xuat_mang;;?>">
			</td>
		</tr>
		<tr>
			<td>
				GTLN (MAX) trong mản: <input type="text"name="gtln"disabled="disabled" value="<?php echo $tim_max;;?>">
			</td>
		</tr>
		<tr>
			<td>
				TTNN (MIN) trong mảng: <input type="text" name="ttnn" disabled="disabled" value="<?php echo $tim_min;?>">
			</td>
		</tr>
		<tr>
			<td>
				Tổng mảng: <input type="text" name="tong" disabled="disabled"value="<?php echo $tinhTong;?>">
			</td>
		</tr>
	</table>
	</form>
	
</body>
</html>