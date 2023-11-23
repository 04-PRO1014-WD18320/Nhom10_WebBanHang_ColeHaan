<div class="banner">
    <img src="view/image/banner.png" alt="" srcset="">
    </div>
    <div class="tieude">
        <h2>Sản Phẩm Nổi Bật</h2>
    </div>
<div class="sp">
<?php
$i=0;
foreach ($spnew as $sanpham) {
    extract($sanpham);
    $image = $imagepath.$image;
    if(($i==1)||($i==3) || ($i==5)){
        $mr = "";
    }else{
        $mr = "mr";
    }
    echo '<div class="item1 '.$mr.'">
    <img src="'.$image.'" alt="">
    <div class="name">'.$ten_sanpham.'</div>
    <div class="desc"></div>
    <div class="price">$ '.$gia.'</div>
</div>';
    $i+=1;
}
?>
</div>
<div class="tieude">
    <h2>Danh Mục</h2>
</div>
<div class="listdm1">
    <?php
    foreach ($dsdm as $danhmuc) {
        extract($danhmuc);
        $linkdm = "index.php?act=sanpham&id_danhmuc".$id_danhmuc;
        echo ' <li >
        <a href="'.$linkdm.'">'.$ten_danhmuc.'</a>
        </li>
        ';
        # code...
    }

?>
</div>