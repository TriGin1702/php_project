<?php
    require 'config/db.php';
    session_start();
    if (!isset($_SESSION['txtName'])) {
	    header('location: admin.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./sanpham/main1.php">
    <link rel="stylesheet" type="text/css" href="./sanpham/main2.php">
    <link rel="stylesheet" type="text/css" href="./sanpham/php1.php">
    <link href="./asset/font/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['page_layout'])){
            switch ($_GET['page_layout']) {
                case 'danhsach':
                    require_once 'sanpham/danhsach.php';
                    break;
                case 'them':
                    require_once 'sanpham/them.php';
                    break;
                case 'sua':
                    require_once 'sanpham/sua.php';
                    break;
                case 'xoa':
                    require_once 'sanpham/xoa.php';
                    break;
                case 'dsdangky':
                    require_once 'sanpham/dsdangky.php';
                    break;                             
                default:
                    require_once 'sanpham/danhsach.php';
                    break;
            }
        }
        else{
            require_once 'sanpham/danhsach.php';
        }
    ?>
</body>
</html>