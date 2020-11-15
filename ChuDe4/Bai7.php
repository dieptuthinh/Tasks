<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mảng thay thế</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
			function thay_the($mang,$soCu,$soMoi){
				$n = count($mang);
				for($i = 0 ;$i<$n;$i++){
					if($mang[$i] == $soCu){
						$mang[$i] = $soMoi;
						break;
					}
				}
				return $mang;
			}
			$mang_cu=null;
			$mang_moi =null;
			$mang = null;
			$soCu = null;
			$soMoi = null;
			if(isset($_POST['mang']) && isset($_POST['soCu']) && isset($_POST['soMoi'])){
				$mang_chuoi = trim($_POST['mang']);
				$soCu = $_POST['soCu'];
				$soMoi = $_POST['soMoi'];
				$mang = explode(",", $mang_chuoi);
				$mang_cu = implode(" ", $mang);
				$kq = thay_the($mang,$soCu,$soMoi);

				$mang_moi = implode(" ", $kq);
		
			}
	 ?>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td>
					<h1>THAY THẾ</h1>
				</td>

			</tr>
			<tr>
				<td>
					Nhập mảng: <input type="text" name="mang" >
				</td>
			</tr>
			<tr>
				<td>
					Giá trị cần thay thế: <input type="text" name="soCu" value="<?php echo $soCu;?>">
				</td>
			</tr>
			<tr>
				<td>
					Giá trị thay thế: <input type="text" name="soMoi" value="<?php echo $soMoi;?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="thayThe" value="Thay thế">
				</td>
			</tr>
			<tr>
				<td>
					Mảng cũ: <input type="text" name="xuatMang" disabled="disabled" value="<?php echo $mang_cu;?>">
				</td>
			</tr>
			<tr>
				<td>
					Mảng mới: <input type="text" name="ketQua" disabled="disabled" value="<?php echo $mang_moi;?>">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>