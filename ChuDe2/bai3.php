<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bai 3</title>
	<link rel="stylesheet" href="">
	<style>
		.style-so{
			margin: 0 auto;
			border: 1px solid #333;
			background-color: gray;
		}
	</style>
</head>
<body>
		 <!-- Tính tổng của 1 con số -->
		 <div class="style-so">
		 	<?php
		 			function sumDigit($number){
								$sum = 0;
								while($number > 0){
									$digit = $number % 10;
									$sum = $sum + $digit;
									$number = ($number - $digit) / 10;
								}
								return $sum;
							}

							$result = sumDigit(198);
							echo $result
		 	 ?>
		 </div>
		  <div class="style-so">
		 	<?php
		 			function TinhN($number){
								$dem = 0;
								while($number > 0){
									$digit = $number % 10;
									$dem = $dem + 1;
									$number = ($number - $digit) / 10;
								}
								return $dem;
							}
							$auto = rand(1,1000);

							$result = TinhN($auto);
							echo "Số n là:", $auto ,"</br>";

							echo "Co tong cộng ",$result ," Chữ số";
		 	 ?>
		 </div>
		 <!--  -->
	
</body>
</html>