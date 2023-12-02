<h1 class="text-center">Giỏ hàng</h1>
            <div class="row">
                <div class="col col-md-12">
                    <table class="table table-bordered" border="1">

                        <?php
                            viewcart(1);
                        ?>
                    </table>
                    <div style="margin-left:50px; font-size:20px;">
                    <a href="index.php?act=bill"> <input type="submit" value="Đặt hàng"> </a>  <a href="index.php?act=delcart"> <input type="button" value="Xóa giỏ hàng"> </a>
                    <a href="index.php?act=mybill"> <input type="button" value="Đơn hàng của tôi"> </a>
                    </div>
                </div>
            </div>