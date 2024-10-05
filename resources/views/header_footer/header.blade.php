<!DOCTYPE html>
<html lang="en">
<?php session_start();   ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("frontend/css/header.css")}}">
    <title>Header</title>
</head>
<body>
    <header>        
        <input type="checkbox" name="" id="chk1">
        <div class="logo"><img src="{{asset('frontend/img/logo.png')}}"></div>
            
        <div class="search-box">
            <form action="#" method="post">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="menubar">
            <ul>
                    <li><a href="{{ url('/home') }}">Trang chủ</a></li>
                    <li><a href="{{ url('/product_type') }}">Cổ phục</a>
                        <ul class="sub-menu">
                            <li><a href="">Áo giao lĩnh</a></li>
                            <li><a href="">Áo viên lĩnh</a></li>
                            <li><a href="">Áo đối khâm</a></li>
                        </ul>               
                    </li>
                    <li> <a href="{{ url('/product-list') }}" > Cửa hàng </a> </li>
                    <li><a href="#">Về chúng tôi</a></li>         
                    <li><a href="#">Liên lạc</a></li>
                    <!-- Check if the user is logged in using PHP -->
                    <?php if (isset($_SESSION['name']) && !empty($_SESSION['name'])): ?>
                        <li>
                            <a href="{{ url('/account') }}"> <?php echo $_SESSION['name'] ?></a>
                            <ul class="sub-menu">
                                <li><a href="">Trang cá nhân</a></li>
                                <li><a href="">Đăng xuất</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li><a href="{{ url('/login') }}">Đăng nhập</a></li>
                    <?php endif; ?>
                
                    <li>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-tiktok"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
                <div class="menu">
                    <label for="chk1">
                        <i class="fa fa-bars"></i>
                    </label>
                </div>
        </div>       
    </header>
</body>
</html>
