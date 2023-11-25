<style>
    .nutgh{
        margin-top: 20px;
    }
</style>
<div class="ctsp">
    <?php
        extract($onesp);
    ?>  
    <div class="tieudesp">
            <h2><?=$ten_sanpham?></h2>
            <div class="giaspct" style="margin-right: 750px;"><h4>Giá sản phẩm: $ <?=$gia?></h4></div><br>
            <div>
            <?php
            echo '<form action="index.php?act=addtocart" method="post">
            <input type="hidden" name="id_sanpham" value="'.$id_sanpham.'">
            <input type="hidden" name="ten_sanpham" value="'.$ten_sanpham.'">
            <input type="hidden" name="image" value="'.$image.'">
            <input type="hidden" name="gia" value="'.$gia.'">
            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
            </form>';

            ?>
            </div>
            <div class="nutmua">
            <br><br><input type="button" value="Đặt hàng">
            </div>

            <div class="motaspct"><?=$mota?></div>
    </div>
    <?php
        extract($onesp);
        $image=$imagepath.$image;
        echo '<div>
        <img src="'.$image.'"><br>
        
        </div>';
    ?>
</div>
<div>
<div class="tieude">
    <h3>Sản phẩm cùng loại</h3>
</div>
<div>
    <?php
        foreach ($sp_cung_loai as $sp_cung_loai) {
            extract($sp_cung_loai);
            $linksp="index.php?act=sanphamct&id_sanpham=".$id_sanpham;
            $image = $imagepath.$image;

            echo '<div class="item1" >
            <img src="'.$image.'" alt="">
            <div class="name"><a href="'.$linksp.'">'.$ten_sanpham.'</a></div>
            
            <div class="desc"></div>
            <div class="price">$ '.$gia.'</div>
            </div>';
            
        }
    ?>
</div>
</div>

