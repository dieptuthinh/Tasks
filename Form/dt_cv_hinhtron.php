<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Diện tích chu vi hình tròn</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

	if(isset($_POST['bankinh']))  

	    $bankinh = trim($_POST['bankinh']); 

	else $bankinh=0;

	if(isset($_POST['tinh']))

        if (is_numeric($bankinh))  
        {
        	 $dientich = pi() * pow($bankinh,2);
	       	$chuvi = 2*pi() * $bankinh;
        }
	     
        else 
        {
                echo "<font color='red'>Vui lòng nhập vào số! </font>"; 
                $dientich = "";
                	$chuvi = "";
        }

	else {
		$dientich = 0;
		$chuvi=0;}


?>
<div class="style-form">
    <form align='center' action="" method="post">

    <table border="0">

    <tr bgcolor="yellow">

        <th colspan="2" align="center"><h3><font color="red">DIỆN TÍCH và CHU VI HÌNH TRÒN</font></h3></th>

    </tr>

    <tr>
    	<td>Bán kính:</td>

        <td>
        	<input type="text" name="bankinh" value="<?php  echo $bankinh; ?> "/>
        </td>

    </tr>

    <tr><td>Diện tích:</td>

        <td><input type="text" name="dientich" disabled="disabled" value="<?php  echo round($dientich,0);?> "/></td>

    </tr>

    <tr><td>Chu vi:</td>

        <td><input type="text" name="chuvi" disabled="disabled" value="<?php echo round($chuvi,0);?> "/></td>

    </tr>

    <tr>

        <td colspan="2" align="center"><input type="submit" value="Tính" name="tinh" /></td>

    </tr>

</table>

</form>
    </div>

    
	
</body>
</html>



