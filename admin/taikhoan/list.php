<style>
.row{
    height: 20px;
    margin-left: 20px;
    margin-top: 20px;
}
.row1{
    height: 70px;
    font-weight: bold;
}
.row2{
    margin-top: 210px;
    
}
table, th, td{
border: 1px solid black;
margin: 10px;
}
table{
    width: 900px;
    height: 400px;
}
th, td{
    text-align: center;
}
</style>
<div class="row">
<h2>Danh sách tài khoản</h2>
    <div class="row1">
    <table>
        <tr>
            <th></th>
            <th>ID</th>
            <th>USER NAME</th>
            <th>PASS</th>
            <th>EMAIL</th>
            <th>ĐIỆN THOẠI</th>
            <th>ĐỊA CHỈ</th>
            <th>VAI TRÒ</th>
            <th></th>
        </tr>
        <?php
            foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);

                $suatk="index.php?act=suatk&id_user=".$id_user;
                $xoatk="index.php?act=xoatk&id_user=".$id_user;
                echo '<tr>
                        <td><input type="checkbox" name=""></td>
                        <td>'.$id_user.'</td>
                        <td>'.$user.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$email.'</td>
                        <td>'.$sdt.'</td>
                        <td>'.$diachi.'</td>
                        <td>'.$role.'</td>
                        <td>
                        <a href="' . $suatk . '"><input type="button" value="Sửa"> </a>
                        <a href="' . $xoatk . '"><input type="button" value="Xóa"></a>
                        </td>
                      </tr>';
            }
        ?>
        
    </table>

    </div>
    
</div>