<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('frontend/css/login_register.css') }}">

    <title>Register</title>
</head>

<body>

    <!-- wrapper -->
    <div class="wrapper"> 

        <span class="icon-close">
            <a href="{{ url('/home') }}"><i class="fa-solid fa-xmark" style="color: #fff"></i></a>
        </span> 

        

        <!-- registration -->
        <div class="form-box register">
            <form action="{{ url('/register') }}" method="POST">
                {{ csrf_field() }}
                <img src="{{ asset('frontend/img/logo.png') }}" alt="logo">
                <h1>WELCOME TO OUR PAGE</h1>         
                
                <!-- Username -->
                <div class="input-box">
                    <input type="text" placeholder="Username" name="name" value="{{ old('name') }}" required>
                    <i class='bx bx-user'></i>
                </div>
                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <!-- Email -->
                <div class="input-box">
                    <input type="text" placeholder="Email" name="email" value="{{ old('email') }}" required>
                    <i class='bx bx-envelope'></i>
                </div>
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <!-- Password -->
                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" required>
                    <i class='bx bx-lock-alt'></i>
                </div>
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <!-- Terms and conditions -->
                <div class="agree">
                    <label><input type="checkbox">I agree to the <a href="#">Service</a> and <a href="#">Conditions</a></label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn2">Register</button>

                <!-- Social media options -->
                <div class="authentication-social">
                    <div class="separator">
                        <span></span>
                        <span class="paragraph">OR</span>
                        <span></span>
                    </div>
                    <a href="#" class="google" rel="nofollow">
                        <i class='bx bxl-google'></i>
                        <span>Register with Google</span>
                    </a>
                    <br>
                    <a href="#" class="fb" rel="nofollow">
                        <i class='bx bxl-facebook-circle'></i>
                        <span>Register with Facebook</span>
                    </a>    
                </div>

                <!-- Link to login -->
                <div class="loginLink">
                    <p>Already have an account? <a href="{{ url('/login') }}">Login</a></p>
                </div>
            </form>
        </div>
    </div>

</body>
<script src="{{ asset('frontend/js/login_register.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
