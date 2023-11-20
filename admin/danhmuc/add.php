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
<h2>Thêm mới danh mục</h2>
    <div class="row1">
    <form action="index.php?act=adddm" method = "post" enctype="multipart/form-data">
        <div class="row1">
            Tên danh mục <br>
            <input type="text" name="ten_danhmuc">
        </div>
        
        <div class="row2">
            <input type="submit" name="themdm" value="Thêm mới">
            <input type="reset" value="Nhập lại">
            <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
        </div>
        <?php
        if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
        ?>

    </form>
    </div>
    
</div>