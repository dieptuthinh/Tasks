<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
        $pheptinh= $_REQUEST["pheptinh"];
        $sothunhat = $_REQUEST["sothunhat"];
        $sothunhi = $_REQUEST["sothunhi"];
        if($pheptinh=='Cộng')
            {
                $ketqua = $sothunhat+$sothunhi;
            }
        elseif($pheptinh=='Trừ')
        {
            $ketqua = $sothunhat - $sothunhi;
        }
        elseif($pheptinh == 'Nhân')
        {
            $ketqua = $sothunhat * $sothunhi;
        }
        else{
            $ketqua = $sothunhat / $sothunhi;
        }

            
?>
   
        <table style='text-align:left'  >
            <tr >
                <th colspan="2" align=center style='color:blue'>PHÉP TÍNH TRÊN HAI SỐ</th>
            </tr>
            <tr style='color:red;'>
                <th>Chọn phép tính: <?php echo $pheptinh ; ?> </th> 
                    
            </tr>
            <tr>
                <th style='color:blue;'>Số thứ nhất:</th>
                <th><input type="text" name="sothunhat" value="<?php echo $sothunhat ; ?>" ></th>
            </tr>
            <tr>
                <th style='color:blue;'>Số thứ nhì:</th>
                <th><input type="text" name="sothunhi"  value="<?php echo $sothunhi ; ?>"></th>
            </tr>
            <tr>
                <th style='color:blue;'>Kết quả:</th>
                <th><input type="text" name="ketqua"  value="<?php echo $ketqua ?>"></th>
            </tr>
            <tr>
                <th></th>
                <th> <a href="javascript:window.history.back(-1);">Quay lại</a></th>
            </tr>
           
        </table>
        
</body>
</html>