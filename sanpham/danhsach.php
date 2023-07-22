<?php
    require 'D:/php/htdocs/tryphp/config/db.php';
    $sql = "SELECT * FROM products inner join brands on products.brand_id= brands.brand_id";
    $query = mysqli_query($connect,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./main1.php">
    <link rel="stylesheet" type="text/css" href="./main2.php">
    <link rel="stylesheet" type="text/css" href="./php1.php">
    <link href="./asset/font/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <title>Document</title>

</head>
<body>
<div class="app">
        <header class="header">
            <nav class="header_navbar">
                <ul class="header_navbar-list">
                    <li class="header_qr-set header_navbar-list-item">
                        kết nối với cửa hàng ^o^
                        <div class="header_qr">
                            <img src="./asset/img/d91264e165ed6facc6178994d5afae79.png" alt="QR code" class="header_qr-img">
                            <div class="header_qr-apps">
                                <a href="https://www.niemvuilaptrinh.com/article/Su-dung-hinh-anh-va-lien-ket"><img src="./asset/img/f4f5426ce757aea491dce94201560583.png" alt="ch play" class="header_qr-chp"></a>
                                <img src="./asset/img/39f189e19764dab688d3850742f13718.png" alt="app store" class="header_qr-as">
                            </div>
                        </div>
                    </li>
                    <li class="header_navbar-list-item--space"></li>
                    <li class="header_navbar-list-item2">
                        <span class="header_nabar-conect">kết nối</span>
                        <a href="" class="header_navbar-link-icon1">
                            <i class="header_navbar-icon1 fab fa-facebook"></i>
                        </a>
                        <a href="" class="header_navbar-link-icon2">
                            <i class="header_navbar-icon2 fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>

                <ul class="header_navbar-list">
                    <li class="header_navbar-list-item header_notify-show">
                        <a href="" class="header_navbar-list-link">
                            <i class="header_navbar-icon fas fa-bell"></i>
                            <span class="bell">thông báo</span>
                        </a>
                        <div class="header_notify">
                            <h3>Thông báo mới nhận</h3>
                            <ul class="header_notify-list">
                                <li class="header_notify-item">
                                    <a href="https://kaguyasama-wa-kokurasetai.fandom.com/wiki/Kei_Shirogane" class="header_notify-link">
                                        <img src="https://i.ytimg.com/vi/GnQUqrsfE_4/sddefault.jpg" alt="" class="header_notify-img">
                                        <div class="header_notify-info">
                                            <span class="header_notify-name">kei-chan</span>
                                            <span class="header_notify-description">Kaguya-sama wa Kokurasetai series. She is the younger sister of Miyuki Shirogane</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="header_notify-item">
                                    <a href="https://oregairu.fandom.com/wiki/Yukino_Yukinoshita" class="header_notify-link">
                                        <img src="https://shareitnow.b-cdn.net/wp-content/uploads/2021/02/Yukino-Yukinoshita-quotes-768x432.jpg" alt="" class="header_notify-img">
                                        <div class="header_notify-info">
                                            <span class="header_notify-name">yukinoshita</span>
                                            <span class="header_notify-description">Yukino Yukinoshita (雪ノ下 雪乃 Yukinoshita Yukino) is the deuteragonist of Yahari Ore no Seishun Love Come wa Machigatteiru. She is a student of Class 2J of Sobu High School and the founding president of the Service Club.</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="header_notify-item">
                                    <a href="https://inuyasha.fandom.com/wiki/Kiky%C5%8D" class="header_notify-link">
                                        <img src="https://sc01.alicdn.com/kf/HTB1mbn_LpXXXXXOXXXXq6xXFXXXa/223361048/HTB1mbn_LpXXXXXOXXXXq6xXFXXXa.jpg_.webp" alt="" class="header_notify-img">
                                        <div class="header_notify-info">
                                            <span class="header_notify-name">kikyo</span>
                                            <span class="header_notify-description">Kikyō (桔梗, "Chinese Bellflower") was a shrine priestess who lived 50 years prior to the main events of the series. She was responsible for purifying the Shikon Jewel and was the former lover of Inuyasha</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="header_notify-item">
                                    <a href="https://otakustore.vn/date-a-live-tokisaki-kurumi-new-year-cheongsam-ver-apex-toy.html" class="header_notify-link">
                                        <img src="./asset/img/kurumi.jpg" alt="" class="header_notify-img">
                                        <div class="header_notify-info">
                                            <span class="header_notify-name">Kurumi</span>
                                            <span class="header_notify-description">Date A Live - Tokisaki Kurumi New Year Cheongsam Ver (APEX-TOY), Thời gian phát hành: Tháng 10 năm 2021</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="footer_notify">
                                <a href="" class="footer_notify-btn"> Xem tất cả</a>
                            </div>
                        </div>
                    </li>
                    <li class="header_navbar-list-item">
                        <a href="" class="header_navbar-list-link">
                            <i class="header_navbar-icon3 fas fa-question-circle"></i>
                            <span class="help">trợ giúp</span>
                        </a>
                    </li>
                    <li class="header_navbar-list-item" onclick="showSuccessToast1()">Xin chào Minh Trí</li>
                </ul>
            </nav>
            <div class="header-with-search">
                <div class="header-with-search_icon">
                    <a href="">
                        <i class="header-with-search-img fas fa-store"></i>
                    </a>
                </div>
            </div>
        </header>
    </div>
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
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Mô tả</th>
                        <th>Thương hiệu</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($query)) {?>
                            <tr>
                                <td><?php echo $i++ ?></td>
                                <td><?php echo $row['prd_name'];?></td>
                                <td>
                                    <img style="width: 70px; height: 70px;" src="/tryphp/image/<?php echo $row['image'];?>">
                                </td>
                                <td><?php echo $row['price'];?></td>
                                <td><?php echo $row['quantity'];?></td>
                                <td><?php echo $row['description'];?></td>
                                <td><?php echo $row['brand_name'];?></td>
                                <td>
                                    <a href="index.php?page_layout=sua&id=<?php echo $row['prd_id']; ?>">Sửa</a>
                                </td>
                                <td>
                                    <a onclick="return del('<?php echo $row['prd_name']; ?>')" href="index.php?page_layout=xoa&id=<?php echo $row['prd_id']; ?>">Xóa</a>
                                </td>
                            </tr>
                        <?php } ?>
                </tbody>
            </table>
            <a class="btn" href="index.php?page_layout=them">Thêm mới</a>
            <a  href="index.php?page_layout=dsdangky">Danh sách tài khoản</a>
        </div>
    </div>
</div>
<script>
    function del(name) {
        return confirm("Bạn có chắc muốn xóa sản phẩm: "+ name +"?");
    }
</script>
</body>
</html>
