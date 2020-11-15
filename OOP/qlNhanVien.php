<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		Quản lí nhân viên
	</title>
	<link rel="stylesheet" href="">

	<style type="text/css" media="screen">

		
	</style>
	
</head>
<body>

	<?php
				abstract class NhanVien{
				protected $hoTen,$gioiTinh,$ngayVaoLam,$heSoLuong,$soCon;
				const luongCoBan = 500000;
				
				

				public function getHoTen(){
					return $this ->hoTen;
				}
				public function getGioiTinh(){
					return $this ->gioiTinh;
				}
				public function getNgayVaoLam(){
					return $this ->ngayVaoLam;
				}
				public function getHeSoLuong(){
					return $this ->heSoLuong; 
				}
				public function getSoCon(){
					return $this ->soCon;
				}
				public function setHoTen($hoTen){
					$this->hoTen = $hoTen;
				}
				public function setGioiTinh($gioiTinh){
					$this->gioiTinh = $gioiTinh;
				}
				public function setNgayVaoLam($ngayVaoLam){
					$this->ngayVaoLam = $ngayVaoLam;
				}
				public function setHeSoLuong($heSoLuong){
					$this->heSoLuong = $heSoLuong;
				}
				public function setSoCon($soCon){
					$this->soCon = $soCon;
				}
				public function tinhThuong(){	
						$layNgay = explode("/",$this->ngayVaoLam);						 
  						return  (date("md", date("U", mktime(0, 0, 0, $layNgay[0], $layNgay[1], $layNgay[2]))) > date("md")? ((date("Y") - $layNgay[2]) - 1): (date("Y") - $layNgay[2]))*1000000;		
				}

				abstract public function tinhTienLuong();
				abstract public function tinhTienTroCap();
			} 
			class nv_vp extends NhanVien{
				private $ngayVang;
				const donGiaPhat = 25000;
				const  dinhMucVang = 2;

				public function setNgayVang($ngayVang){
					$this->ngayVang = $ngayVang;
				}
				public function getNgayVang(){
					return $this->ngayVang;
				}
				public function tinhTienPhat(){
					if ($this->ngayVang > self::dinhMucVang){
						return ($this->ngayVang - self::dinhMucVang) * self::donGiaPhat;
					}
					return 0;
				}
				public function tinhTienTroCap(){
					if($this->gioiTinh ==1){
						return 200000*$this->soCon*1.5;
					}
					else
						return 200000*$this->soCon;
				}
				public function tinhTienLuong(){
					return (NhanVien::luongCoBan * $this->heSoLuong)- $this->tinhTienPhat();
				}
			

			}
		class nv_sx extends NhanVien{
			private $soSanPham;
			const dinhMucSanPham = 5;
			const donGiaSanPham = 25000;
			public function getSoSanPham(){
				return $this->soSanPham;
			}
			public function setSoSanPham($soSanPham){
				$this->soSanPham =$soSanPham;
			}
			public function tinhThuong(){
				if($this->soSanPham > self::dinhMucSanPham){
					return ($this->soSanPham - self::dinhMucSanPham)*0.03*self::donGiaSanPham;
				}
				else
					return 0;
			}
			public function tinhTienTroCap(){
				return $this->soCon*120000;
			}
			public function tinhTienLuong(){
				return ($this->soSanPham*self::donGiaSanPham)+$this->tinhThuong();
			}
		}
		
		if(isset($_POST['tinh']))
		{
			$hoTen = $_POST['hoTen'];
			if(isset($_POST['loaiNhanVien']) && ($_POST['loaiNhanVien'])=="vp"){
				$nhanVien = new nv_vp();
				
				$nhanVien -> setGioiTinh($_POST['gioiTinh']);
				$nhanVien->setSoCon($_POST['soCon']);
				$nhanVien ->setHeSoLuong($_POST['heSoLuong']);
				$nhanVien->setNgayVang($_POST['ngayVang']);
				$nhanVien->setNgayVaoLam($_POST['ngayVaoLam']);
		

				$tienThuong = $nhanVien->tinhThuong();
				$tienPhat = $nhanVien->tinhTienPhat();
				$tienLuong = $nhanVien->tinhTienLuong();
				$troCap = $nhanVien->tinhTienTroCap();
				$thucLinh =$tienLuong + $troCap+$tienThuong ;
				$tienLuong =number_format($tienLuong,0,',','.');
				$troCap =number_format($troCap,0,',','.');
				$thucLinh =number_format($thucLinh,0,',','.');
				$tienThuong = number_format($tienThuong,0,',','.');
			}
				if(isset($_POST['loaiNhanVien']) && ($_POST['loaiNhanVien'])=="sx"){
				$nhanVien = new nv_sx();
				
				$nhanVien ->setSoSanPham($_POST['sanPham']);
				$nhanVien->setSoCon($_POST['soCon']);
		

				$tienThuong = $nhanVien->tinhThuong();
				$tienLuong = $nhanVien->tinhTienLuong();
				$troCap = $nhanVien->tinhTienTroCap();
				$thucLinh =$tienLuong + $troCap +$tienThuong ;
				$tienLuong =number_format($tienLuong,0,',','.');
				$troCap =number_format($troCap,0,',','.');
				$thucLinh =number_format($thucLinh,0,',','.');
				$tienThuong = number_format($tienThuong,0,',','.');
				$tienPhat = 0;
			}
		}
		else
		{
			$tienThuong = 0;
			$tienPhat = 0;
			$tienLuong = 0;
			$troCap = 0;
			$thucLinh =0;
		}

	?>

	<div>
		<form action="" method ="post">
			<table border="1">
				<tr >
					<td colspan="3" align="center" >
						<h1 >QUẢN LÝ NHÂN VIÊN</h1>
					</td>
				</tr>
				<tr>
					<td>Họ và tên</td>
					<td>
						<input type="text" name="hoTen" value="<?php if(isset($_POST['hoTen'])) echo $_POST['hoTen']; ?>">
					</td>
					<td>Số con</td>
					<td>
						<input type="text" name="soCon" value="<?php if(isset($_POST['soCon'])) echo $_POST['soCon']; ?>">
					</td>
				</tr>
				<tr>
					<td>Ngày sinh</td>
					<td>
						<input type="date" name="ngaySinh" value="<?php if(isset($_POST['ngaySinh'])) echo $_POST['ngaySinh']; ?>">
					</td>
					<td>Ngày vào làm</td>
					<td>
						<input type="text" name="ngayVaoLam"value="<?php if(isset($_POST['ngayVaoLam'])) echo $_POST['ngayVaoLam']; ?>">
					</td>
				</tr>
				<tr>
					<td>Giới tính</td>
					<td>	
						<input type="radio" name="gioiTinh" value="0"<?php if(isset($_POST['gioiTinh'])&&($_POST['gioiTinh'])=="0") echo 'checked="checked"'?>>nam
						<input type="radio" name="gioiTinh" value="1"<?php if(isset($_POST['gioiTinh'])&&($_POST['gioiTinh'])=="1") echo 'checked="checked"'?>>nu
					</td>
					<td>Hệ số lương</td>
					<td>
						<input type="text" name="heSoLuong"value="<?php if(isset($_POST['heSoLuong'])) echo $_POST['heSoLuong']; ?>">
					</td>
				</tr>
				<tr>
					<td>Loại nhân viên</td>
					<td>
						<input type="radio" name="loaiNhanVien" value="vp"<?php if(isset($_POST['loaiNhanVien'])&&($_POST['loaiNhanVien'])=="vp") echo 'checked="checked"'?>>Văn Phòng
					</td>
					<td><input type="radio" name="loaiNhanVien" value="sx"<?php if(isset($_POST['loaiNhanVien'])&&($_POST['loaiNhanVien'])=="sx") echo 'checked="checked"'?>>Sản Xuất</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td>Số ngày vắng:<input type="text" name="ngayVang" value="<?php if(isset($_POST['ngayVang'])) echo $_POST['ngayVang']; ?>"></td>
					<td>Số sản phẩm:<input type="text" name="sanPham" value="<?php if(isset($_POST['sanPham'])) echo $_POST['sanPham']; ?>"></td>
					<td></td>
				</tr>
				<tr>
					<td><input type="submit" name="tinh" value="Tính lương"></td>
				</tr>
				<tr>
					<td>Tiền lương</td>
					<td>
						<input type="text" name="tienLuong"disabled="disabled" value="<?php echo $tienLuong;?>">
					</td>
					<td>Trợ cấp</td>
					<td>
						<input type="text" name="troCap"disabled="disabled" value="<?php echo $troCap;?>">
					</td>
				</tr>
				<tr>
					<td>Tiền thưởng</td>
					<td>
						<input type="text" name="tienThuong"disabled="disabled" value="<?php echo $tienThuong;?>">
					</td>
					<td>Tiền phạt</td>
					<td>
						<input type="text" name="tienPhat"disabled="disabled" value="<?php echo $tienPhat;?>">
					</td>
				</tr>
				<tr >
					<td align="center">Thực lĩnh:<input type="text" name="thucLinh"disabled="disabled" value="<?php echo $thucLinh;?>"></td>
				</tr>
			</table>

			
		</form>
	</div>
	
</body>
</html>