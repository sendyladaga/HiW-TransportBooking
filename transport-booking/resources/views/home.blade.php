<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HiW Corp HOME:TransportBooking</title>

     <link rel="stylesheet" href="{{ asset('homepage.css') }}">

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  background-color: white;
  color: black;
}

/* TOP BAR */
.top-bar {
  height: 58px;
  width: 100%;
  background-color: white;
  border-bottom: 1px solid #e5e5e5;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 8px;
}

.brand {
  display: flex;
  align-items: center;
  gap: 0px;
}

.logo {
  width: 115px;
  height: auto;
  margin-top: 12px;
  margin-left: -10px;
  margin-right: -10px;
}

.brand h2 {
  font-size: 20px;
  font-weight: bold;
}

/* PROFILE */
.profile-circle {
    width: 42px;
    height: 42px;
    border: 1px solid #8a8a8a;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 11px;
    font-weight: bold;
    background: #fff;
    margin-right: 10px;
}

.profile-container {
    position: relative;
    margin-right: 10px;
}

.profile-dropdown {
    position: absolute;
    top: 50px;
    right: 0;
    width: 300px;   
    min-height: 60px;
    background: white;
    border-radius: 8px;
    display: none;
    z-index: 9999;
}

.profile-dropdown.show {
    display: block;
}

.dropdown-item {
    height: 60px;
    padding: 0 20px;
    cursor: pointer;
    transition: all 0.2s ease;
    display: flex;
    align-items: center;
    font-size: 14px;
    border-bottom: 1px solid rgba(0,0,0,0.08);
    box-sizing: border-box;
}

.dropdown-item:hover {
    background-color: #e8f3ff;
    color: #0078d4;
    font-weight: 600;
}

.dropdown-item:last-child {
    border-bottom: none;
}


/* PAGE LAYOUT */
.page-layout {
  display: flex;
}

.sidebar {
  width: 160px;
  min-height: calc(100vh - 58px);
  background-color: #2da4db;
  color: white;
  padding: 20px 0;
}

.nav-item{
  width:100%;
  margin:0;
  padding:15px 30px;
  font-size:20px;
  cursor:pointer;
  box-sizing:border-box;
}

.nav-item:hover{
    background:rgba(255,255,255,0.55);
}

.nav-item.active{
  background:rgba(255,255,255,0.30);
}

/* MAIN CONTENT */

.main-content {
  flex: 1;
  padding: 20px;
  box-sizing: border-box;
  overflow-x: hidden;
}

.transport-box h1 {
  font-size: 25px;
  margin-bottom: 16px;
  font-weight: bold;
}

.transport-box {
  background-color: #f4f4f4;
  border: 2px solid #2da4db;
  border-radius: 6px;
  padding: 20px;
  margin-bottom: 20px;
  width: 100%;
  box-sizing: border-box;
}

.transport-box h3 {
  font-size: 16px;
  margin-bottom: 10px;
}

.transport-box button {
  margin-bottom: 0;
}

/* BUTTON */

.request-btn{
    background-color:#2da4db;
    color:white;
    border:none;
    padding:9px 15px;
    border-radius:5px;
    font-size:13px;
    cursor:pointer;
    margin-bottom:20px;
    transition:0.3s;
}

.request-btn:hover{
    background-color:#257fa8;
    filter:brightness(85%)
}

.request-btn:active{
    transform:scale(0.97);
}

/* CARDS */
.card {
  background-color: white;
  width: 100%;
  box-sizing:border-box;
  min-height: 108px;
  border-radius: 8px;
  padding: 28px 20px;
  margin-bottom: 18px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
}

.card h3 {
  font-size: 15px;
  margin-bottom: 14px;
}

.card p {
  font-size: 12px;
}

.cards{
  display: flex;
  gap: 12px;
  width: 100%;
  box-sizing: border-box;
}

.card {
  flex: 1;
  min-width: 0;
  background-color: white;
  min-height: 108px;
  border-radius: 8px;
  padding: 28px 20px;
  box-sizing: border-box;
  margin-bottom: 18px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}
</style>

</head>
<body>

    <header class="top-bar">
        <div class="brand">
                <img class="logo" src="{{ asset('company-logo.png') }}" alt="Company Logo">
        <h2>TransportBooking</h2>
        </div>

      <div class="profile-container">
      <div class="profile-circle" onclick="toggleMenu()">
        {{ strtoupper(substr(Auth::user()->last_name, 0, 1) . substr(Auth::user()->first_name, 0, 1)) }}
      </div>
      </div>

      <div class="profile-dropdown" id="profileDropdown">
        <div class="dropdown-item">My Profile</div>
        <div class="dropdown-item" onclick="window.location.href='/'">Sign Out</div>
      </div>

    </header>

    <div class="page-layout">

    <aside class="sidebar">
      <p class="nav-item" onclick="window.location.href='{{ url('/home') }}'"> 🏠︎ Home</p>
      <p class="nav-item" onclick="window.location.href='{{ url('/trips') }}'"> ō͡≡o Trips</p>
    </aside>


    <main class="main-content">

      <section class="transport-box">
      <h3>Book Transport Request</h3>
        <a href="{{ url('/startnewrequest') }}" class="request-btn">Start New Request →</a>

      </section>

    <div class="cards">

      <div class="card">
      <h3>Upcoming Trip</h3>
      <p>No upcoming trip</p>
      </div>

      <div class="card">
      <h3>Rate Trips</h3>
      <p>Completed trip details here</p>
      </div>

    </div>
    </main>
    </div>

<script src="homepage.js"></script>
</body>
</html>
