
<div class="ctsp" style="border-radius: 5px; margin-top: 50px; height: auto; padding: 20px 0px; ">
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
            <input type="submit" name="addtocart" value="Thêm vào giỏ hàng" style="border-radius: 5px; margin-top: 20px; font-size: 20px; ">
            </form>';

            ?>
            </div>

            <h4 style=" margin-top: 100px;">Mô tả</h4>
            <div style="    padding: 20px 20px;
                            border-radius: 5px;
                            width: 450px;
                            height: auto;
                            word-break: keep-all;
                            border: rgb(0, 0, 0) solid 1px;
                            float: right;
                            margin-right: 500px;
                            ">
                <?=$mota?></div>
                
    </div>
    <?php
        extract($onesp);
        $image=$imagepath.$image;
        echo '<div>
        <img src="'.$image.'"><br>
        
        </div>';
    ?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#binhluan").load("view/binhluan/form.php", {idpro: <?=$id_sanpham?>});
        });
    </script>
<div id="binhluan">

</div>
<br><div class="tieude">
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

