<?php

function insert_danhmuc($ten_danhmuc){
    $sql= "INSERT INTO danhmuc (ten_danhmuc) VALUES ('')";
    pdo_execute($sql);
}


function delete_danhmuc($id_danhmuc){
    $sql= "delete from danhmuc where id_danhmuc=".$id_danhmuc;
    pdo_execute($sql);
}

function loadall_danhmuc(){
    $sql= "SELECT * FROM danhmuc order by id_danhmuc desc";

    $listdanhmuc= pdo_query($sql);
    return  $listdanhmuc; // trả về danh sách danh mục
}

function loadone_danhmuc($id_danhmuc){
    $sql= "SELECT * FROM danhmuc WHERE id_danhmuc=".$id_danhmuc;
    $dm= pdo_query_one($sql);
    return $dm;
}

function update_danhmuc($id_danhmuc, $ten_danhmuc){
    $sql= "UPDATE danhmuc SET ten_danhmuc='".$ten_danhmuc."' WHERE id_danhmuc=".$id_danhmuc;
    pdo_execute($sql);
}

?>