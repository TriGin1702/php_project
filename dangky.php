<?php 
    require_once 'config/db.php';
    if(isset($_POST['btn-submit'])){
        $name = $_POST['fullname'];
        $email = trim($_POST['email']);
        $pass = trim($_POST['password']);
        $ten = trim($_POST['taikhoan']);
        if(!empty($name)&&!empty($email)&&!empty($pass)&&!empty($ten)){
            $sql = "INSERT INTO dskhachhang (email, tenkh, tkkh, mkkh)
            VALUES ('$email','$name','$ten','$pass')";
            $query = mysqli_query($connect, $sql);
            header('location: dangnhap.php');
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

        <form action="" method="post" class="form" id="form-1" enctype="multipart/form-data">
            <h3 class="heading">Thành viên đăng ký</h3>
            <p class="desc">Đăng ký để trở thành thành viên cửa hàng ❤️</p>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="fullname" class="form-label">Tên đầy đủ</label>
                <input id="fullname" name="fullname" type="text" placeholder="VD: Minh Trí" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" name="email" type="text" placeholder="VD: email@domain.com" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Tài khoản</label>
                <input id="taikhoan" name="taikhoan" type="text" placeholder="Nhập tài khoản" class="form-control">
                <span class="form-message"></span>
            </div>

            <div class="form-group">
                <label for="password_confirmation" class="form-label">Mật khẩu</label>
                <input id="password" name="password" placeholder="Nhập mật khẩu" type="password" class="form-control">
                <span class="form-message"></span>
            </div>
            <button name="btn-submit" class="form-submit">Đăng ký</button>
        </form>
    </div>
</body>

</html>