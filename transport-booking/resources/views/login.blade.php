<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HiW Corp TBS Login Page</title>

     <link rel="stylesheet" href="{{ asset('login-page.css') }}">
</head>
<body>

<header class="top-bar">
    <div class="brand">
        <img class="logo" src="{{ asset('company-logo.png') }}" alt="Company Logo">
        <h2>TransportBooking</h2>
    </div>
</header>

    <div class="signin-banner">
    <h1>SIGN IN</h1>
    </div>

        <div class="login-container">
        <form class="login-form" action="/login" method="POST">
            @csrf
            
        <div class="form-group">
            <label>Email *</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Password *</label>
            <input type="password" name="password" required>
        </div>

        @if ($errors->any())
    <div style="color: red; margin-bottom: 15px;">
        {{ $errors->first() }}
    </div>
@endif

        <button type="submit" class="signin-btn">
            SIGN IN
        </button>

        <div class="links">
            
            <a href="{{ url('/newaccount') }}">Create new account</a>
            <p>Forgot password?</p>
        </div>

    </form>
    </div>

</body>
</html>