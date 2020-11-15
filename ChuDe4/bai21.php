	<!DOCTYPE html>
	<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>am lich</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
	<?php 

	if(isset($_POST['dl']))  

	    $dl = trim($_POST['dl']); 

	else $dl=0;

	if(isset($_POST['Chuyen']))

        if (is_numeric($dl))  
        {
        	$mang_can = array("Qúy","Giap","ất","Bính","Đinh","Mậu","Kỷ","Canh","Tân","Nhâm");
        	$mang_chi = array("Hợi","Tý","Sửu","Dần","Mão","Thìn","Tỵ","Ngọ","Mùi","Thân","Dậu","Tuất");
        	$mang_hinh = array("img/hoi.jpg","img/chuot.jpg","img/suu.jpg","img/dan.jpg","img/meo.jpg","img/thin.jpg","img/ty.jpg","img/ngo.jpg","img/mui.jpg","img/than.jpg","img/dau.jpg","img/tuat.jpg");
        	$nam = $dl -3;
        	$can = $nam %10;
        	$chi = $nam %12;
        	$hinh = $mang_hinh[$chi];
        	$nam_al = $mang_can[$can]." ".$mang_chi[$chi];
        	$hinh_anh = "<img src='$hinh'>";
        }
	     
        else 
        {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
               $nam_al ="";
               $hinh_anh="";
        }

	else {
		$nam_al ="";
		$hinh_anh="";
	}


?>
		 <form align='center' action="" method="post">

    <table border="0">

    <tr bgcolor="yellow">

        <th colspan="2" align="center"><h3><font color="red">TÍNH NĂM ÂM LỊCH</font></h3></th>

    </tr>

    <tr>
    	<td>Năm dương lịch</td>
    	<td></td>
        <td>
        	Năm âm lịch
        </td>

    </tr>

    <tr>
    	<td><input type="text" name="dl" value="<?php  echo $dl; ?> "/></td>
    	 <td ><input type="submit" value="=>" name="Chuyen" /></td>

        <td><input type="text" name="nam_al" disabled="disabled" value="<?php  echo $nam_al;?> "/></td>

    </tr>
    <tr>
    	<td></td>
    	<td>
    		<?php echo $hinh_anh;?>
    	</td>
    	<td></td>
    </tr>


</table>

</form>
    </div>

</body>
</html>