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

function bill_chi_tiet($listbill){
        global $imagepath;
        $tong=0;
        $i=0;
        
        echo '<thead>
            <tr>
                <th>Ảnh sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
            </thead>';
        foreach ($listbill as $cart) {
            $image=$imagepath.$cart['image'];
            $tongtien=(double)$cart[3]*(double)$cart[4];
            $tong+=(double)$cart['tongtien'];
            
            echo    '
                        <tr>
                        <td><img src="'.$image.'"  height="80px"></td>
                        <td>'.$cart['ten_sanpham'].'</td>
                        <td>$ '.$cart['gia'].'</td>
                        <td>'.$cart['soluong'].'</td>
                        <td>$ '.$cart['tongtien'].'</td>

                    </tr>';
                $i+=1;
        } 
        echo '<tr>
                <td colspan="4" style="background-color:pink"> Tổng tiền đơn hàng </td>
                <td>$ '.$tong.'</td>
            </tr>';
}

function tongdonhang(){
        $tong=0;

        foreach ($_SESSION['mycart'] as $cart) {
            
            $tongtien=(double)$cart[3]*(double)$cart[4];
            $tong+=$tongtien;
            
        } 
        return $tong;
}


function insert_bill($id_user,$user,$email,$diachi,$sdt,$pttt,$ngaydathang,$tongdonhang){
    $id_user_string = implode(', ', $id_user[0]);
    $sql="insert into bill(id_user,bill_name,bill_email,bill_diachi,bill_sdt,bill_pttt,ngaydathang,total) 
    values('$id_user_string','$user','$email','$diachi','$sdt','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}    

function insert_cart($id_user,$idpro,$image,$ten_sanpham,$gia,$soluong,$tongtien,$idbill){
   
    $id_user_string = implode(', ', $id_user[0]);
    $sql="INSERT INTO `cart`(`id_user`, `idpro`, `image`, `ten_sanpham`, `gia`, `soluong`, `tongtien`, `idbill`) 
    VALUES ('$id_user_string','$idpro','$image','$ten_sanpham','$gia','$soluong','$tongtien','$idbill')";
    return pdo_execute($sql);
} 

function loadone_bill($id)
{
    $sql = "SELECT * FROM bill WHERE id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_cart($idbill)
{
    $sql = "SELECT * FROM cart WHERE idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_bill($id_user)
{
    $id_user_string = implode(', ', $id_user[0]);
    $sql = "SELECT * FROM bill WHERE id_user=" . $id_user_string;
    $listbill = pdo_query($sql);
    return $listbill;
}
function get_trangthai($n){
    switch ($n) {
        case '0':
            $tt="Đơn hàng mới";
            break;
        case '1':
            $tt="Đang xử lý";
            break;
        case '2':
            $tt="Đang giao hàng";
            break;
        case '3':
            $tt="Đã giao hàng";
            break;
        
        default:
        $tt="Đơn hàng mới";
            break;
    }
    return $tt;
}
?>