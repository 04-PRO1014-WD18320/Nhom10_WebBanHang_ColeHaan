<?php

function loadall_user(){
    $sql= "SELECT * FROM user order by id_user desc";

    $listuser= pdo_query($sql);
    return  $listuser; // trả về danh sách danh mục
}


function insert_user( $hoten,$email, $pass)
{
    $sql = "INSERT INTO user (hoten, email, pass) VALUES ( '$hoten','$email', '$pass')";
    pdo_execute($sql);
}

function checkuser($email, $pass)
{
    $sql = "SELECT * FROM user WHERE email='".$email."' AND  pass='".$pass."'";
    $sp = pdo_query_one($sql);
    return $sp;
}

function checkemail($email)
{
    $sql = "SELECT * FROM user WHERE email='".$email."' ";
    $sp = pdo_query_one($sql);
    return $sp;
}

function update_user($id, $hoten, $pass, $email)
{
    
        $sql = "UPDATE user SET user='" . $user . "', pass='" . $pass . "', email='" . $email . "' WHERE id=" . $id;
    

    pdo_execute($sql);
}


?>