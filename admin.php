<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./sanpham/dkdn.php">
    <title>Document</title>
</head>

<body>
    <?php 
            if(isset($_POST['btn-login'])){
                $username = "minhtri1702";
                $password = "gin230695";
                $u = $_POST['taikhoan'];
                $p = $_POST['password'];
                if (($u == $username) && ($p == $password)){
                    $_SESSION['taikhoan'] = $username;
                    $_SESSION['password'] = $password;
                    header('location: index.php?page_layout=danhsach');
                }
                else{
                    echo "tên đăng nhập hoặc mật khẩu không đúng !";
                }
            }
    ?>
    <div class="main">
        <form action="" method="POST" class="form" id="form-2">
            <h3 class="heading">Đăng nhập</h3>
            <p class="desc">Đăng nhập để mua sản phẩm tại cửa hàng ❤️</p>

            <div class="spacer"></div>

            <div class="form-group">
                <label for="email" class="form-label">Tài khoản</label>
                <input id="email" name="taikhoan" type="text" placeholder="VD: email@domain.com" class="form-control"
                    required>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Mật khẩu</label>
                <input id="password" name="password" type="password" placeholder="Nhập mật khẩu" class="form-control"
                    required>
            </div>
            <button name="btn-login" class="form-submit" type="submit">Đăng nhập</button>
        </form>

    </div>
</body>

</html>