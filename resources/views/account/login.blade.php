<?php
    session_start();  
    // include "../model/dbconnect.php";

    $email = $password = "";
    $email_err = $password_err = "";
    $err_msg = "";
    $error = false;

 if (isset($_POST['submit'])) {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        if ($email == "") {
            $email_err = "Please enter email";
            $error = true;
        }
        
        if ($password == "") {
            $password_err = "Please enter password";
            $error = true;
        }

        if (!$error) {
            $sql = "select * from users where email = ?";
            $stmt = $connect->prepare($sql);
            $stmt->bind_param('s',$email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();      
                if (isset($row['password'])) {
                    
                    $stored_pwd = $row['password'];
                    if (password_verify($password,$stored_pwd)) {
                        $_SESSION['name'] = $row['name'];
                        header("location:../home.php");
                    }
                } else {
                    $err_msg = "Incorrect password.";
                }
            }
            else {
                $err_msg = "Email is not registered";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php/css/login_register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <title>Login</title>
    
</head>

<body>

    <!-- wrapper -->
    <div class="wrapper"> 

        <span class="icon-close">
            <a href="{{ url('/home') }}"><i class="fa-solid fa-xmark" style="color: #fff"></i></a>
        </span> 

        <?php 
        if (!empty($err_msg)) { ?>
        <div  class="alert alert-danger">
            <?= $err_msg; ?>
        </div>
        <?php    }      ?>
      
        <!-- login -->
        <div class="form-box login">          
            <form action="login.php" method="post">
                <img src="php/img/logo.png" alt="logo">
                <h1>WELCOME TO OUR PAGE</h1>         
                <!-- input -->
                <div class="input-box">
                    <input type="text" placeholder="Email" name="email" required>
                    <i class='bx bx-user' ></i>
                </div>
    
                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" required>
                    <i class='bx bx-lock-alt' ></i>
                </div>
    
                <!-- forgot pwd -->
                <div class="remember-forgot">
                    <label><input type="checkbox" name="remember">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>
    
                <!-- submit -->
                <button type="submit" class="btn1" name="submit">Login</button>
                
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
                        <span>Login with Google</span>
                    </a>
                    <br>
                    <!-- Facebook -->
                    <a href="#" class="fb" rel="nofollow">
                        <i class='bx bxl-facebook-circle' ></i>
                        <span>Login with Facebook</span>
                    </a>    
                </div>
    
                <!-- register link -->
                <div class="register-link">
                    <p>Don't have an account? <a href="{{ url('/register') }}">Register</a></p>
                </div>
            </form>
        </div>  
    </div>
       
</body>
<script src="php/js/login_register.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>