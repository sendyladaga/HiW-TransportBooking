<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HiW Corp HOME:TransportBooking</title>

<link rel="stylesheet" href="{{ asset('trips-page.css') }}">

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
