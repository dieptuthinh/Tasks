<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tính tiền điện</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

	if(isset($_POST['chisocu']))  

	    $chisocu=trim($_POST['chisocu']); 

	else $chisocu=0;

	if(isset($_POST['chisomoi']))
		$chisomoi = trim($_POST['chisomoi']);
	else $chisomoi = 0;

	if(isset($_POST['dongia']))
		$dongia = trim($_POST['dongia']);
	else $dongia = 2000;

	if(isset($_POST['tinh']))

        if (is_numeric($chisocu) && is_numeric($chisomoi) && is_numeric($dongia))  

	       $sotienthanhtoan=($chisomoi - $chisocu)*$dongia;

        else {

                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 

                $sotienthanhtoan="";

            }

	else $sotienthanhtoan=0;

?>

	<div class="style-form">
    <form align='center' action="" method="post">

    <table border="0">

    <tr bgcolor="yellow">

        <th colspan="2" align="center"><h3><font color="red">Thanh toán tiền điện</font></h3></th>

    </tr>

    <tr><td>Chủ hộ:</td>

        <td><input type="text" name="chuho" value="Fanta"/></td>

    </tr>

    <tr><td>Chỉ số cũ:</td>

        <td><input type="text" name="chisocu" value="<?php  echo $chisocu;?> "/></td><td>(Kw)</td>

    </tr>

    <tr><td>Chỉ số mới:</td>

        <td><input type="text" name="chisomoi" value="<?php  echo $chisomoi;?> "/></td><td>(Kw)</td>

    </tr>
     <tr>
        	<td>Đơn giá:</td>

        <td><input type="text" name="dongia" value="<?php  echo $dongia;?> "/></td><td>(Vnd)</td>

    </tr>
     <tr>
        	<td>Số tiền thanh toán:</td>

        <td><input type="text" name="sotienthanhtoan" disabled="disabled" value="<?php  echo $sotienthanhtoan;?> "/></td>
        	<td>(Vnd)</td>
    </tr>


    <tr>

        <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>

    </tr>

</table>

</form>
    </div>
</body>
</html>