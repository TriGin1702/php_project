<?php
    session_start();
    require_once 'config/db.php';
    if (isset($_POST['btnfind'])){
        $name = $_POST['searchitem'];
        if ($name !=""){
            $sql1 ="SELECT * FROM products";
            $query1 = mysqli_query($connect,$sql1);
            while($num_row = mysqli_fetch_assoc($query1)){
                if ($num_row['prd_name'] == $name){
                    $_SESSION['id1']= $num_row['prd_id'];
                    header("location: product.php?&id=$_SESSION[id1]");
                }
            }
        }
    }  
    $id = $_GET['id'];
    $sql = "SELECT * FROM products inner join brands on products.brand_id= brands.brand_id where prd_id = $id";
    $query = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>product</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./sanpham/main1.php">
    <link rel="stylesheet" type="text/css" href="./sanpham/main2.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="asset/font/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css" rel="stylesheet">
</head>

<body>
    <script src="./open.js"></script>
    <form action="product.php" method="post">
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
                        <li class="header_navbar-list-item" onclick="showSuccessToast1()">đăng ký</li>
                        <li class="header_navbar-list-item " onclick="showSuccessToast2()">đăng nhập</li>
                    </ul>
                </nav>
                <div class="header-with-search">
                    <div class="header-with-search_icon">
                        <a href="base.php">
                            <i class="header-with-search-img fas fa-store"></i>
                        </a>
                    </div>
                    <div class="header-with-search_input">
                        <div class="header-with-sr-wrap">
                            <input name="searchitem" type="text" placeholder="nhập để tìm kiếm" class="header-with-search_input-text" id="search"></input>
                        </div>
                        <div class="header-with-search-option">
                            <span class="header-with-search-option-label">tìm kiếm trang</span>
                            <i class="header-with-search-option-icon fas fa-chevron-down"></i>
                            <ul class="header-with-search-select">
                                <li class="header-with-search-select-item header-with-search-select-item-active">
                                    <span>trong trang này</span>
                                    <i class="fas fa-check"></i>
                                </li>
                                <li class="header-with-search-select-item header-with-search-select-item-active">
                                    <span>ngoài trang này</span>
                                    <i class="fas fa-check"></i>
                                </li>
                            </ul>
                        </div>
                        <button name="btnfind" class="header-with-search-btn">
                                <a href="product.php?&id=<?php echo $_SESSION['id']; ?>"></a>
                                <i class="header-with-search-btn-icon fas fa-search"></i>
                            </button>
                    </div>
                    <div class="header-with-search_icon2">
                        <div class="header_all-cart">
                            <label for="numbercart"></label>
                            <input class="header-cart2" id="numbercart" type="text"></input>
                            <i class="header-cart fas fa-cart-arrow-down"></i>
                            <div class="header_cart-list header_cart-list-nocart">
                                <img src="./asset/img/tải xuống.png" alt="" class="header_cart-nocart-img">
                                <span class="header_cart-nocart-msg">
                                        chưa có sản phẩm
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div id="toast1"></div>
        <div id="toast2"></div>
        <!-- <div class="modal">
            <div class="modal_overplay">
    
            </div>
            <div class="modal_body">
                <div class="auth-form">
                    <div class="auth-form_header">
                        <span class="auth-form_login">Đăng ký</span>
                        <span class="auth-form_switch">Đăng nhập</span>
                    </div>
                    <div class="auth-form_group">
                        <input type="text" class="auth-form_input" placeholder="your email">
                    </div>
                    <div class="auth-form_group">
                        <input type="password" class="auth-form_input" placeholder="your password">
                    </div>
                    <div class="auth-form_group">
                        <input type="password" class="auth-form_input" placeholder="your password again">
                    </div>
                    <div auth-form_aside>
                        <p class="auth-form_text">từ đăng ký bạn đã đồng ý về
                            <a href="" class="auth-form_link">điều khoản dịch vụ</a>
                        </p>
                    </div>
                    <div class="auth-form_controls">
                        <button class="btn btn-normal auth-form_control-back">RETURN</button>
                        <button class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>
                <div class="auth-form">
                    <div class="auth-form_header">
                        <span class="auth-form_login">Đăng Nhập</span>
                        <span class="auth-form_switch">Đăng Ký</span>
                    </div>
                    <div class="auth-form_group">
                        <input type="text" class="auth-form_input" placeholder="your email">
                    </div>
                    <div class="auth-form_group">
                        <input type="password" class="auth-form_input" placeholder="your password">
                    </div>
                    <div class="auth-form_aside">
                        <div class="auth-form_help">
                            <a href="" class="auth-form_help-link">Quên mật khẩu</a>
                            <span class="auth-form_help-space"></span>
                            <a href="" class="auth-form_help-link">Cần trợ giúp?</a>
                        </div>
                    </div>
                    <div class="auth-form_controls">
                        <button class="btn btn-normal auth-form_control-back">RETURN</button>
                        <button class="btn btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </div>
                <div class="auth-form_socials">
                    <a href="" class="auth-form_social-fb btn btn--icon">
                        <i class="fab fa-facebook">
                            <span class="size_icon_social-icon">
                                đăng nhập với facebook
                            </span>
                        </i>
                    </a>
                    <a href="" class="auth-form_social-gg btn btn--icon">
                        <i class="fab fa-google-plus-g">
                            <span class="size_icon_social-icon">
                                    đăng nhập với google
                            </span>
                        </i>
                    </a>
                </div>
            </div>
        </div> -->
        <div id="toast" style="display: block;"></div>
        <div class="setup_body">
            <div class="body1">
                <div id="body1-1">
                    <div class="body2">
                        <div class="imgbd">
                            <img src="./asset/img/saber.jpg" alt="">
                        </div>
                        <div class="imgbd">
                            <img src="./asset/img/kobiet.jpg" alt="">
                        </div>
                        <div class="imgbd">
                            <img src="./asset/img/remngang.jpg" alt="">
                        </div>
                        <div class="imgbd">
                            <img src="./asset/img/end.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="body3">
                    <div class="body3-list">
                        <a href="" class="body3-link">
                            <img src="./asset/img/saber.jpg" alt="madara" class="body3-link-img1">
                        </a>
                    </div>
                    <div class="body3-list">
                        <a href="" class="body3-link">
                            <img src="./asset/img/kobiet.jpg" alt="shanks" class="body3-link-img2">
                        </a>
                    </div>
                    <div class="body3-list">
                        <a href="" class="body3-link">
                            <img src="./asset/img/remngang.jpg" alt="bleach" class="body3-link-img3">
                        </a>
                    </div>
                    <div class="body3-list">
                        <a href="" class="body3-link">
                            <img src="./asset/img/end.jpg" alt="madara" class="body3-link-img4">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="grid">
                <div class="grid__row app_content">
                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category_heading">
                                <i class="category_heading-icon fas fa-list"></i> Danh mục
                            </h3>
                            <ul class="category-list">
                                <li class="category-item category-item--active">
                                    <a href="./base1.html" class="category-item-link">sản phẩm bán chạy</a>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item-link">sản phẩm mới ra</a>
                                </li class="category-item">
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item-link">sản phẩm cũ</a>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item-link">sản phẩm dự kiến</a>
                                </li class="category-item">
                                <li class="category-item category-item--active">
                                    <a href="" class="category-item-link">sản phẩm theo yêu cầu</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="grid__column-10">
                        <div class="home-filter">
                            <span class="home-filter_label">đề cử ngẫu nhiên</span>
    
                        </div>
                        <div class="home-product" id="toast3">
                            <div class="grid__row">
                                <div class="grid__column-10">
                                    <div class="product-style-base">
                                        <div class="product-style">
                                            <img src="./image/<?php echo $row['image'];?>" alt="" class="font-prodcut-img">
                                        </div>
                                        <div class="font-product">
                                            <ul class="font-product-list-info">
                                                    <li class="font-product-info1"><?php echo $row['prd_name'];?></li>
                                                    <li class="font-product-info1">số lượng sản phẩm: <?php echo $row['quantity'];?></li>
                                                    <li class="font-product-info1"><?php echo $row['description'];?></li>
                                                    <li class="font-product-info1"><?php echo $row['price'];?></li>
                                                    <li class="font-product-info1"><?php echo $row['brand_name'];?></li>
                                                    <li class="font-product-info2">
                                                        <button class="btn-buy" onclick="tru()">-</button>
                                                        <input id="quantity2"></input>
                                                        <button class="btn-buy" onclick="add()">+</button>
                                                    </li>
                                                    <li class="font-product-info2">
                                                        <button id="quantity" onclick="remake();showSuccessToast()">thêm vào giỏ hàng</button>
                                                    </li>
                                            </ul>
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="footer_help-msg">
                Mọi thắc mắc có thể liên hệ đến</div>
            <div class="footer_help-img">
                <a href="https://www.facebook.com/profile.php?id=100039682875327" class="footer_navbar-link-icon1">
                    <i class="footer_navbar-icon1 fab fa-facebook">: Minh Trí</i>
                </a>
                <a href="" class="footer_navbar-link-icon2">
                    <i class="footer_navbar-icon2 fab fa-instagram">: Gin1702</i>
                </a>
                <div class="footer_help-img-sdt">hoặc số điện thoại : 180054713</div>
            </div>
        </footer>

    </form>
</body>

</html>