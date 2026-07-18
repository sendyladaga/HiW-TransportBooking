<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HiW Corp TBS Login Page</title>

     <link rel="stylesheet" href="{{ asset('login-page.css') }}">

<style>
    .top-bar {
    min-height: 58px;
    width: 100%;
    background-color: white;
    border-bottom: 1px solid #e5e5e5;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 2px;
}

.brand {
  display: flex;
  align-items: center;
  gap:0;
  margin-top:-13px;
}

.logo {
    width: 180px;
    height: auto;
    margin-left: -10px;
    margin-right:-20px;
}

.brand h2 {
    font-size: 20px;
    font-weight: bold;
    margin: 0;
}

body{
    margin:0;
    font-family: Arial, sans-serif;
    background:#f7f7f7;
}

/* BLUE SIGN IN BAR */
.signin-banner{
    background:#2da4db;
    width:100%;
    height:50px;
    display:flex;
    align-items:center;
    margin-top: -30px;
    position: relative;
    z-index: 10;
}

.signin-banner h1{
    margin-left:25px;
    color:rgb(0, 0, 0);
    font-size:30px;
    font-weight:bold;
}

/* LOGIN AREA */
.login-container{
    display:flex;
    justify-content:center;
    margin-top:40px;
}

.login-form{
    width:450px;
}

.form-group{
    display:flex;
    align-items:center;
    margin-bottom:20px;
}

.form-group label{
    width:120px;
    font-weight:bold;
}

.form-group input{
    flex:1;
    padding:10px;
    border:1px solid #dcdcdc;
    font-size: 13px;
}

.signin-btn{
    width: 265px;
    margin-left: 155px;
    padding: 12px;
    background: #2da4db;
    color: white;
    border: none;
    font-size: 15px;
    font-weight: bold;
}

.signin-btn:hover{
    background:#2477a4;
}

.links{
    margin-top: 25px;
}

.links p{
    font-size: 14px;
    color: black;
    text-decoration: underline;
    margin: 5px 0;
    cursor: pointer;
}

.links p:hover{
    color: #2da4db;
}

</style>

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