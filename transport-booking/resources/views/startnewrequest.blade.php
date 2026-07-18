<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HiW Corp Start New Request</title>

<link rel="stylesheet" href="{{ asset('startnewrequest.css') }}">

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
      <form action="{{ route('trips.store') }}" method="POST">
          @csrf

      <button type="button" class="request-btn">New Request</button>
      </section>

      <section class="request-details">

        <div class="form-row top-row">
        <div class="form-group traveller-group">
          <span class="icon">👤</span>
          <label>Traveller</label>
          <span class="traveller-name-display" style="font-weight: bold; font-size: 1rem; color: black; margin-left: 10px; display: inline-block; vertical-align: middle;">
                        {{ strtoupper(Auth::user()->last_name) }}, {{ Auth::user()->first_name }}
                    </span>
                    
                    <input type="hidden" name="traveller" value="{{ strtoupper(Auth::user()->last_name) }}, {{ Auth::user()->first_name }}">
                </div>
      </div>

        <div class="form-row">
        <div class="checkbox-group">
          <label>This booking is for someone else</label>
          <input type="checkbox" id="someoneElse">
        
        <div id="staffField" style="display:none;">
          <input type="text" placeholder="Enter Staff Name">
      </div>

      </div>
      </div>

        <div class="line"></div>

        <div class="form-row two-columns">
        <div class="form-group">
          <span class="icon">ℹ️</span>
          <label>No. of Passengers <span>*</span></label>
          <input type="number" name="passengers" value="">
      </div>

        <div class="form-group">
          <span class="icon">📘</span>
          <label>Budget Center <span>*</span></label>
        <input type="text">
      </div>
    </div>

        <div class="line"></div>

        <div class="form-row two-columns">
        <div class="form-group">
          <span class="icon">🚙</span>
          <label>Preferred Vehicle Type </label>
        <select>
          <option>Please select one</option>
          <option>Sedan</option>
          <option>Van</option>
          <option>SUV</option>
        </select>
      </div>

        <div class="form-group">
          <span class="icon">💼</span>
          <label>Purpose <span>*</span></label>
        <select>
          <option>Please select one</option>
          <option>Official Meeting</option>
          <option>Field Visit</option>
          <option>Airport Transfer</option>
        </select>
      </div>
    </div>

        <div class="line"></div>

      <div class="form-row">

      <div class="checkbox-group luggage-group">
        <span class="icon">🧳</span>
        <label class="cargo-label">Cargo & Luggage</label>
        <input type="checkbox">
        </div>
      </div>

</section>


<section class="journey-details">

    <div class="journey-header">
    <div class="journey-title">
        <h3>Journey Details</h3>
        <p>Configure your trip destinations, return options and schedule</p>
    </div>

    <div class="trip-type-container">
        <label for="tripType">
            Trip Type <span>*</span>
        </label>

        <select name="trip_type" id="tripType" required>
            <option value="" disabled selected>Please select one</option>
            <option value="roundtrip">Round-trip</option>
            <option value="oneway">One-way</option>
        </select>

      </div>
    </div>

    <!-- ROUND TRIP -->
    <div id="roundTripSection" style="display:none;">

        <div class="form-row">
        <div class="form-group">
    <label>Pick-up Location <span style="color: red;">*</span></label>
        
    <select
        name="pickup_location"
        id="roundtrip_pickup_location"
        required>

        <option value="" disabled selected>Please select one</option>
        <option value="Manila Office">Manila Office</option>
        <option value="Makati Office">Makati Office</option>
        <option value="Taguig Office">Taguig Office</option>
        <option value="Ortigas Office">Ortigas Office</option>
        <option value="Rizal Office">Rizal Office</option>
    </select>
</div>

<div class="form-group">
    <label>Destination <span style="color: red;">*</span></label>
    
    <select
        name="destination"
        id="roundtrip_destination"
        required>

        <option value="" disabled selected>Please select one</option>
        <option value="Manila Office">Manila Office</option>
        <option value="Makati Office">Makati Office</option>
        <option value="Taguig Office">Taguig Office</option>
        <option value="Ortigas Office">Ortigas Office</option>
        <option value="Rizal Office">Rizal Office</option>
        <option value="NAIA Terminal 1">NAIA Terminal 1</option>
        <option value="NAIA Terminal 2">NAIA Terminal 2</option>
        <option value="NAIA Terminal 3">NAIA Terminal 3</option>
        </select>
        </div>
        </div>

        <div class="form-row">
            <div class="form-group">
            <label>Start Date <span>*</span></label>        
              <input type="date">

            </div>

            <div class="form-group">
            <label>Travel Time <span>*</span></label>        
              <input type="time">

            </div>
        </div>

        <div class="form-row">
        <div class="form-group">
          <label> Destination<span>*</span></label>

        <select>
            <option value="">Please select one</option>
                <option>Manila Office</option>
                <option>Makati Office</option>
                <option>Taguig Office</option>
                <option>Ortigas Office</option>
                <option>Rizal Office</option>
                <option>NAIA Terminal 1</option>
                <option>NAIA Terminal 2</option>
                <option>NAIA Terminal 3</option>
        </select>
        </div>

        <div class="form-group">
          <label>Return Location<span>*</span></label>

        <select>
            <option value="">Please select one</option>
                <option>Manila Office</option>
                <option>Makati Office</option>
                <option>Taguig Office</option>
                <option>Ortigas Office</option>
                <option>Rizal Office</option>
        </select>
        </div>
        </div>

        <div class="form-row">

        <div class="form-group">
          <label>Return Date <span>*</span></label>
            <input type="date">
    </div>

    <div class="form-group">
        <label>Return Time <span>*</span></label>
        <input type="time">
    </div>

</div>

    </div>

    <!-- ONE WAY -->
    <div id="oneWaySection" style="display:none;">

        <div class="form-row">
        <div class="form-group">
    <label>Pick-up Location <span style="color: red;">*</span></label>
        
    <select
    name="pickup_location"
    id="oneway_pickup_location">

        <option value="" disabled selected>Please select one</option>
        <option value="Manila Office">Manila Office</option>
        <option value="Makati Office">Makati Office</option>
        <option value="Taguig Office">Taguig Office</option>
        <option value="Ortigas Office">Ortigas Office</option>
        <option value="Rizal Office">Rizal Office</option>
        </select>
        </div>

        <div class="form-group">
          <label>Destination <span style="color: red;">*</span></label>
    
    <select
    name="destination"
    id="oneway_destination">

        <option value="" disabled selected>Please select one</option>
        <option value="Manila Office">Manila Office</option>
        <option value="Makati Office">Makati Office</option>
        <option value="Taguig Office">Taguig Office</option>
        <option value="Ortigas Office">Ortigas Office</option>
        <option value="Rizal Office">Rizal Office</option>
        <option value="NAIA Terminal 1">NAIA Terminal 1</option>
        <option value="NAIA Terminal 2">NAIA Terminal 2</option>
        <option value="NAIA Terminal 3">NAIA Terminal 3</option>
        </select>
        </div>
        </div>

        <div class="form-row">
            <div class="form-group">
            <label>Start Date <span>*</span></label>        
              <input type="date">
                
            </div>

            <div class="form-group">
            <label>Travel Time <span>*</span></label>        
              <input type="time">
            </div>
        </div>

    </div>

    <div class="trip-notes">
        <label>Trip Notes</label>  
      <textarea
        name="trip_notes"
        id="trip_notes"
        placeholder="Enter trip notes here..."></textarea>

    </div>

    <div class="form-buttons">
        <button type="submit" class="submit-btn">Submit</button>
        <button type="button"
        class="cancel-btn"
        onclick="window.location.href='{{ url('/home') }}'">Cancel</button>
    </div>

</section>
</form>

<script src="startnewrequest.js"></script>
</body>
</html>
