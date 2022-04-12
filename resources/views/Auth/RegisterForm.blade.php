<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">

            @if(session('msg'))
                <div class="alert">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&timesbar;</span>
                    {{session('msg')}}
                </div>
            @endif
            <div class="txt-center">
                <h1>REGISTER HERE</h1>
            </div>
            <form action="{{route('register-user')}}" method="POST">
            @csrf
                <div class="col">
                    <div class="col-2">
                        <label for="username">Username</label>
                        <input type="text" placeholder="Enter Your Name..." name="username">
                    </div>
                    <span class="text-danger">{{$errors->first('username')}}</span>
                    <div class="col-2">
                        <label for="email">Email</label>
                        <input type="text" placeholder="Enter Your Email..." name="email">
                    </div>
                    <span class="text-danger">{{$errors->first('email')}}</span>
                    <div class="col-2">
                        <label for="password">Password</label>
                        <input type="text" placeholder="Enter Your Password..." name="password">
                    </div>
                    <span class="text-danger">{{$errors->first('password')}}</span>

                    
                    <div class="col-2">
                        <label for="password">Confirm Password</label>
                        <input type="text" placeholder="Enter Again Password..." name="confirm_password">
                    </div>
                </div>
                <div class="btn">
                    <button type = "submit">Register</button>
                    <button type="reset">Clear</button>
                </div>
                <div class="footer-txt">
                    <span>are you already Registered?</span><a href="{{route('login')}}">Login Here</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>