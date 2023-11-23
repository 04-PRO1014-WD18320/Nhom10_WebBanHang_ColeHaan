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
    width: 500px;
    height: 150px;
}
th, td{
    text-align: center;
}
</style>
<div class="row">
<h2>Danh sách danh mục</h2>
    <div class="row1">
    <table>
        <tr>
            <th></th>
            <th>ID</th>
            <th>Tên Danh Mục</th>
            <th></th>
        </tr>
        <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);

                $suadm="index.php?act=suadm&id_danhmuc=".$id_danhmuc;
                $xoadm="index.php?act=xoadm&id_danhmuc=".$id_danhmuc;
                echo '<tr>
                        <td><input type="checkbox" name=""></td>
                        <td>'.$id_danhmuc.'</td>
                        <td>'.$ten_danhmuc.'</td>
                        <td>
                        <a href="' . $suadm . '"><input type="button" value="Sửa"> </a>
                        <a href="' . $xoadm . '"><input type="button" value="Xóa"></a>
                        </td>
                      </tr>';
            }
        ?>
        
    </table>
    <a href="index.php?act=adddm"><input type="button" value="Thêm"></a>
    </div>
    
</div>