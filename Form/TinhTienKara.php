<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tính tiền karaoke</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

	if(isset($_POST['timestart']))  

	    $timestart=trim($_POST['timestart']); 

	else $timestart=0;

	if(isset($_POST['timestop'])) 

	    $timestop=trim($_POST['timestop']); 

		else $timestop=0;

	if(isset($_POST['tinh']))

        if (is_numeric($timestart) && is_numeric($timestop))  
	       {
	       		if ($timestart <10 || $timestop<10) {
				       		echo "giờ nghĩ";
				       		# code...
			       	}
			    else
			    	if($timestart < $timestop)
			       	{
			       		if($timestart >=10 && $timestop > 10 && $timestart <24 && $timestop <=24)
			       		{
			       			if ($timestop <= 17)
			       			 {
			       				$money = ($timestop - $timestart) * 20000;
			       			}
			       			else
			       				if($timestart >= 17)
				       			{
				       				$money = ($timestop - $timestart) * 45000;
				       			}
				       		else
				       		{
				       			$t1 = (17 - $timestart)*20000;
				       			$t2 = ($timestop -17)*45000;
				       			$money = $t1 + $t2;
				       		}
				      
			       		}
	       			}
	       			else{
	       				echo "giờ kết thúc phải lớn hơn giờ bắt đầu";
	       				$money = 0;
	       			}

	       }

        else {

                echo "<font color='red'>Vui lòng nhập vào số! </font>";
                $money= 0;

            }

	else $money=0;

?>
	<div class="style-form">
    <form align='center' action="" method="post">

    <table border="0">

    <tr bgcolor="yellow">

        <th colspan="2" align="center"><h3><font color="red">TÍNH TIỀN KARAOKE</font></h3></th>

    </tr>

    <tr><td>Giờ bắt đầu:</td>

        <td><input type="text" name="timestart" value="<?php  echo $timestart;?> "/></td>

    </tr>

    <tr><td>Giờ kết thúc:</td>

        <td><input type="text" name="timestop" value="<?php  echo $timestop;?> "/></td>

    </tr>

    <tr><td>Tiền thanh toán:</td>

        <td><input type="text" name="money" disabled="disabled" value="<?php  echo $money;?> "/></td>

    </tr>

    <tr>

        <td colspan="2" align="center"><input type="submit" value="Tính tiền" name="tinh" /></td>

    </tr>

</table>

</form>
    </div>
	
</body>
</html>