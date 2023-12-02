<br><div style="margin-left:200px;">
    <h2>Đơn hàng của tôi</h2>
       <br><br> <table class="bill" border="1" style="width:700px; height:250px; border:1px solid black; text-align:center;">
            <tr>
                <th>Mã Đơn Hàng</th>
                <th>Ngày Đặt</th>
                <th>Số Lượng</th>
                <th>Tổng Tiền</th>
                <th>Tình Trạng Đơn Hàng</th>
            </tr>
            <?php
                if (is_array($listbill)) {
                    foreach ($listbill as $bill) {
                        extract($bill);
                        $trangthai=get_trangthai($bill['bill_status'])
                        $countsp=loadall_cart_count($bill['id']);
                        echo '
                        
                        <td>CLH-'.$bill['id'].'</td>
                        <td>'.$bill['ngaydathang'].'</td>
                        <td>'.$countsp.'</td>
                        <td>'.$bill['total'].'</td>
                        <td>'.$trangthai.'</td>
                        
                        ';
                    }
                }
            ?>

        </table>
    </div><br>