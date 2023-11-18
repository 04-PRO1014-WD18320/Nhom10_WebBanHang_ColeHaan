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
</style>
<div class="row">
<h2>Thêm mới sản phẩm</h2>
    <div class="row1">
    <form action="index.php?act=addsp" method = "post" enctype="multipart/form-data">
        <div class="row1">
            Danh muc <br>
            <select name="id_danhmuc">
                <?php
                  //  foreach ($listdanhmuc as $danhmuc) {
                    //    extract($danhmuc);
                    //    echo '<option value='".$id_danhmuc."'>'.$ten_danhmuc.'</option>';
                   // }
                ?>
                
            </select>
        </div>
        <div class="row1">
            Tên sản phẩm <br>
            <input type="text" name="ten_sanpham">
        </div>
        <div class="row1">
            Giá <br>
            <input type="text" name="gia">
        </div>
        <div class="row1">
            Hình<br>
            <input type="file" name="image">
        </div>
        <div class="row1">
            Số lượng<br>
            <input type="text" name="soluong">
        </div>
        <div class="row1">
            Mô tả<br>
            <textarea name="mota"cols="30" rows="10"></textarea>
        </div>
        <div class="row2">
            <input type="submit" name="them" value="Thêm mới">
            <input type="reset" value="Nhập lại">
            <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
        </div>
        <?php
        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>

    </form>
    </div>
    
</div>