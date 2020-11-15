<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kết quả thi</title>
	<link rel="stylesheet" href="">
</head>
<body>
		<?php 

	if(isset($_POST['toan']))  

	    $toan=trim($_POST['toan']); 

	else $toan=0;

	if(isset($_POST['ly'])) 

	    $ly=trim($_POST['ly']); 

	else $ly=0;

	if(isset($_POST['hoa'])) 

	    $hoa=trim($_POST['hoa']); 

	else $hoa=0;

	if(isset($_POST['diemchuan'])) 

	    $diemchuan=trim($_POST['diemchuan']); 

	else $diemchuan=20;




	if(isset($_POST['xem']))

        if (is_numeric($toan) && is_numeric($ly) && is_numeric($hoa))  
    	{

	       $tongdiem=$toan + $ly + $hoa;
	       if($tongdiem >= $diemchuan){
	       	$kqthi = "Đậu";
	       }
	       else{
	       	$kqthi = "Rớt";
	       }
    	}

        else {

                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 

                $tongdiem="";

            }

	else {
		$tongdiem=0;
		$kqthi = "";
	}

?>



	<div class="style-form">
    <form align='center' action="" method="post">

    <table border="0">

    <tr bgcolor="yellow">

        <th colspan="2" align="center"><h3><font color="red">KẾT QUẢ THI ĐẠI HỌC</font></h3></th>

    </tr>

    <tr><td>Toán:</td>

        <td><input type="text" name="toan" value="<?php  echo $toan;?> "/></td>

    </tr>

    <tr><td>Lý:</td>

       <td><input type="text" name="ly" value="<?php  echo $ly;?> "/></td>

    </tr>

    <tr><td>Hóa:</td>

        <td><input type="text" name="hoa" value="<?php  echo $hoa;?> "/></td>

    </tr>
     <tr>
     	<td>Điểm chuẩn:</td>

        <td><input type="text" name="diemchuan" value="<?php  echo $diemchuan;?> "/></td>

    </tr>
      <tr>
     	<td>Tổng điểm:</td>

        <td><input type="text" name="tongdiem" disabled="disabled" value="<?php  echo $tongdiem;?> "/></td>

    </tr>
    <tr>
     	<td>Kết quả thi:</td>

        <td><input type="text" name="kqthi" disabled="disabled" value="<?php  echo $kqthi;?> "/></td>

    </tr>

    <tr>

        <td colspan="2" align="center"><input type="submit" value="Xem kết quả" name="xem" /></td>

    </tr>

</table>

</form>
    </div>
</body>
</html>