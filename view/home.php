<div class="banner">
    <img src="view/image/banner.png" alt="" srcset="">
</div>
    <div class="tieude">
        <h2>Sản Phẩm Mới</h2>
    </div>
<div class="sp">
<?php
    $i=0;
    foreach ($spnew as $sanpham) {
    extract($sanpham);  
    $linksp = "index.php?act=sanphamct&id_sanpham=".$id_sanpham;    
    $image = $imagepath.$image;
    if(($i==1)||($i==2) || ($i==4)){
        $mr = "";
    }else{
        $mr = "mr";
    }
    echo '<div class="item1 '.$mr.'" >
    <img src="'.$image.'" alt="">
    <div class="name"><a href="'.$linksp.'">'.$ten_sanpham.'</a></div>
    <div class="desc"></div>
    <div class="price">$'.$gia.'</div>
    <div>
    </div>
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
<div class="tieude">
        <h2>----------------------</h2>
</div>
<div class="banner2">
    <img src="view/image/banner2.jpg" alt="" srcset="">
</div>
<div>
<div class="left-column">
    <img src="view/image/tt1.webp" alt="">
    </div>
    
<div class="right-column">
<img src="view/image/tt2.webp" alt="">
</div>
</div>
<div class="banner2">
    <img src="view/image/banner1.jpg" alt="" srcset="">
</div>
<div class="tieude">
        <h2>Sản phẩm được yêu thích</h2>
</div>
<div class="sp">
<?php
    $i=0;
    foreach ($spnew as $sanpham) {
    extract($sanpham);  
    $linksp = "index.php?act=sanphamct&id_sanpham=".$id_sanpham;    
    $image = $imagepath.$image;
    if(($i==1)||($i==3) || ($i==5)){
        $mr = "";
    }else{
        $mr = "mr";
    }
    echo '<div class="item1 '.$mr.'" >
    <img src="'.$image.'" alt="">
    <div class="name"><a href="'.$linksp.'">'.$ten_sanpham.'</a></div>
    
    <div class="desc"></div>
    <div class="price">$ '.$gia.'</div>
    </div>';
    $i+=1;
    }
?>
</div>
