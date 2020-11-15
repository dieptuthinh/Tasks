<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>In mảng N</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div>
		<?php
				function InMangN($n){
					$sum = 0;
					for($i = 0;$i < $n;$i++){
						$pt= rand(-100,100);
						$m = array("$i"=> $pt);
						echo $m["$i"],"\n";
						
						
					}


					echo "</br>","n là:", $n;
				}

				$auto = rand(1,50);

				$result = InMangN($auto);
		 ?>
	</div>
	
</body>
</html>