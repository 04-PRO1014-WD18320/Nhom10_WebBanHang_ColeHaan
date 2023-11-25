<?php

function loadall_user(){
    $sql= "SELECT * FROM user order by id_user desc";

    $listuser= pdo_query($sql);
    return  $listuser; // trả về danh sách danh mục
}


function insert_user( $user, $email, $pass)
{
    $sql = "INSERT INTO user (user, email, pass) VALUES ('$user','$email', '$pass')";
    pdo_execute($sql);
}

function checkuser($user, $pass)
{
    $sql = "SELECT * FROM user WHERE user='".$user."' AND  pass='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email)
{
    $sql = "SELECT * FROM user WHERE email='".$email."' ";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_user($id_user, $user, $pass, $email, $diachi, $sdt)
{
    $sql = "UPDATE user SET user='" . $user . "', pass='" . $pass . "', email='" . $email . "', diachi='" . $diachi . "', sdt='" . $sdt . "' WHERE id_user=" . $id_user;
    
    pdo_execute($sql);
}


?>