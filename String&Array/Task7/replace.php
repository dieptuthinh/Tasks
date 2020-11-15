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
			function replace($array,$oldNumber,$newNumber){
				$n = count($array);
				for($i = 0 ;$i<$n;$i++){
					if($array[$i] == $oldNumber){
						$array[$i] = $newNumber;
						break;
					}
				}
				return $array;
			}
			$oldArray=null;
			$newArray =null;
			$array = null;
			$oldNumber = null;
			$newNumber = null;
			if(isset($_POST['array']) && isset($_POST['oldNumber']) && isset($_POST['newNumber'])){
				$secondOldArray = trim($_POST['array']);
				$oldNumber = $_POST['oldNumber'];
				$newNumber = $_POST['newNumber'];
				$array = explode(",", $secondOldArray);
				$oldArray = implode(" ", $array);
				$result = replace($array,$oldNumber,$newNumber);

				$newArray = implode(" ", $result);
		
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
					Nhập mảng: <input type="text" name="array" >
				</td>
			</tr>
			<tr>
				<td>
					Giá trị cần thay thế: <input type="text" name="oldNumber" value="<?php echo $oldNumber;?>">
				</td>
			</tr>
			<tr>
				<td>
					Giá trị thay thế: <input type="text" name="newNumber" value="<?php echo $newNumber;?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Thay thế">
				</td>
			</tr>
			<tr>
				<td>
					Mảng cũ: <input type="text" disabled="disabled" value="<?php echo $oldArray;?>">
				</td>
			</tr>
			<tr>
				<td>
					Mảng mới: <input type="text"  disabled="disabled" value="<?php echo $newArray;?>">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>