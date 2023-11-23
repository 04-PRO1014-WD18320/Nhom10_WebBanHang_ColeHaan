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
    width: auto;
    height: auto;
}
th, td{
    text-align: center;
}
</style>
<div >
    <div >
        <h1>Danh Sách Sản Phẩm</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" value="" name="kyw">
        <select name="id_danhmuc" id="">
            <option value="0" selected>Tất cả</option>
            <?php foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                echo ' <option value="' . $id_danhmuc . '"> ' . $ten_danhmuc . '</option>';
            }
            ?>

        </select>
        <input type="submit" value="Tìm" name="listok">
    </form>
    <div >
        <form action="#" method="POST">
            <div >
                <table>
                    <tr>
                        <th></th>
                        <th>ID DM</th>
                        <th>ID SẢN PHẨM</th>
                        <th>TÊN SẢN PHẨM</th>
                        <th>HÌNH</th>
                        <th>GIÁ</th>
                        <th>SỐ LƯỢNG</th>
                        <th>MÔ TẢ</th>
                        <th></th>
                    </tr>
                    <?php


                    foreach ($listsanpham as $sanpham) {
                        extract($sanpham);
                        $suasp = "index.php?act=suasp&id_sanpham=" . $id_sanpham;
                        $xoasp = "index.php?act=xoasp&id_sanpham=" . $id_sanpham;
                        $imagepath = "../upload/" . $image;
                        if (is_file($imagepath)) {
                            $image = "<img src='" . $imagepath . "' height='80'>";
                        } else {
                            $image = "no ảnh";
                        }
                        echo '
                        <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $id_danhmuc . '</td>
                        <td>' . $id_sanpham . '</td>
                        <td>' . $ten_sanpham . '</td>
                        <td>' . $image . '</td>
                        <td>' . $gia . '</td>
                        <td>' . $soluong . '</td>
                        <td>' . $mota . '</td>
                        <td>
                        <a href="' . $suasp . '"><input type="button" value="Sửa"> </a>
                        <a href="' . $xoasp . '"><input type="button" value="Xóa"></a>
                        </td>
 
                          
                       </tr>
                        
                        ';


                    }

                    ?>



                </table>
            </div>
            <div>
                <a href="index.php?act=addsp"> <input type="button" value="NHẬP THÊM"></a>
            </div>
        </form>
    </div>
</div>
