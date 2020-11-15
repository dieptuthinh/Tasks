<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kiểm tra số nguyên dương</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div>
		<?php
				function KiemTraNguyenDuong($n){
						if($n > 0)
						{
							echo "$n là số dương";
							
						}
						else{
							echo "$n là số âm";
							$m = $n * -1;
							$txt = sprintf(" chuyển thành %d",$m);
							echo $txt;
						}

					
				}
									$auto = rand(-50,50);
					$result = KiemTraNguyenDuong($auto);

			
		 ?>
	</div>
	
</body>
</html>