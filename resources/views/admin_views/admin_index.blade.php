<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="php/admin/css/index.css" rel="stylesheet">

    <title>Admin</title>
</head>
<body>
    <div class="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="sideBar">
            <!-- logo -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon">
                    <i class="fa-solid fa-mug-hot"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- divider -->
            <hr class="sidebar-divider my-0">

            <!-- nav item -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>Thông tin cá nhân</span>
                </a>
            </li>

             <!-- Divider -->
             <hr class="sidebar-divider">

             <!-- Heading -->
            <div class="sidebar-heading">Quản lí</div>

            <!-- nav item user-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#user" aria-expanded="false" aria-controls="user">
                    <i class="fa-solid fa-users"></i>
                    <span>Người dùng</span>
                </a>
                <div id="user" class="collapse" aria-labelledby="headingUser" data-parent="#sideBar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">QL tài khoản</h6>
                        <a class="collapse-item" href="#">Thông tin người dùng</a>
                    </div>
                    <div class="collapse-divider"></div>
                    <div class="bg-white py-2 collapse-inner rounded">                      
                        <h6 class="collapse-header">Thời gian truy cập</h6>
                        <a class="collapse-item" href="#">Đăng nhập</a>
                        <a class="collapse-item" href="#">Đăng ký</a>
                    </div>                
                </div>
            </li>

            <!-- nav item staff-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#staff" aria-expanded="false" aria-controls="staff">
                    <i class="fa-solid fa-user-tag"></i>
                    <span>Nhân viên</span>
                </a>
                <div id="staff" class="collapse" aria-labelledby="headingStaff" data-parent="#sideBar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">QL tài khoản</h6>
                        <a class="collapse-item" href="#">Thông tin nhân viên</a>
                    </div>
                    <div class="collapse-divider"></div>
                    <div class="bg-white py-2 collapse-inner rounded">                      
                        <h6 class="collapse-header">Thời gian truy cập</h6>
                        <a class="collapse-item" href="#">Đăng nhập</a>
                        <a class="collapse-item" href="#">Đăng ký</a>
                    </div>                
                </div>
            </li>

            <!-- nav item product-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#product" aria-expanded="false" aria-controls="product">
                    <i class="fa-solid fa-file"></i>
                    <span>Sản phẩm</span>
                </a>
                <div id="product" class="collapse" aria-labelledby="headingProduct" data-parent="#sideBar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Chi tiết sản phẩm</h6>
                        <a class="collapse-item" href="#">Đăng nhập</a>
                        <a class="collapse-item" href="#">Đăng ký</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">Thống kê</div>

        <!-- nav item chart-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#chart" aria-expanded="false" aria-controls="chart">
                <i class="fa-solid fa-money-bill"></i>
                <span>Tổng chi phí</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#chart" aria-expanded="false" aria-controls="chart">
                <i class="fa-solid fa-wallet"></i>
                <span>Doanh thu</span>
            </a>
        </li>
             
            <!-- Divider -->
            <hr class="sidebar-divider">

        <!-- Heading-->
        <div class="sidebar-heading">Cài đặt</div>

        <!-- nav item setting-->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#setting" aria-expanded="false" aria-controls="setting">
                <i class="fa-solid fa-palette"></i>
                <span>Giao diện</span>
            </a>
        <div id="setting" class="collapse" aria-labelledby="headingSetting" data-parent="#sideBar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Logo</h6>
                <a class="collapse-item" href="#">Thay logo</a>
            </div>
            <div class="collapse-divider"></div>
            <div class="bg-white py-2 collapse-inner rounded">                      
                <h6 class="collapse-header">Chế độ</h6>
                <a class="collapse-item" href="#">Sáng</a>
                <a class="collapse-item" href="#">Tối</a>
            </div>              
        </div>
        </li>

         <!-- nav item time-->
         <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#time" aria-expanded="false" aria-controls="time">
                <i class="fa-solid fa-clock"></i>
                <span>Thời gian</span>
            </a>
        </li>

         <!-- nav item language-->
         <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#language" aria-expanded="false" aria-controls="language">
                <i class="fa-solid fa-language"></i>
                <span>Ngôn ngữ</span>
            </a>
        </li>

        </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>