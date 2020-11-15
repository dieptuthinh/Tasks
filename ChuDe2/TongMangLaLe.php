<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tổng mảng lẻ</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div>
		<?php
		     function InMangN($n){
		     		echo "Mang được lấy ngẫu nhiên từ 0 đến n-1 là:</br>";
					$sum = 0;
					for($i = 0;$i < $n;$i++){
						$pt= rand(-100,100);
						$m = array("$i"=> $pt);

						echo $m["$i"],"\n";
						if($i % 2 == 1)
						{
							$sum = $sum + $m["$i"];
							
						}

						
						
					}
					echo "</br>Tổng các phần tử ở vị trí lẻ =", $sum;


					echo "</br>","n ngẫu nhiên là:", $n;
				}

				$auto = rand(1,50);

				$result = InMangN($auto);
		 ?>
	</div>
	
</body>
</html>