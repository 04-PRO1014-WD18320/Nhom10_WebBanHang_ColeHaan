<?php
include "../model/pdo.php";
include "header.php";

if (isset($_GET['act'])) {
    $act=$_GET['act'];
    switch ($act) {
        case 'dssp':
            include "sanpham/list.php";
            break;
        case 'listdm':
            $sql="select * from danhmuc";
            $listdanhmuc=pdo_query($sql);
            
            include "danhmuc/list.php";
            break;
        
        case 'addsp':
            if (isset($_POST['them'])&&($_POST['them'])) {
                $id_danhmuc=$_POST['id_danhmuc'];
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
                
                insert_sanpham($ten_sanpham,$gia,$soluong,$image,$mota,$id_danhmuc);
                $thongbao="Them thanh cong";  
            }
            //$listdanhmuc=loadall_danhmuc();
            
            include "sanpham/add.php";
            break;

        case 'adddm':
            if (isset($_POST['themdm'])&&($_POST['themdm'])) {
                $ten_danhmuc=$_POST['ten_danhmuc'];
                $sql="insert into danhmuc(ten_danhmuc) values('$ten_danhmuc')";
                pdo_execute($sql);
                $thongbao="Them thanh cong";
            }
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