<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>bai 1</title>
	<link rel="stylesheet" href="">
	<style>
		.style-so{
			margin: 0 auto;
			border: 1px solid #333;
			max-width: 1000px;
			max-height: 1000px;
			background-color: gray;
			font-size: 40px;
		}
		.a{
			color: red;
			display: flex;
			width: 1000px;
			margin: 0 auto;
		}
		.b{


			width: 100px;
			border: 1px solid #000;
			background-color: blue;
			color: #fff;
			margin-right: 10px;


		}

	</style>
</head>
<body>
<!-- Bai 1 -->
	<div class="style-so" >
		<?php
				echo "Lấy ngẫu nhiên các số chẵn từ 1 đến 100: </br>";
				$n = rand(1,100);
				echo " Gía trị của n là $n </br>";
				for ( $i = 1; $i < $n; $i++ )
				if ($i % 2 == 0 ) {
					echo $i, "\n";
				}
		 ?>
		 	
		 </div>
	<div class="style-so" >
		<?php
				echo "In đậm những số lẻ: </br>";
				$n = rand(1,100);
				echo " Gía trị của n là $n </br>";
				for ( $i = 1; $i < $n; $i++ )
				if ($i % 2 == 1 ) {
					echo"<b> $i </b>" , "\n";
				}
				else
					echo $i,"\n";
		 ?>
		 	
		 </div>
		 <!-- Bai 2 -->
		<?php
				echo "<h1 style='margin-left:400px'>Bảng cữu chương:</h1> </br>";
				$i = 2;
				$j = 10;
				echo "<div class='a'>";
				for ( $i; $i < $j; $i++ )
				{
						echo "<div class='b'>";
					for($j=1;$j<=10;$j++)
					{
						echo $i,"x",$j,"=", $i * $j,"</br>";
					}
					echo "</br>";
					echo "</div>";
				}
				echo "</div>";
		 ?>
		 <!-- Bai 3 -->
		<div class="style-so" >
		<?php
				echo "Kiểm tra số n có phải là số nguyên tố: </br>";
				$n = rand(1,100);
				if($n < 2){
					echo $n,": No No";
				}
				$count = 0;
				for ( $i = 2; $i < sqrt($n); $i++ )
				{
					if ($n % $i == 0) {
					$count++;
				}
			}
			if ($count == 0 ) {
					echo $n,":là số nguyên tố";
				}
				else{
					echo $n,":không phải là số nguyên tố";
				}	
				


		 ?>
		 	
		 </div>

		 	<!--  -->

	

	
</body>
</html>