<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}?v={{ time() }}">
    <title>Home</title>
</head>
<body> 
    
    @include ('header_footer.header')
    
    <!-- section home -->
    <section class="main-home">
        <div class="main-text">
            <h1>TRANG PHỤC CỔ VIỆT NAM</h1>
             <p>
                Những trang phục cổ Việt Nam không chỉ dừng lại ở việc là di tích quý báu của lịch sử nước nhà 
                mà còn đại diện những nét đặc trưng của nền văn hoá dân tộc. 
            </p>
            <a href="#" class="main-btn">Tìm hiểu <i class="fa-solid fa-right-long"></i></a>
        </div>

        <div class="down-arrow">
            <a href="#product" class="down"><i class="fa-solid fa-angle-down"></i></a>
        </div>
    </section>

    <div class="banner">
        <div class="slider" style="--quantity: 8">
            <div class="item" style="--position: 1">
                <img src="{{ asset('frontend/img/home/trangphuc1.jpg') }}" alt="">
            </div>
            <div class="item" style="--position: 2">
                <img src="{{ asset('frontend/img/home/trangphuc1.jpg') }}" alt="">
            </div>
            <div class="item" style="--position: 3">
                <img src="{{ asset('frontend/img/home/trangphuc1.jpg') }}" alt="">
            </div>
            <div class="item" style="--position: 4">
                <img src="{{ asset('frontend/img/home/trangphuc1.jpg') }}" alt="">
            </div>
            <div class="item" style="--position: 5">
                <img src="{{ asset('frontend/img/home/trangphuc1.jpg') }}" alt="">
            </div>
            <div class="item" style="--position: 6">
                <img src="{{ asset('frontend/img/home/trangphuc1.jpg') }}" alt="">
            </div>
            <div class="item" style="--position: 7">
                <img src="{{ asset('frontend/img/home/trangphuc1.jpg') }}" alt="">
            </div>
            <div class="item" style="--position: 8">
                <img src="{{ asset('frontend/img/home/trangphuc1.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <!-- section product -->
    <section class="product" id="product">
        <div class="center-text">
            <h2>Các dạng cổ phục</h2>
        </div>
        <div class="img">
            @include ('product.product_type')
        </div>       
    </section>

    <!-- section about us -->
    <section class="about-us" id="aboutus">
        <div class="introduce">
            <h3>Introduction</h3>
            <div class="member">
                <div class="PND">
                    <img src="{{ asset('frontend/img/banner/banner1.jpg') }}" alt="">
                    <h3>Pham Ngoc Duc</h3>
                    <h2>23IT</h2>
                    <h2>23JIT</h2>
                    <p>Leader</p>
                </div>
                <div class="DTP">
                    <img src="{{ asset('frontend/img/banner/banner1.jpg') }}" alt="">  
                    <h3>Dam Thanh Phuong</h3>
                    <h2>23IT219</h2>
                    <h2>23JIT</h2>
                    <p>Member</p>
                </div>
                <div class="PHN">
                    <img src="{{ asset('frontend/img/banner/banner1.jpg') }}" alt="">
                    <h3>Pham Hoang Nguyen</h3>
                    <h2>23IT</h2>
                    <h2>23JIT</h2>
                    <p>Member</p>
                </div>
            </div>          
        </div>
    </section>

    @include ('header_footer.footer')
</body>
</html>