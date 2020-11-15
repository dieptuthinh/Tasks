<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sắp xếp mảng</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
			function hoanVi(&$a,&$b){
				$tam = $a;
				$a = $b;
				$b =$tam;
			}
			function sap_tang($mang){
				$n = count($mang);
				for($i = 0 ;$i< $n-1;$i++){
					for($j = $i ;$j<$n;$j++){
						if($mang[$i] > $mang[$j]){
							hoanVi($mang[$i],$mang[$j]);
						}
					}
				
				}
				return $mang;
			}
			function sap_giam($mang){
				$n = count($mang);
				for($i = 0 ;$i<$n-1;$i++){
					for($j = $i ;$j<$n;$j++){
						if($mang[$i] < $mang[$j]){
							hoanVi($mang[$i],$mang[$j]);
						}
					}
				
				}
				return $mang;
			}
			$tangDan=null;
			$giamDan =null;
			if(isset($_POST['mang'])){
				$mang_chuoi = trim($_POST['mang']);
				$mang = explode(",", $mang_chuoi);
				$tang = sap_tang($mang);
				$tangDan =implode(",", $tang);
				$giam = sap_giam($mang);
				$giamDan = implode(",", $giam);
			}
	 ?>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td>
					<h1>SẮP XẾP MẢNG</h1>
				</td>

			</tr>
			<tr>
				<td>
					Nhập mảng: <input type="text" name="mang" echo >
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="sapXep" value="Sắp xếp tăng/giảm">
				</td>
			</tr>
			<tr>
				<td>
					Mảng: <input type="text" name="tangDan" disabled="disabled" value="<?php echo $tangDan;?>">
				</td>
			</tr>
			<tr>
				<td>
					Kết quả tìm kiếm: <input type="text" name="giamDan" disabled="disabled" value="<?php echo $giamDan;?>">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>