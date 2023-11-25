<?php
    function viewcart($del){
        global $imagepath;
        $tong=0;
        $i=0;
        if ($del==1) {
            $xoasp_th='<th>Hành động</th>';
           
            $xoasp_td2='<td></td>';
        }
        else {
            $xoasp_th='';
            $xoasp_td2='';
        }
        echo '<thead>
            <tr>
                <th>Ảnh sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                '.$xoasp_th.'
            </tr>
            </thead>';
        foreach ($_SESSION['mycart'] as $cart) {
            $image=$imagepath.$cart[2];
            $tongtien=(double)$cart[3]*(double)$cart[4];
            $tong+=$tongtien;
            if ($del==1) {
            
            $xoasp_td='<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a></td>';
            
        }
        else {
           
            $xoasp_td='';
        }
            echo    '
                        <tr>
                        <td><img src="'.$image.'"  height="80px"></td>
                        <td>'.$cart[1].'</td>
                        <td>$ '.$cart[3].'</td>
                        <td>'.$cart[4].'</td>
                        <td>$ '.$tongtien.'</td>
                            '.$xoasp_td.'
                        
                    </tr>';
                $i+=1;
        } 
        echo '<tr>
                <td colspan="4" style="background-color:pink"> Tổng tiền đơn hàng </td>
                <td>$ '.$tong.'</td>
                '.$xoasp_td2.'
            </tr>';
    }
?>