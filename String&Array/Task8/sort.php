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
			function SwitchValuePosition(&$a,&$b){
				$temp = $a;
				$a = $b;
				$b =$temp;
			}
			function Ascending($array){
				$n = count($array);
				for($i = 0 ;$i< $n-1;$i++){
					for($j = $i ;$j<$n;$j++){
						if($array[$i] > $array[$j]){
							SwitchValuePosition($array[$i],$array[$j]);
						}
					}
				
				}
				return $array;
			}
			function Decreasing($array){
				$n = count($array);
				for($i = 0 ;$i<$n-1;$i++){
					for($j = $i ;$j<$n;$j++){
						if($array[$i] < $array[$j]){
							SwitchValuePosition($array[$i],$array[$j]);
						}
					}
				
				}
				return $array;
			}
			$ascend=null;
			$decrease =null;
			if(isset($_POST['array'])){
				$secondOldArray = trim($_POST['array']);
				$array = explode(",", $secondOldArray);
				$up = Ascending($array);
				$ascend =implode(",", $up);
				$down = Decreasing($array);
				$decrease = implode(",", $down);
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
					Nhập mảng: <input type="text" name="array" echo >
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Sắp xếp tăng/giảm">
				</td>
			</tr>
			<tr>
				<td>
					Mảng: <input type="text" name="ascend" disabled="disabled" value="<?php echo $ascend;?>">
				</td>
			</tr>
			<tr>
				<td>
					Kết quả tìm kiếm: <input type="text" name="decrease" disabled="disabled" value="<?php echo $decrease;?>">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>