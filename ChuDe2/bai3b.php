<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>bai 3 b</title>
	<link rel="stylesheet" href="">
</head>
<body>
	 <div class = "style-so">
		 	<?php
		 			function isPrimeNumber($n) {
						  $sum = 0;
						for ( $i = 1; $i < $n; $i++ )
						{
							if ($i % 2 == 1 ) {
									if ($i>10 && $i <100) {
										echo $i,"\n";
										$sum = $sum + $i;
										
									}

								}


						}
						echo "</br>";
						echo "n = ",$n;
						echo "</br>";
						echo "sum = ",$sum;
						
					}
					$auto = rand(1,1000);

					$result = isPrimeNumber($auto);

				
					

		 	 ?>
		 </div>
</body>
</html>