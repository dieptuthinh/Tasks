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
			function Search($array,$number){
				$n = count($array);
				$result = -1;
				for($i = 0 ;$i<$n;$i++){
					if($array[$i] == $number){
						$result = $i;
						break;
					}
				}
				return $result;
			}
			$newArray=null;
			$string =null;
			if(isset($_POST['array']) && isset($_POST['number'])){
				$oldArray = trim($_POST['array']);
				$number = $_POST['number'];
				$array = explode(",", $oldArray);
				$result = Search($array,$number);
				$newArray =implode(",", $array);
				if($result <> -1){
					$result =$result+1;
					$string = "Tìm thấy ".$number." tại ví trí ".$result;
				}
				else{
					$string ="Không tìm thấy ".$number." 	trong mảng";
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
					Nhập mảng: <input type="text" name="array" echo >
				</td>
			</tr>
			<tr>
				<td>
					Nhập số cần tìm: <input type="text" name="number">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit"value="Tìm kiếm">
				</td>
			</tr>
			<tr>
				<td>
					Mảng: <input type="text" disabled="disabled" value="<?php echo $newArray;?>">
				</td>
			</tr>
			<tr>
				<td>
					Kết quả tìm kiếm: <input type="text" name="string" disabled="disabled" value="<?php echo $string;?>">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>