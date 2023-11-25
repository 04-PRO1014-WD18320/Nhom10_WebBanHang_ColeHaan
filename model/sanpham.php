<?php

function insert_sanpham($ten_sanpham, $gia, $soluong,$image, $mota, $id_danhmuc)
{
    $sql = "INSERT INTO sanpham (ten_sanpham ,gia, soluong, image , mota, id_danhmuc) VALUES ('$ten_sanpham','$gia','$soluong','$image','$mota','$id_danhmuc')";
    pdo_execute($sql);
}


function delete_sanpham($id_sanpham)
{
    $sql = "delete from sanpham where id_sanpham=" . $id_sanpham;
    pdo_execute($sql);
}

function loadall_sanpham_top10()
{
    $sql = "SELECT * FROM sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham; // trả về danh sách danh mục
}


function loadall_sanpham_home()
{
    $sql = "SELECT * FROM sanpham where 1 order by id_sanpham desc limit 0,6";
    $listsanpham = pdo_query($sql);
    return $listsanpham; // trả về danh sách danh mục
}

function loadall_sanpham($kyw = "", $id_danhmuc = 0)
{
    $sql = "SELECT * FROM sanpham where 1 ";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($id_danhmuc > 0) {
        $sql .= " and id_danhmuc ='" . $id_danhmuc . "'";
    }
    $sql .= " order by id_sanpham desc";

    $listsanpham = pdo_query($sql);
    return $listsanpham; // trả về danh sách danh mục
}

function load_ten_dm($id_danhmuc)
{
    $sql = "SELECT * FROM danhmuc WHERE id_danhmuc=" . $id_danhmuc;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $name;
}

function loadone_sanpham($id_sanpham)
{
    $sql = "SELECT * FROM sanpham WHERE id_sanpham=" . $id_sanpham;
    $sp = pdo_query_one($sql);
    return $sp;
}

function load_sanpham_cungloai($id_sanpham, $id_danhmuc)
{
    $sql = "SELECT * FROM sanpham WHERE id_danhmuc='.$id_danhmuc.' AND id_sanpham <> " . $id_sanpham;
    $listsanpham = pdo_query($sql);
    return $listsanpham; // trả về danh sách danh mục
}

function update_sanpham($id_sanpham, $id_danhmuc, $ten_sanpham, $gia, $soluong, $mota, $image)
{
    if ($image != "") {
        $sql = "UPDATE sanpham SET id_danhmuc='" . $id_danhmuc . "', ten_sanpham='" . $ten_sanpham . "', gia='" . $gia . "', soluong='" . $soluong . "', mota='" . $mota . "', image='" . $image . "' WHERE id_sanpham=" . $id_sanpham;
    } else {
        $sql = "UPDATE sanpham SET id_danhmuc='" . $id_danhmuc . "', ten_sanpham='" . $ten_sanpham . "', gia='" . $gia . "', soluong='" . $soluong . "', mota='" . $mota . "' WHERE id_sanpham=" . $id_sanpham;
    }

    pdo_execute($sql);
}

?>