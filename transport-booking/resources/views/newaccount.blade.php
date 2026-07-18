<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HiW Corp Create New Account</title>

<link rel="stylesheet" href="{{ asset('newaccount.css') }}">

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

.account-page {
    width: 100%;
    min-height: calc(100vh - 108px);
    background: #f7f7f7;
    padding: 25px 35px;
    box-sizing: border-box;
}

.account-card {
    background: white;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 28px 32px;
    border-radius: 5px;
    box-shadow: 0 0 12px rgba(0, 0, 0, 0.15);
    box-sizing: border-box;
}

.account-card h1 {
    font-size: 28px;
    margin: 0 0 18px 0;
    color: #111;
}

.account-form {
    width: 100%;
}

.account-form label {
    display: block;
    font-size: 14px;
    font-weight: 600;
    margin: 14px 0 6px;
    color: #222;
}

.account-form span {
    color: #d71920;
    font-weight: bold;
}

.account-form input,
.account-form select {
    width: 100%;
    height: 34px;
    padding: 6px 10px;
    border: 1px solid #aeb7c2;
    border-radius: 4px;
    font-size: 14px;
    box-sizing: border-box;
}

.account-form select {
    width: 220px;
    background: white;
}

.password-note {
    font-size:12px;
    margin: 10px 0;
    color: #7a7979d5;
    line-height: 1.4;
    text-decoration: italic;
}

hr {
    border: none;
    border-top: 1px solid #ddd;
    margin: 18px 0 14px;
}

.captcha-container{
    margin-top:20px;
}

.captcha-box{
    width:250px;
    height:50px;
    border:1px solid #ccc;
    background:#f4f4f4;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:0 15px;
    margin-bottom:10px;
}

#captchaText{
    font-size:24px;
    font-weight:bold;
    letter-spacing:3px;
    color:#333;
    user-select:none;
}

.captcha-box button{
    border:none;
    background:#2da4db;
    color:white;
    cursor:pointer;
    padding:5px 10px;
    border-radius:4px;
}

#captchaInput{
    width:250px;
    height:35px;
    padding:5px 10px;
    margin-bottom:10px;
}

#captchaMessage{
    font-weight:bold;
}

.button-row {
    margin-top: 18px;
    display: flex;
    gap: 8px;
}

.create-btn {
    background: #2da4db;
    font-size: 14px;
    color: white;
    border: none;
    padding: 9px 14px;
    border-radius: 4px;
    font-weight: bold;
    cursor: pointer;
}

.cancel-btn {
    background: #e6e6e6;
    font-size: 14px;
    color: #333;
    border: 1px solid #cfcfcf;
    padding: 9px 14px;
    border-radius: 4px;
    cursor: pointer;
}

.required-note {
    margin-top: 18px;
    font-size: 13px;
}

input::placeholder{
    color:#999;
}

select{
    color:#999;
}

select:valid{
    color:#000000;
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

    <div class="signin-banner"></div>

    <main class="account-page">
    <div class="account-card">

        <h1>New account</h1>
        <form class="account-form" action="/newaccount" method="POST">
            @csrf

            <label>Last name <span>*</span></label>
            <input type="text" name="last_name" required>

            <label>First name <span>*</span></label>
            <input type="text" name="first_name" required>

            <label>Middle name </label>
            <input type="text" name="middle_name">

            <label>Password <span>*</span></label>
            <input type="password" name="password" required>

                <p class="password-note">
                The password must have at least 8 characters, at least 1 digit(s), at least 1 lower case letter(s),
                at least 1 upper case letter(s), at least 1 special character(s) such as *, -, or #</p>

            <label>Company email address <span>*</span></label>
            <input type="text" name="email" required>

            <label>Alternative email address </label>
            <input type="email" name="alternative_email" placeholder="(can be your personal email address)">

            <label>Mobile Number <span>*</span></label>
            <input type="text" name="mobile_number" required>

            <label>Duty Station <span>*</span></label>
            <select class="select-field" name="duty_station" required>
                <option value="" selected>Select one</option>
                <option>Manila Office</option>
                <option>Makati Office</option>
                <option>Taguig Office</option>
                <option>Ortigas Office</option>
                <option>Rizal Office</option>
            </select>

            <label>Department/Unit <span>*</span></label>
            <input type="text" name="department_unit" required>

        <hr>

        <div class="captcha-container">

            <label>Security Code <span>*</span></label>

            <div class="captcha-box">
            <span id="captchaText"></span>
            <button type="button" onclick="generateCaptcha()">↻</button>
            </div>

            <input type="text"
            id="captchaInput"
            placeholder="Enter the code above">


            <button
            type="button"
            class="verify-btn"
            onclick="checkCaptcha()">
            Verify CAPTCHA
            </button>

        <p id="captchaMessage"></p>

        </div>

        <div class="button-row">
            <button type="submit" class="create-btn">Create my new account</button>
            <button type="button" class="cancel-btn">Cancel</button>
        </div>

        <p class="required-note"><span>*</span> Required</p>

        </form>

    </div>
    </main>

</body>
<script src="newaccount.js"></script>
</html>