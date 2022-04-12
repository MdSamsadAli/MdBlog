<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="txt-center">
                <h1>LOGIN HERE</h1>
            </div>
            <form action="{{route('login-user')}}" method="POST">
                <div class="col">
                    <div class="col-2">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter Your Email...">
                    </div>
                    <div class="col-2">
                        <label for="password">Password</label>
                        <input type="text" placeholder="Enter Your Password...">
                    </div>
                </div>
                <div class="btn">
                    <button>Login</button>
                    <button>Clear</button>
                </div>
                <div class="footer-txt">
                    <span>are you already Registered?</span><a href="{{route('register')}}">Register Here</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>