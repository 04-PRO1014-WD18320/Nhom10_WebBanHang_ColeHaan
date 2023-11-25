<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="../../css/login/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    
    <link href="../../css/login/css/sb-admin-2.min.css" rel="stylesheet">
    

</head>
<style>

</style>
<body class="bg-gradient-primary">

    <div class="container" style="margin-top:100px;margin-left:450px;">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <?php
                                        if (isset($_SESSION['taikhoan'])) {    
                                            extract($_SESSION['taikhoan']);
                                        ?>
                                        <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Thông tin tài khoản</h1>
                                    </div>
                                        <h4>Tên</h4><br>
                                        <div class="form-group">
                                            <?=$user?>
                                        </div>
                                        <div style="margin-top:50px;">
                                        <div class="form-group">
                                        <div class="text-center">
                                        <a class="small" href="index.php?act=edit_taikhoan">Sửa thông tin</a>
                                        </div>
                                        <div class="text-center">
                                        <a class="small" href="index.php?act=quenmk">Quên mật khẩu</a>
                                        </div>
                                        <?php
                                            if($role==1){
                                        ?>
                                        <div class="text-center">
                                        <a class="small" href="admin/index.php">Truy cập admin</a>
                                        </div>
                                        <?php }?>
                                        <div class="text-center">
                                        <a class="small" href="index.php?act=thoat">Đăng xuất!</a>
                                        </div>
                                        </div>
                                        </div>

                                    <?php    
                                        }else{

                                    ?>  
                                    <form class="user" action="index.php?act=dangnhap" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                
                                                placeholder="User" name="user">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="pass">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <input class="btn btn-primary btn-user btn-block"   type="submit" value="Đăng nhập" name="dangnhap">
                                        <hr>

                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="">Quên mật khẩu?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="index.php?act=dangky">Đăng kí tài khoản!</a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../css/login/vendor/jquery/jquery.min.js"></script>
    <script src="../../css/login/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../css/login/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../css/login/js/sb-admin-2.min.js"></script>

</body>

</html>