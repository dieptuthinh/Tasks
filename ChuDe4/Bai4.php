<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tổng dãy số</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	$tong =null;
		if(isset($_POST['daySo'])){
			$daySo = $_POST['daySo'];
			$mang = explode(",", $daySo);
			$n = count($mang);
			$tong = 0;
			for($i = 0 ;$i<$n;$i++){
				$tong=$tong + $mang[$i];
			}
			$fb = fopen("dulieu_bai4.txt", 'w+');
			fwrite($fb, $daySo);
			fclose($fb);
		}
		
	?>
	<form align="center"action="" method="post">
		<h1>NHẬP VÀ TÍNH TRÊN DÃY SỐ</h1>
		<table align="center">
			<tr>
				<td>Nhập dãy số: <input type="text" name ="daySo"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Tổng dãy số" name="tinh"></td>
			</tr>
			<tr>
				<td>Tổng dãy số:<input type="text" name="tong" disabled="disabled" style="background: blue;" value="<?php echo $tong;?>"></td>
			</tr>

		</table>
	</form>
	
</body>
</html>