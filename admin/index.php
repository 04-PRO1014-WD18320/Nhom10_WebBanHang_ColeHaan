<?php
include "header.php";

if (isset($_GET['act'])) {
    $act=$_GET['act'];
    switch ($act) {
        case 'dssp':
            include "sanpham/list.php";
            break;
        case 'dsdm':
            include "danhmuc/list.php";
            break;
        
        case 'addsp':
            if (isset($_POST['them'])&&($_POST['them'])) {
                //$id_danhmuc=$_POST['id_danhmuc'];
                $ten_sanpham=$_POST['ten_sanpham'];
                $gia=$_POST['gia'];
                $soluong=$_POST['soluong'];
                $mota=$_POST['mota'];
                $image=$_FILES['image']['name'];
                $target_dir = "upload/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
                } else {
                   // echo "Sorry, there was an error uploading your file.";
                }
                
                insert_sanpham($ten_sanpham,$gia,$soluong,$image,$mota);//$id_danhmuc);
                $thongbao="Them thanh cong";  
            }
            include "sanpham/add.php";
            break;

        case 'adddm':
            include "danhmuc/add.php";
            break;    

        default:
        include "home.php";
            break;
    }
}else {
    include "home.php";
}



include "footer.php";

?>