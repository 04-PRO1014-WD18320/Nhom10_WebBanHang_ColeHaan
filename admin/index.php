<?php
// controler
include "header.php";
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/taikhoan.php";
include "../model/sanpham.php";

if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        case 'adddm':
            // kiểm tra xem người dùng có nhấn vào act hay không
            if (isset($_POST['themdm']) && ($_POST['themdm'])) {
                $ten_danhmuc = $_POST['ten_danhmuc'];
                $sql="insert into danhmuc(ten_danhmuc) values ('$ten_danhmuc')";
                pdo_execute($sql);
                
                $thongbao = "Thêm thành công";

            }
            include "danhmuc/add.php";
            break;

        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        case 'xoadm':

            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {
                $sql="delete from where id_danhmuc=".$_GET['id_danhmuc'];
                delete_danhmuc($_GET['id_danhmuc']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";


            break;

        case 'suadm':
            if (isset($_GET['id_danhmuc']) && ($_GET['id_danhmuc'] > 0)) {

                $dm = loadone_danhmuc($_GET['id_danhmuc']);
            }
            include "danhmuc/update.php";

            break;

        case 'updatedm':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $ten_danhmuc = $_POST['ten_danhmuc'];
                $id_danhmuc = $_POST['id_danhmuc'];
                update_danhmuc($id_danhmuc, $ten_danhmuc);
                $thongbao = "Cập nhập  thành công";

            }
            $sql = "SELECT * FROM danhmuc order by id_danhmuc desc";

            $listdanhmuc = pdo_query($sql);
            include "danhmuc/list.php";
            break;


        // controler sản phẩm
        case 'addsp':
            // kiểm tra xem người dùng có nhấn vào act hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $id_danhmuc = $_POST['id_danhmuc'];
                $ten_sanpham = $_POST['ten_sanpham'];
                $gia = $_POST['gia'];
                $soluong = $_POST['soluong'];
                $mota = $_POST['mota'];
                $image = $_FILES["image"]["name"];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($ten_sanpham, $gia, $soluong, $image, $mota, $id_danhmuc);
                $thongbao = "Thêm thành công";

            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;

        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $id_danhmuc = $_POST['id_danhmuc'];

            } else {
                $kyw = '';
                $id_danhmuc = 0;

            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($kyw, $id_danhmuc);
            include "sanpham/list.php";
            break;

        case 'xoasp':

            if (isset($_GET['id_sanpham']) && ($_GET['id_sanpham'] > 0)) {
                delete_sanpham($_GET['id_sanpham']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";


            break;

        case 'suasp':

            if (isset($_GET['id_sanpham']) && ($_GET['id_sanpham'] > 0)) {

                $sanpham = loadone_sanpham($_GET['id_sanpham']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";

            break;

            case 'updatesp':
                if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                    $id_sanpham = $_POST['id_sanpham'];
                    $id_danhmuc = $_POST['id_danhmuc'];
                    $ten_sanpham = $_POST['ten_sanpham'];
                    $gia = $_POST['gia'];
                    $soluong = $_POST['soluong'];
                    $mota = $_POST['mota'];
                    $image = $_FILES["image"]["name"];
                    $target_dir = "../upload/";
                    $target_file = $target_dir . basename($_FILES["image"]["name"]);
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                    } else {
                        //echo "Sorry, there was an error uploading your file.";
                    }
                    update_sanpham($id_sanpham, $id_danhmuc, $ten_sanpham, $gia, $soluong, $mota, $image);
                    $thongbao = "Cập nhập  thành công";
    
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("", 0);
                include "sanpham/list.php";
                break;
    
                case 'dangky':
                    if (isset($_POST['dangky']) && ($_POST['dangky'])){
                        $hoten = $_POST['hoten'];
                        $email = $_POST['email'];
                        $pass = $_POST['pass'];
                        insert_user( $hoten,$email, $pass);
                        $thongbao = "thành công";
                    }
                    include "view/taikhoan/regiter.php";
                    break;    
            case 'dskh':
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
                break;
            case 'dsbl':
                $listbinhluan = loadall_binhluan(0);
                include "binhluan/list.php";
                break;
            case 'trangchu':
                include "trangchu/home.php";
                break;
            case 'listtk':

                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/list.php";
        
        
                break;
            default:
                include "home.php";
                break;
        }
    } else {
        include "home.php";
    }
    
    
    
    include "footer.php";
    
    ?>