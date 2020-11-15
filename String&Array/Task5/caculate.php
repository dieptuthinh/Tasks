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
		function CreateArray($numberOfValue){
			for($i=0; $i<$numberOfValue; $i++)
				$array[$i] = rand(0, 20);
			return $array;
        }
        
		function Export($array){
			$n = count($array);
			$string = "";
			for($i=0; $i<$n; $i++){
				$string = $string.$array[$i]." ";
			}
			return $string;
        }
        
		function Sum($array){
			$n = count($array);
			$sum = 0;
			for($i=0;$i<$n;$i++){
				$sum = $sum + $array[$i];
			}
			return $sum;
        }
        
		function MyMax($array){
			$n = count($array);
			$MyMax = $array[0];
			for($i=0;$i<$n;$i++){
				if($array[$i] > $MyMax){
					$MyMax = $array[$i];
				}
			}
			return $MyMax;
		}
		function MyMin($array){
			$n = count($array);
			$MyMin = $array[0];
			for($i=0;$i<$n;$i++){
				if($array[$i] < $MyMin){
					$MyMin = $array[$i];
				}
			}
			return $MyMin;
		}
		$numberOfValue =null;
		$array  = null;
		$Export = null;
		$Sum =null;
		$MyMax =null;
		$MyMin = null;
		if(isset($_POST['numberOfValue'])){
			$numberOfValue = $_POST['numberOfValue'];
			$array = CreateArray($numberOfValue);
			$Export = Export($array);
			$Sum = Sum($array);
			$MyMax = MyMax($array);
			$MyMin = MyMin($array);
		}
	?>
	<form action=""method="post">
	<table align="center">
			<tr>
			<td><h1>MẢNG PHÁT SINH VÀ TÍNH TOÁN</h1></td>
		</tr>
		<tr>
			<td>Nhập số phần tử: <input type="text"name="numberOfValue" value="<?php echo $numberOfValue;?>"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Phát sinh và tính toán"></td>
		</tr>
		<tr>
			<td>
				Mảng: <input type="text" disabled="disabled" value="<?php echo $Export;;?>">
			</td>
		</tr>
		<tr>
			<td>
				GTLN (MyMax) trong mản: <input type="text"name="gtln"disabled="disabled" value="<?php echo $MyMax;;?>">
			</td>
		</tr>
		<tr>
			<td>
				TTNN (MyMin) trong mảng: <input type="text" name="ttnn" disabled="disabled" value="<?php echo $MyMin;?>">
			</td>
		</tr>
		<tr>
			<td>
				Tổng mảng: <input type="text" name="sum" disabled="disabled"value="<?php echo $Sum;?>">
			</td>
		</tr>
	</table>
	</form>
	
</body>
</html>