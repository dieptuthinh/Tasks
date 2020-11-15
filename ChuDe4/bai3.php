<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tìm năm nhuận</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
			function nam_nhuan($nam){
				if($nam %400 == 0 || $nam % 4 == 0 && $nam % 100 <>0)
				{
					return 1;
				}
				else 
					return 0;
			}
		
			
			$nam =null;
			$kq=null;
			$nam2=null;
		$kq2=null;	
		if(isset($_POST['tim']))
		{
			if(isset($_POST['nam']))
			{
				$nam = $_POST['nam'];
				if($nam > 2000)
				{
					$kq = "";
					foreach (range(2000, $nam) as $year) {
						if(nam_nhuan($year)==1)
							$kq = $kq. $year." ";
					}
					if($kq != ""){
						$kq = $kq." là năm nhuận";
					}
					else{
						$kq = "Không có năm nhuận";
					}
				}


			}
			if(isset($_POST['nam2']))
			{
				$nam2 = $_POST['nam2'];
				if($nam2 < 2000)
				{
					$kq2 = "";
					foreach (range(2000, $nam2) as $year) {
						if(nam_nhuan($year)==1)
							$kq2 = $kq2. $year." ";
					}
					if($kq2 != ""){
						$kq2 = $kq2." là năm nhuận";
					}
					else{
						$kq2 = "Không có năm nhuận";
					}
				}


			}

		}
		
	
			
	?>

	<form action="" method="post">
		<div align="center"><h4>Năm nhập vào lớn hơn năm 2000</h4></div>
		<table align="center"	>
			<tr >
				<td><h1>TÌM NĂM NHUẬN</h1></td>
			</tr>
			<tr>
				<td>
					Năm: <input type="text" name="nam" value="<?php echo $nam;?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>
						<p style="background: #FFFFCC">
							<?php
								echo $kq;
							?>
						</p>
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="tim" value="Tìm năm nhuận">
				</td>

			</tr>
		</table>
		
	</form>

	<form action="" method="post">
		<div align="center"><h4>Năm nhập vào bé hơn năm 2000</h4></div>
		<table align="center"	>
			<tr >
				<td><h1>TÌM NĂM NHUẬN</h1></td>
			</tr>
			<tr>
				<td>
					Năm: <input type="text" name="nam2" value="<?php echo $nam2;?>">
				</td>
			</tr>
			<tr>
				<td>
					<label>
						<p style="background: #FFFFCC">
							<?php
								echo $kq2;
							?>
						</p>
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="tim" value="Tìm năm nhuận">
				</td>

			</tr>
		</table>
		
	</form>

</body>
</html>