<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <div style='position:relative; background-color:white; width:150px;top:10px;right:-20px;'>
            Enter your information 
        </div>
    <form action="config.php" Method="POST">
        
        <table style='border:1px solid black; '>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <th>Họ tên:</th>
                <th><input type="text" name="txthoten" id=""> </th>
            </tr>
            <tr>
                <th>Địa chỉ:</th>
                <th><input type="text" name="txtdiachi" id=""></th>
            </tr>
            <tr>
                <th>Số diện thoại:</th>
                <th><input type="text" name="txtsdt" id=""></th>
            </tr>
            <tr>
                <th>Giới tính:</th>
                <th><input type="radio" name="gioitinh" id="" checked value="Nam"> Nam
                    <input type="radio" name="gioitinh" id="" value="Nữ"> Nữ
                 </th>
            </tr>
            <tr>
                <th>Quốc tịch:</th>
                <th>
                <select name="qt" >
                  
                <option value="vn">
                        Việt Nam
                </option>
                <option value="cn">
                         Trung Quốc
                 </option>
                 <option value="kr">
                         Hàn Quốc
                 </option>
               
                 </select>
                </th>
            </tr>
            <tr>
                <th>Các môn đã học:</th>
                <th><input type="checkbox" name="monhoc[]" value="PHP & MySQL"> PHP & MySQL
                    <input type="checkbox" name="monhoc[]" value="C#"> C#
                    <input type="checkbox" name="monhoc[]" value="XML"> XML
                     <input type="checkbox" name="monhoc[]" value="Python"> Python
                </th>
            </tr>
            <tr>
                <th>Ghi chú:</th>
                <th><textarea name="comments" id="" cols="30" rows="10"></textarea></th>
            </tr>
            <tr>
                <th> </th>
                <th><input  type="submit" value="Gửi">
                 <input  type="reset" value="Hủy"></th>
            </tr>
     
           
        </table>
    </form>
</body>
</html>