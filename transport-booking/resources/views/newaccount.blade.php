<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HiW Corp Create New Account</title>

<link rel="stylesheet" href="{{ asset('newaccount.css') }}">

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