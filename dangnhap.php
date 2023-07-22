<?php
    session_start();
    require_once 'config/db.php';
    if(isset($_POST['btn-login'])){
        $username = $_POST['taikhoan'];
        $password = $_POST['password'];
        if(!empty($username)&&!empty($password)){
            $sql = "SELECT * FROM dskhachhang WHERE tkkh= '$username' and mkkh= '$password'";
            $query = mysqli_query($connect,$sql);
            $num_rows = mysqli_num_rows($query);
            if($num_rows!=0){
                header('location: base.php');
                $_SESSION['username'] = $username;
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./sanpham/dkdn.php">
</head>

<body>
    <div class="main">
        <form action="" method="POST" class="form" id="form-2">
            <h3 class="heading">Đăng nhập</h3>
            <p class="desc">Đăng nhập để mua sản phẩm tại cửa hàng ❤️</p>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="email" class="form-label">Tài khoản</label>
                <input id="email" name="taikhoan" type="text" placeholder="VD: email@domain.com" class="form-control">
                <span name="form-message" class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control">
                <span name="form-message" class="form-message"></span>
            </div>
            <button name="btn-login" class="form-submit">Đăng nhập</button>
        </form>

    </div>
</body>

</html>