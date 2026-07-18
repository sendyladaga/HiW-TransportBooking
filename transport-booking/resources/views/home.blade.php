<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HiW Corp HOME:TransportBooking</title>

     <link rel="stylesheet" href="{{ asset('homepage.css') }}">

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
        <div class="dropdown-item">Sign Out</div>
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

<script src="home page.js"></script>
</body>
</html>
