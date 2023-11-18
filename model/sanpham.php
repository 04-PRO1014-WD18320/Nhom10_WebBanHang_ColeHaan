<?php
    function insert_sanpham($ten_sanpham,$gia,$soluong,$image,$mota){
        $sql = "insert into sanpham(ten_sanpham,gia,soluong,image,mota) values('$ten_sanpham','$gia','$soluong','$image','$mota')";
        pdo_execute($sql);
    }
    function delete_sanpham($id_sanpham){
        $sql = ("delete from sanpham where id =".$id_sanpham);
        pdo_execute($sql);
    }
?>