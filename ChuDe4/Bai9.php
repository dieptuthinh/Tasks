<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mang tìm kiếm</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
			$mangC=null;
			$mangCtang =null;
			$mangCgiam =null;
			$countA =null;
			$countB = null;
		
			if(isset($_POST['mangA']) && isset($_POST['mangB'])){

				$a = trim($_POST['mangA']);
				$mangA = explode(",", $a);
				$countA = count($mangA);

				$b = trim($_POST['mangB']);
				$mangB = explode(",", $b);
				$countB = count($mangB);

				$c = array_merge($mangA,$mangB);
				 $mangC = implode(",", $c);

				 sort($c);
				 $mangCtang = implode(",", $c);
				  
				  rsort($c);
				 $mangCgiam = implode(",", $c);

				
		
			}
	 ?>
	<form action="" method="post">
		<table align="center">
			<tr>
				<td>
					<h1>ĐẾM PHẦN TỬ, GHÉP MẢNG VÀ SẮP XẾP</h1>
				</td>

			</tr>
			<tr>
				<td>
					Mảng A: <input type="text" name="mangA" echo >
				</td>
			</tr>
			<tr>
				<td>
					Mảng B: <input type="text" name="mangB">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="thucHien" value="Thực hiện">
				</td>
			</tr>
			<tr>
				<td>
					Số phần tử mảng A: <input type="text" name="countA" disabled="disabled" value="<?php echo $countA;?>">
				</td>
			</tr>
			<tr>
				<td>
					Số phần tử mảng B: <input type="text" name="countB" disabled="disabled" value="<?php echo $countB;?>">
				</td>
			</tr>
			<tr>
				<td>
					Mảng C: <input type="text" name="mangC"disabled="disabled" value="<?php echo $mangC;?>">
				</td>
			</tr>
			<tr>
				<td>
					Mảng C tăng dần: <input type="text" name="mangCtang" disabled="disabled" value="<?php echo $mangCtang;?>">
				</td>
			</tr>
			<tr>
				<td>
					Mảng C giảm dần: <input type="text" name="mangCgiam"disabled="disabled" value="<?php echo $mangCgiam;?>">
				</td>
			</tr>
			
		</table>
	</form>
</body>
</html>