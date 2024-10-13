<?php 
    session_start();
    // include "../model/dbconnect.php";
    $name = $email = $password = "";
    $name_err = $email_err = $password_err = "";
    $succ_msg = $err_msg = "";

    $error = false;

    if (isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        //validate input
        if ($name == "") {
            $name_err = "Please enter name";
            $error = true;
        }
        if ($email == "") {
            $email_err = "Please enter email";
            $error = true;
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format";
            $error = true;
        }
        else {
            $sql = "select * from user where email = ?";
            $stmt = $connect->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows>0) {
                $email_err = "Email already registered";
                $error = true;
            }
        }
        if ($password == "") {
            $password_err = "Please enter password";
            $error = true;
        }

        if (!$error) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $sql = "insert into user (name, email, password) values (?, ?, ?)";

            try {
                $stmt = $connect->prepare($sql);
                $stmt->bind_param("sss", $name, $email, $hashed_password);
                $stmt->execute();
                $succ_msg = "Registration successful. Please login <a href = 'login.php' >here</a>";
            } catch (Exception $e) {
                $err_msg = $e->getMessage();
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('frontend/css/login_register.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <title>Register</title>
</head>

<body>

    <!-- wrapper -->
    <div class="wrapper"> 

        <span class="icon-close">
            <a href="{{ url('/home') }}"><i class="fa-solid fa-xmark" style="color: #fff"></i></a>
        </span> 

        <?php 
        if (!empty($succ_msg)) { ?>
        <div  class="alert alert-success">
            <?= $succ_msg; ?>
        </div>
        <?php    } ?>

        <?php 
        if (!empty($err_msg)) { ?>
        <div  class="alert alert-danger">
            <?= $err_msg; ?>
        </div>
        <?php    } ?>

        <!-- registration -->
        <div class="form-box register">
            <form action="#" method="post">               
                <img src="{{asset('frontend/img/logo.png')}}" alt="logo">
                <h1>WELCOME TO OUR PAGE</h1>         
                <!-- input -->
                <div class="input-box">
                    <input type="text" placeholder="Username" name="name" required>
                    <i class='bx bx-user' ></i>
                </div>
                <div class="text-danger"><?= $name_err?></div>
    
                <div class="input-box">
                    <input type="text" placeholder="Email" name="email" required>
                    <i class='bx bx-envelope'></i>
                </div>
                <div class="text-danger" style="color: #fff;"><?= $email_err?></div>
    
                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" required>
                    <i class='bx bx-lock-alt' ></i>
                </div>
                <div class="text-danger" style="color: #fff;"><?= $password_err?></div>
    
                <!-- forgot pwd -->
                <div class="agree">
                    <label><input type="checkbox">I agree to the <a href="#">Service</a> and <a href="#">Conditions</a></label>
                </div>
    
                <!-- submit -->
                <button type="submit" name="submit" class="btn2">Register</button>
                
                <!-- auto login -->
                <div class="authentication-social">
                    <div class="separator">
                        <span></span>
                        <span class="paragraph">OR</span>
                        <span></span>
                    </div>
                    <!-- Google -->
                    <a href="#" class="google" rel="nofollow">
                        <i class='bx bxl-google'></i>
                        <span>Register with Google</span>
                    </a>
                    <br>
                    <!-- Facebook -->
                    <a href="#" class="fb" rel="nofollow">
                        <i class='bx bxl-facebook-circle' ></i>
                        <span>Register with Facebook</span>
                    </a>    
                </div>
    
                <!-- register link -->
                <div class="loginLink">
                    <p>Already have an account? <a href="{{ url('/login') }}">Login</a></p>
                </div>
            </form>
        </div>
    </div>
        
</body>
<script src="{{asset('frontend/js/login_register.js')}}"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>