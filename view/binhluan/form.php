<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idpro=$_REQUEST['idpro'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/css.css">
</head>
<style>
    .formbl{
        
        width: 500px;
        height:100px; border:1px solid black;
        border-radius: 5px;
    }
</style>
<body >
    <div>

    
<br><div class="tieude">
    <h3>Bình luận</h3>
</div>

<div class="formbl">
    <ul>
        <?php
    echo "binh luan ".$idpro;
        ?>
    </ul>
    
</div>
<div>
    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <input type="hidden" name="idpro" value="<?=$idpro?>">
        <input type="text" name="noidung">
        <input type="submit" value="Gửi bình luận" name="guibinhluan">
    </form>
</div>
<?php
if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
    $noidung = $_POST['noidung'];
    $idpro = $_POST['idpro'];
    $iduser = $_SESSION['mycart'];
    $ngaybinhluan=date('h:i:sa d/m/Y');
    insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
}


?>
</div>
</body>
</html>