<?php

function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
    $sql= "INSERT INTO danhmuc (noidung,iduser,idpro,ngaybinhluan) VALUES ('$noidung','$iduser','$idpro','$ngaybinhluan')";
    pdo_execute($sql);
}

?>