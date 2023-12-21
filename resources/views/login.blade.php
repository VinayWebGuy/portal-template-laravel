<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS Link -->
    <link rel="stylesheet" href="{{asset('assets/style.css')}}">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="mobile-prohibitted">
    </div>
    <div class="auth-container">
        <div class="auth-box">
            <div class="auth-heading">
                Login to Portal Template
            </div>
            <div class="auth-body">
                <form action="/">
                    <div class="form-row">
                        <div class="form-group full">
                            <input type="email" id="email" required>
                            <label for="email">Email</label>
                        </div>
                        <div class="form-group full">
                            <input type="text" id="password" required>
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <button class="btn trans">Login</button>
                </form>
                <div class="auth-links">
                    <a href="register.html">Create Account</a>
                    <a href="forget.html">Forget Password?</a>
                </div>
                <span class="or">or</span>
                <div class="google-login">
                    <i class="fa-brands fa-google"></i> Login with google 
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Chart js -->
    <!-- JS Link -->
    <script src="{{asset('assets/app.js')}}"></script>
</body>
</html>