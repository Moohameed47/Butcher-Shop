<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/loginstyle.css">
    <title>Login</title>
</head>

<body style="background-image: url('Images/bg.png')">
    <div class="container">
        <form action="{{ route('login') }}" method="POST" class="login-email">
            @csrf
            <p class="login-text">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" class="form-control" name="email" value="" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
                @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" class="form-control" name="password" value=""@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                   </span>
                @enderror

            </div>

            <div class="input-group">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>
            </div>
            <p class="login-register-text">Don't have an account? <a href="{{ route('register') }}"> Register Here</a></p>
        </form>
    </div>
</body>

</html>