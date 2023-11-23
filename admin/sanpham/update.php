<?php

// vì phần danh mục sẽ trả về mảng nên dùng is_array()

if (is_array($sanpham)) {
  extract($sanpham);
}
$imagepath = "../upload/" . $image;
if (is_file($imagepath)) {
  $image = "<img src='" . $imagepath . "' height='80'>";
} else {
  $image = "no phôt";
}

?>
<style>
    .row{
        margin-left: 20px;
        margin-top: 20px;
        Font-weight: 500;
    }
</style>
</header>
<div class="row">
  <div >
    <h1>CẬP NHẬP SẢN PHẨM</h1>
  </div>
  <div >
    <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
      <div >
        <label> Mã sản phẩm </label> <br>
        <select name="id_danhmuc" id="">
          <option value="0" selected>Tất cả</option>
          <?php foreach ($listdanhmuc as $value) {
            
            if ($id_danhmuc == $value['id_danhmuc']) $s="selected";

              
            else
              $s = "";

            echo ' <option value="' . $value['id_danhmuc']. '"  ' . $s . '> ' . $value['ten_danhmuc'] . '</option>';


          }
          ?>

        </select>
      </div>
      <div >
        <label>Tên sản phẩm </label> <br>
        <input type="text" name="ten_sanpham"  value="<?php echo $ten_sanpham; ?>">
      </div>
      <div >
        <label> Giá </label> <br>
        <input type="text" name="gia"  value="<?= $gia ?>">
      </div>
      <div >
        <label> Số lượng </label> <br>
        <input type="text" name="soluong">
      </div>
      <div >
        <label>Hình ảnh</label> <br>
        <input type="file" name="image">
        <?= $image ?>
      </div>
      <div >
        <label> Mô tả</label> <br>
        <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
      </div>

      <div >
        <input type="hidden" name="id_sanpham" value="<?= $id_sanpham ?>">
        <input  type="submit" value="Cập Nhập" name="capnhap">
        <input  type="reset" value="NHẬP LẠI">

        <a href="index.php?act=listsp"><input  type="button" value="DANH SÁCH"></a>
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