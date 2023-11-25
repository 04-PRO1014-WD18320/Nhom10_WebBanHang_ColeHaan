<form action="index.php?act=billcomf" method="post" >
    
    <div style="text-align: center;">
    <h2>Thông tin đặt hàng</h2>
       <br><br> <table class="bill" border="1" style="width:700px; height:250px; border:1px solid black; text-align:center;">
            <?php
                if (isset($_SESSION['taikhoan'])) {
                    $user= $_SESSION['taikhoan']['user'];
                    $diachi= $_SESSION['taikhoan']['diachi'];
                    $email= $_SESSION['taikhoan']['email'];
                    $sdt= $_SESSION['taikhoan']['sdt'];
                }else {
                    $user= "";
                    $diachi= "";
                    $email= "";
                    $sdt= "";
                }
            ?>
            <tr >
                <td >Người đặt hàng</td>
                <td ><input type="text" name="user" id="" value="<?=$user?>" style="width:300px;"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="text" name="diachi" id="" value="<?=$diachi?>" style="width:300px;"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id="" value="<?=$email?>" style="width:300px;"></td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input type="text" name="sdt" id="" value="<?=$sdt?>" style="width:300px;"></td>
            </tr>
        </table>
    </div><br>
    <br><h3 style="text-align:center;">Phương thức thanh toán</h3>
        <div style="width:700px; height:100px; border:1px solid black; text-align:center;display:flex;">
            <div></div>
        </div>
        <h3 style="text-align:center;">Đơn hàng</h3>
        <br><table border="1"; style="width:700px; height:300px; border:1px solid black; text-align:center;">
        <thead>
        </thead>
        <?php
            viewcart(0);
        ?>
        </table>




</form>
