<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/cart.php";
include "view/header.php";
include "global.php";

if (!isset($_SESSION['mycart'])) $_SESSION['mycart']=[]; 




$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
if ((isset($_GET['act']))&&($_GET['act']!="")) {
    $act=$_GET['act'];
    switch ($act) {
        // case 'sanpham':

        //     if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
        //         $id_danhmuc = $_GET['id_danhmuc'];
        //         $dssp = loadall_sanpham("", $id_danhmuc);
        //         $tendm = load_ten_dm($id_danhmuc);
        //         include "view/sanpham.php";
        //     } else {
        //         include "view/home.php";
        //     }

        //     break;
        
        case 'sanphamct':
         
            if (isset($_GET['id_sanpham']) && ($_GET['id_sanpham'] > 0)) {
                $id_sanpham = $_GET['id_sanpham'];
                $onesp = loadone_sanpham($id_sanpham);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id_sanpham, $id_danhmuc);
                include "view/sanphamct.php";
            } else {
                include "view/home.php";
            }
            break;


            case 'dangnhap':

                if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $checkuser = checkuser($user, $pass);
                    if (is_array($checkuser)) {
                        $_SESSION['taikhoan'] = $checkuser;
                        //$thongbao="Đăng nhập thành công!";
                        header('location: index.php');
                        
                    }else {
                        $thongbao="Tài khoản không tồn tại !";
                    }
                }
    
                include "view/taikhoan/dangnhap.php";
                break;
        case 'dangky':

            if (isset($_POST['dangky']) && ($_POST['dangky'])){
                $user = $_POST['user'];
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                insert_user( $user, $email, $pass);
                $thongbao="Đăng ký thành công!";
            }

            include "view/taikhoan/dangky.php";
            break;
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $sdt = $_POST['sdt'];
                $id_user = $_POST['id_user'];
                update_user($id_user, $user, $pass, $email, $diachi, $sdt);
                $_SESSION['taikhoan'] = checkuser($user, $pass);
                header('Location: index.php?act=edit_taikhoan');

            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])){
                $id_sanpham=$_POST['id_sanpham'];
                $ten_sanpham=$_POST['ten_sanpham'];
                $image=$_POST['image'];
                $gia=$_POST['gia'];
                $soluongsp=1;
                $tongtien= (double)$soluongsp * (double)$gia;
                $spadd=[$id_sanpham,$ten_sanpham,$image,$gia,$soluongsp,$tongtien];
                array_push($_SESSION['mycart'],$spadd);

                 
            }
            include "view/giohang/viewcart.php";
            break;    
        case 'delcart':
            if (isset($_GET['idcart'])) {
                array_slice($_SESSION['mycart'],$_GET['idcart'],1);
            }else {
                $_SESSION['mycart']=[];
            }
            header('Location: index.php?act=addtocart');
            break; 
        case 'bill':
            include "view/giohang/bill.php";
            break;
        case 'billcomf':
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])){
                $user=$_POST['user'];
                $email=$_POST['email'];
                $diachi=$_POST['diachi'];
                $sdt=$_POST['sdt'];
                $pttt=$_POST['pttt'];
                $ngaydathang=date('h:i:sa d/m/Y');
                $tongdonhang=tongdonhang();
                $idbill= insert_bill($user,$email,$diachi,$sdt,$pttt,$ngaydathang,$tongdonhang);

                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['mycart'],$cart[0],$cart[2],$cart[1],$cart[3],$cart[4],$cart[5],$idbill);
                }
                $_SESSION['cart']=[];

            }
            $bill=loadone_bill($idbill);
            $billct=loadall_cart($idbill);
            include "view/giohang/billcomf.php";
            break;
            default:
            include "view/home.php";
    }
}else {
    include "view/home.php";
}

include "view/footer.php";
?>