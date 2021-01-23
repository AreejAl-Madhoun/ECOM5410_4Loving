<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ URL::asset('css/mystyle.css') }}" rel="stylesheet" type="text/css" >
    </head>

    <body>
    <div class="wrapper">
        <div class="inner">
            <div class="image-holder">
                <img src="images/gift.PNG" width="500px" alt="" >
            </div>
            <form method="POST"  action="{{ route('login') }}">
                @csrf
                <h3>Login</h3>
                <div class="form-holder active">
                    <input type="text" placeholder="e-mail" required id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert" style="margin-bottom: 15px">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="form-holder">
                    <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="font-size: 15px;margin-top: 15px">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-login">
                    <button type="submit">{{ __('Login') }}</button>
                    <p>Don't Have account? <a href="{{route('register')}}">Create</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/main.js"></script>
    </body>
    </html>
