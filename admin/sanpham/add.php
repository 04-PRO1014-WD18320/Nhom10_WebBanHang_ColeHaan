
</header>
<style>
    .row{
        margin-left: 20px;
        margin-top: 20px;
        Font-weight: 500;
    }
</style>
<div class="row">
  <div >
    <h1>THÊM MỚI SẢN PHẨM</h1>
  </div>
  <div >
    <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data">
      <div >
        <label> Mã Danh Mục </label>

        <br>
        <select name="id_danhmuc" id="">

          <?php foreach ($listdanhmuc as $danhmuc) {
            extract($danhmuc);
            echo ' <option value="' . $id_danhmuc . '"> ' . $ten_danhmuc . '</option>';
          }
          ?>

        </select>
      </div>
      <div >
        <label>Tên sản phẩm </label> <br>
        <input type="text" name="ten_sanpham">
      </div>
      <div >
        <label> Giá </label> <br>
        <input type="text" name="gia">
      </div>
      <div >
        <label> Số lượng </label> <br>
        <input type="text" name="soluong">
      </div>
      <div >
        <label>Hình ảnh</label> <br>
        <input type="file" name="image">
      </div>
      <div >
        <label> Mô tả</label> <br>
        <textarea name="mota" id="" cols="30" rows="10"></textarea>
      </div>

      <div >
        <input  type="submit" value="THÊM MỚI" name="themmoi">
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