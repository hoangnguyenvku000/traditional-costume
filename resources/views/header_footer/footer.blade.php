<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Hurricane&family=Ibarra+Real+Nova:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="php/css/footer.css">
    <title>Footer</title>
</head>
<body>
    <footer>
        <div class="row">
            <div class="col">
                <img src="php/img/logo.png" class="logo1">
                <p>Anh trai say Hi Kim phut kim gio Chan thanh</p>
                <p>Duong Domic Yeu em 2 ngay - Weantodale Badbye</p>
                <p>Oh Hae Young</p>
            </div>
            <div class="col">
                <h3>Get in touch <div class="underline"><span></span></div> </h3>
                <p>470 Tran Dai Nghia, Ngu Hanh Son, Da Nang, Viet Nam</p>           
                <p class="email-id">CPV@gmail.com</p>
                <p>(+84) 123456789</p>
            </div>
            <div class="col">
                <h3 class="contact">Contact <div class="underline"><span></span></div> </h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
            <div class="col">
                <h3>Newletter <div class="underline"><span></span></div> </h3>
                <form class="mail">
                    <i class='bx bx-envelope'></i>
                    <input type="email" placeholder="Enter your email to receive notifications." class="email">
                    <button class="submit"><i class="fas fa-arrow-right"></i></button>
                </form>
                <div class="social-icons">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-tiktok"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <hr>
        <p class="copyright">
            &copy;<?php echo date("Y"); ?>CoPhucViet | DucNguyenPhuong
        </p>
        
    </footer>
</body>
</html>