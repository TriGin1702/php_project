<?php
    require_once 'config/db.php';
    $sql = "SELECT * FROM dskhachhang";
    $query = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./sanpham/php1.php">
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Danh sách sản phẩm </h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Tên khách hàng</th>
                            <th>Email</th>
                            <th>Tài khoản</th>
                            <th>Mật khẩu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($query)) {?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $row['tenkh'];?></td>
                                    <td><?php echo $row['email'];?></td>
                                    <td><?php echo $row['tkkh'];?></td>
                                    <td><?php echo $row['mkkh'];?></td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>