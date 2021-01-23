<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ URL::asset('css/mystyle.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
<div class="wrapper">
    <div class="inner">
        <div class="image-holder">
            <img src="images/gift.PNG" width="500px" alt="" style="margin-top: 100px" >
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h3>Sign Up</h3>
            <div class="form-holder active">
                <input id="name"  placeholder="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-holder">
                <input id="email" placeholder="e-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
               </span>
                @enderror
            </div>
            <div class="form-holder">
                <div class="col-md-6">
                    <input id="password" type="password"placeholder="Password" class="form-control" style="font-size: 15px;" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-holder">
                <div class="col-md-6">
                    <input id="password-confirm" placeholder="confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="form-holder">
                <input id="phone_number" type="tel" placeholder="phone number" class="form-control"required name="phone_number">
            </div>
            <div class="form-login">
                <button type="submit">{{ __('Register') }}</button>
                <p>Already Have account? <a href="{{route('login')}}">Login</a></p>
            </div>
        </form>
    </div>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
