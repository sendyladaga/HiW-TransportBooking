<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HiW Corp HOME:TransportBooking</title>

<link rel="stylesheet" href="{{ asset('trips-page.css') }}">

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


/* CONTENT AREA */
.content-area {
    flex: 1;
    min-width: 0;
    padding: 35px 45px;
    background-color: #f4f6f8;
}

.content-area h2 {
    margin: 0 0 12px;
    font-size: 22px;
    color: #333333;
}


/* WHITE CARD */
.trip-panel {
    width: 100%;
    max-width: 1050px;
    min-height: 250px;

    background-color: #ffffff;
    border: 1px solid #d5dbe0;
    border-radius: 8px;

    padding: 22px 25px;
    box-shadow: 0 3px 12px rgba(0, 0, 0, 0.08);
}


/* STATUS FILTERS */
.status-filters {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 12px;

    margin-bottom: 18px;
    padding-bottom: 12px;
    border-bottom: 1px solid #dddddd;
}

.status-item {
    display: inline-flex;
    align-items: center;
    gap: 4px;

    color: #333333;
    font-size: 12px;
    font-weight: 500;
    white-space: nowrap;
}

.status-item input[type="checkbox"] {
    width: 13px;
    height: 13px;
    margin: 0;
    accent-color: #168fd0;
}

/* TABLE */
.table-container {
    width: 100%;
    overflow-x: auto;
}

.trips-table {
    width: 100%;
    min-width: 850px;
    table-layout: fixed;
    border-collapse: collapse;
}

.trips-table th {
    padding: 10px 8px;
    color: #222222;
    font-size: 11px;
    font-weight: 700;
    text-align: left;
    vertical-align: top;
}

.trips-table td {
    padding: 12px 8px;
    color: #444444;
    font-size: 11px;
    line-height: 1.4;
    text-align: left;
    vertical-align: top;
}

.trips-table th i {
    margin-right: 4px;
    color: #159eca;
}


/* COLUMN WIDTHS */
.status-column {
    width: 10%;
}

.reference-column {
    width: 15%;
}

.triptype-column {
    width: 15%;
}

.hub-column {
    width: 20%;
}

.date-column {
    width: 17%;
}

.destination-column {
    width: 18%;
}

.action-column {
    width: 10%;
}


/* STATUS DOT */
.status-cell {
    text-align: center !important;
}

.status-dot {
    display: inline-block;
    width: 8px;
    height: 8px;
    margin-top: 3px;
    background-color: #f5b92d;
    border-radius: 50%;
}


/* VIEW BUTTON */
.view-button {
    padding: 5px 9px;
    color: #ffffff;
    background-color: #208fc3;
    border: none;
    font-size: 10px;
    font-weight: 700;
    cursor: pointer;
}

.view-button:hover {
    background-color: #187aa8;
}


/* RESPONSIVE DESIGN */

@media screen and (max-width: 800px) {

    .page-wrapper {
        width: 100%;
        margin: 0;
        border: none;
    }

    .top-header {
        padding-left: 15px;
    }

    .brand-section h1 {
        font-size: 23px;
    }

    .company-logo {
        width: 50px;
    }

    .sidebar {
        width: 170px;
    }

    .menu-link {
        padding-left: 18px;
        font-size: 30px;
    }

    .content-area {
        padding-right: 15px;
    }

    .trip-panel {
        padding-right: 15px;
    }

    .trips-table {
        min-width: 700px;
    }
}

@media screen and (max-width: 520px) {

    .top-header {
        height: 60px;
    }

    .brand-section h1 {
        font-size: 19px;
        letter-spacing: -0.5px;
    }

    .company-logo {
        width: 42px;
        margin-right: 8px;
    }

    .user-profile {
        width: 34px;
        height: 34px;
    }

    .main-layout {
        display: block;
    }

    .sidebar {
        width: 100%;
        min-height: auto;
        padding: 0;
    }

    .sidebar nav {
        display: flex;
    }

    .menu-link {
        flex: 1;
        padding: 14px 20px;
        font-size: 24px;
        text-align: center;
    }

    .menu-link + .menu-link {
        margin-top: 0;
    }

    .content-area {
        padding: 20px 12px;
    }

    .content-area h2 {
        margin-left: 0;
    }

    .status-filters {
        flex-wrap: wrap;
    }
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


<!-- CONTENT -->
            <section class="content-area">

                <h2>MY TRIPS</h2>

                <div class="trip-panel">

                    <!-- STATUS FILTERS -->
                    <div class="status-filters">

                        <label class="status-item submitted-status">
                            Submitted
                            <input type="checkbox">
                        </label>

                        <label class="status-item">
                            Scheduled
                            <input type="checkbox">
                        </label>

                        <label class="status-item">
                            In Progress
                            <input type="checkbox">
                        </label>

                        <label class="status-item">
                            Completed
                            <input type="checkbox">
                        </label>

                        <label class="status-item">
                            Cancelled
                            <input type="checkbox">
                        </label>

                    </div>


                    <!-- TRIPS TABLE -->
                    <div class="table-container">

                        <table class="trips-table">

                            <thead>
                                <tr>
                                    <th class="status-column">Status</th>

                                    <th class="reference-column">
                                        Trip Reference
                                    </th>

                                    <th class="triptype-column">
                                        Trip Type
                                    </th>

                                    <th class="hub-column">
                                        Pick-up Location
                                    </th>

                                    <th class="destination-column">
                                        <i class="fa-solid fa-location-dot"></i>
                                        Destination
                                    </th>

                                    <th class="action-column"></th>
                                </tr>
                            </thead>

                <tbody>
                    @foreach($trips as $trip)
                    <tr>
                        <td>{{ $trip->status }}</td>
                        <td>{{ $trip->trip_reference }}</td>
                        <td>{{ $trip->trip_type }}</td>
                        <td>{{ $trip->pickup_location }}</td>
                        <td>{{ $trip->destination }}</td>
                        <td>
                        <button type="button" class="view-button">VIEW</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

                        </table>

                    </div>

                </div>

            </section>

        </main>

    </div>

    
<script src="trip_page.js"></script>
</body>
</html>
