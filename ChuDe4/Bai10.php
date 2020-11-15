<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Giỏ hoa</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		function tim_hoa($loaiHoa,$mangHoa){
			$n = count($mangHoa);
			$kq = 0;
			for($i=0;$i<$n;$i++){
				if(strcasecmp($loaiHoa, $mangHoa[$i]) == 0){
					$kq = 1;
				}
			}
			return $kq;
		}
		$kq =null;
		$gioHoa=null;

		if(isset($_POST['loaiHoa'])){
			$loaiHoa =$_POST['loaiHoa'];
			$mangHoa = array();
			$mangHoa = explode("--", trim($_POST['gioHoa']));
			$n =count($mangHoa);
			if(tim_hoa($loaiHoa,$mangHoa) ==1){
				$kq = "Đã có hoa $loaiHoa trong giỏ";
			}
			else
				$mangHoa[$n] = $loaiHoa;
			$gioHoa  = implode("--", $mangHoa);
		}
	?>
	<form action=""method="post">
		<table align="center">
			<tr>
				<td>
					<h1>MUA HOA</h1>
				</td>
			</tr>
			<tr>
				<td>
					Loại hoa bạn chọn: <input type="text" name="loaiHoa">
				</td>
				<td>
					<input type="submit" name="them" value="Thêm vào giỏ hoa">
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
					<p>
						Giỏ hoa bạn chọn:
					</p>
				</td>
			</tr>
			<tr>
				<td>
					 <textarea name="gioHoa" id="" cols="70" rows="4" disable>
                            <?php echo $gioHoa;  ?>
                        </textarea>
				</td>
			</tr>
			
		</table>
	</form>
</body>
</html>