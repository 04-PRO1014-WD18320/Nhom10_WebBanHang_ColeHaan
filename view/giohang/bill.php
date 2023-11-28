<form action="index.php?act=billcomf" method="post" style="" >
    
    <br><div style="margin-left:200px;">
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
        <div style="margin-left:200px;">
        <br><h3 style="margin-left:50px; ">Phương thức thanh toán</h3>
        <div style="width:400px; height:50px; border:1px solid black; text-align:center; border-radius: 10px;">
            <div>
                <table>
                    <tr>
                        <td style="padding-top:10px; padding-right:20px;padding-left:20px;"><input type="radio" value="1" name="pttt" checked>Trả tiền khi nhận hàng</td>
                        <td style="padding-top:10px; padding-right:20px;padding-left:20px;"><input type="radio" value="2" name="pttt" >Thanh toán online</td>
                        
                    </tr>
                </table>
            </div>
        </div>
        <div>
            
        </div>
        </div>
    
        <div style="margin-left:200px;">
        <br><h3 style="margin-left:50px;">Đơn hàng</h3>
        <table border="1"; style="width:700px; height:300px; border:1px solid black; text-align:center;">
        <thead>
        </thead>
        <?php
            viewcart(0);
        ?>
        </table>
        </div>

        <br><br><div style="margin-left:200px; font-size:20px; " >
            <input type="submit" value="Đồng ý đặt hàng" name="dongydathang" style=" background-color: rgb(231, 178, 178);color: #fff; border-radius: 10px;">
        </div>


</form>
