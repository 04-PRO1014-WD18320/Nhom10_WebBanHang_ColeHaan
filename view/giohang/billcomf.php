
<?php
    if (isset($bill)&&(is_array($bill))) {
        extract ($bill);
    }
?>

<br><div style="margin-left:200px;">
<h2>Bạn đã đặt hàng thành công</h2>
       <br><br> <table  border="1" style="width:700px; height:100px; border:1px solid black; text-align:center;">
    <div>
        <li>-Ma don hang: <?=$bill['id'];?></li>
        <li>-Ngay dat hang: <?=$bill['ngaydathang'];?></li>
        <li>-Tong don hang: <?=$bill['total'];?></li>
        <li>-Phuong thuc thanh toan: <?=$bill['bill_pttt'];?></li>
    </div>
</table>
</div>

<br><div style="margin-left:200px;">
<h2>Thông tin đặt hàng</h2>
       <br><br> <table class="bill" border="1" style="width:700px; height:250px; border:1px solid black; text-align:center;">
            
            <tr >
                <td >Người đặt hàng</td>
                <td ><?=$bill['bill_name'];?></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><?=$bill['bill_diachi'];?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?=$bill['bill_email'];?></td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><?=$bill['bill_sdt'];?></td>
            </tr>
        </table>
    </div><br>
        <div style="margin-left:200px;">
        <br><h3 style="margin-left:50px;">Đơn hàng</h3>
        <table border="1"; style="width:700px; height:300px; border:1px solid black; text-align:center;">
                
                <?php
                    bill_chi_tiet($billct);
                ?>
        </table>
        </div>

</div>