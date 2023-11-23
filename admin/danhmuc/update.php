<?php

// vì phần danh mục sẽ trả về mảng nên dùng is_array()

if (is_array($dm)) {
    extract($dm);
}

?>
</header>
<div >
    <div >
        <h1>CẬP NHẬP LOẠI HÀNG HÓA</h1>
    </div>
    <div >
        <form action="index.php?act=updatedm" method="POST">

            <div >
                <label>Tên Danh Mục </label> <br>
                <input type="text" name="ten_danhmuc" placeholder="nhập vào tên"
                    value="<?php if (isset($ten_danhmuc) && ($ten_danhmuc != "")) {
                        echo $ten_danhmuc;
                    } ?>">
            </div>
            <div>
                <input type="hidden" name="id_danhmuc" value="<?php if (isset($id_danhmuc) && ($id_danhmuc > 0)) {
                    echo $id_danhmuc;
                } ?>">
                <!-- lưu lại ib không hiện trên from-->
                <input type="submit" value="Cập Nhập" name="capnhap">
                <input type="reset" value="NHẬP LẠI">

                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </form>
    </div>
</div>

<!-- END HEADER -->


</div