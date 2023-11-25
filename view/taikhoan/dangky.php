<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng Ký Tài Khoản!</title>

    <!-- Custom fonts for this template-->
    <link href="../../css/login/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/login/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container" style="margin-top:100px;margin-left:420px;">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row" ;>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Đăng Ký Tài Khoản!</h1>
                            </div>
                            <form class="user" action="index.php?act=dangky" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="user"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <input type="email" class="form-control form-control-user" name="email"
                                        placeholder="Email">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            name="pass" placeholder="Password">
                                    </div>

                                </div>
                                <input class="btn btn-primary btn-user btn-block"   type="submit" value="Đăng ký" name="dangky">

                                <hr>
                            </form>
                            <?php
                                if (isset($thongbao)&&($thongbao!="")) {
                                    echo $thongbao;
                                }     

                            ?>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="">Quên mật khẩu?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="index.php?act=dangnhap">Bạn đã có tài khoản? Đăng nhập!</a>
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