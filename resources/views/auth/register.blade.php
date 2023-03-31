<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/loginstyle.css">
    <title>Register</title>
</head>

<body style="background-image: url('Images/bg.png')">
    <div class="container">
        <form action="{{ route('register') }}" method="POST" class="login-email">
            @csrf

            <p class="login-text">Register</p>

            <div class="input-group">
                <input id="username" type="text" placeholder="First Name" class="form-control  @error('username') is-invalid @enderror" name="name" value="{{ old('username') }}" required autocomplete="name" autofocus>
            
                @error('username')
                <span class = "invalid-feedback" role = "alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
        </div>

                            <div class="input-group">
                <input id ="email" type="email" placeholder="Email" name="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                
                @error('email')
                <span class = "invalid-feedback" role = "alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            
            </div>

            <div class="input-group">
                <input id="password" type="password" placeholder="Password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                
                @error('password')
                <span class = "invalid-feedback" role = "alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="input-group">
                <input id="password-confirm" type="password" placeholder="confirm Password" name="password_confirmation" class="form-control" required autocomplete="new-password">
                
            </div>
        

            <div class="input-group">
                <button name="submit" class="btn btn-primary">{{ __('Register') }}</button>
            </div>
            {{-- @guest --}}
                {{-- @if (Route::has('login')) --}}
            <p class="login-register-text">Have an account? <a href="{{ route('login') }}">Login Here</a></p>
            {{-- @endif --}}
        </form>
        
    </div>
</body>

</html>