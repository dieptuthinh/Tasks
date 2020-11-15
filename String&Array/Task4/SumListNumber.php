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
		if(isset($_POST['lNumbers'])){
			$lNumbers = $_POST['lNumbers'];
			$array = explode(",", $lNumbers);
			$n = count($array);
			$sum = 0;
			for($i = 0; $i<$n; $i++){
				$sum=$sum + $array[$i];
			}
			$fb = fopen("data.txt", 'w+');
			fwrite($fb, $lNumbers);
			fclose($fb);
		}else{
            $lNumbers = 0;
        }
		
	?>
	<form align="center"action="" method="post">
		<h1>Sum list of numbers</h1>
		<table align="center">
			<tr>
				<td>Nhập dãy số: <input type="text" name ="lNumbers" value="<?php echo $lNumbers?>"></td>
			</tr>
			<tr>
				<td><input type="submit" value="caculate" name="tinh"></td>
			</tr>
			<tr>
				<td>Tổng dãy số:<input type="text" name="sum" disabled="disabled" style="background: blue;" value="<?php echo $sum;?>"></td>
			</tr>

		</table>
	</form>
	
</body>
</html>