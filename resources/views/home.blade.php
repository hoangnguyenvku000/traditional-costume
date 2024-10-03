<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="php/css/home.css">
    <title>Home</title>
</head>
<body> 

    @include ('header_footer.header')

    <div class="hero-section">    
        <div class="content">
            <h1>TRANG PHỤC CỔ VIỆT NAM</h1>
             <p>
                Những trang phục cổ Việt Nam không chỉ dừng lại ở việc là di tích quý báu của lịch sử nước nhà 
                mà còn đại diện những nét đặc trưng của nền văn hoá dân tộc. 
                Không hẳn là Việt phục cổ không có được sự quan tâm của đông đảo mọi người, 
                trên thực tế, rất có nhiều người muốn tìm hiểu về Việt phục nhưng lại gặp khó khăn trong việc tìm kiếm tư liệu tìm hiểu.
                Trang web này sẽ cung cấp đủ những tư liệu quý giá đó.
            </p>
            <button> <a href="{{ url('/product_type') }}">Bắt đầu</a></button>
        </div>
    </div>

    <div class="banner">
        <div class="slider" style="--quantity: 8">
            <div class="item"style="--position: 1">
                <img src="php/img/home/trangphuc1.jpg" alt="">
            </div>
            <div class="item"style="--position: 2">
                <img src="php/img/home/trangphuc2.jpg" alt="">
            </div>
            <div class="item"style="--position: 3">
                <img src="php/img/home/trangphuc3.jpg" alt="">
            </div>
            <div class="item"style="--position: 4">
                <img src="php/img/home/trangphuc4.jpg" alt="">
            </div>
            <div class="item"style="--position: 5">
                <img src="php/img/home/trangphuc5.jpg" alt="">
            </div>
            <div class="item"style="--position: 6">
                <img src="php/img/home/trangphuc6.jpg" alt="">
            </div>
            <div class="item"style="--position: 7">
                <img src="php/img/home/trangphuc7.jpg" alt="">
            </div>
            <div class="item"style="--position: 8">
                <img src="php/img/home/trangphuc8.jpg" alt="">
            </div>
        </div>
    </div>
</body>
</html>