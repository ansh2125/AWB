<?php include('includes/header.php'); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <h1 class="display-4 text-primary">Welcome <?php echo $_SESSION['fullname']; ?>!</h1>
        <p class="lead">Your travel journey starts here.</p>
        <hr class="my-4">
    </div>
</div>

<div class="container mt-4">

    <ul class="nav nav-tabs" id="travelTabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="train-tab" data-toggle="tab" href="#train" role="tab" aria-controls="train" aria-selected="true">
                <i class="fas fa-train"></i> Train
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="false">
                <i class="fas fa-plane"></i> Flight
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="bus-tab" data-toggle="tab" href="#bus" role="tab" aria-controls="bus" aria-selected="false">
                <i class="fas fa-bus"></i> Bus
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">
                <i class="fas fa-hotel"></i> Hotel
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="package-tab" data-toggle="tab" href="#package" role="tab" aria-controls="package" aria-selected="false">
                <i class="fas fa-box"></i> Book AWB Package
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="awb-tab" data-toggle="tab" href="#awb" role="tab" aria-controls="awb" aria-selected="false">
                <i class="fas fa-ticket-alt"></i> Book AWB Professionals 
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="pnr-tab" data-toggle="tab" href="#pnr" role="tab" aria-controls="pnr" aria-selected="false">
                <i class="fas fa-info-circle"></i> Check PNR Status
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="live-status-tab" data-toggle="tab" href="#live-status" role="tab" aria-controls="live-status" aria-selected="false">
                <i class="fas fa-clock"></i> Live Train Status
            </a>
        </li>
    </ul>

    <div class="tab-content mt-3" id="travelTabsContent">
        <div class="tab-pane fade show active" id="train" role="tabpanel" aria-labelledby="train-tab">
            <div class="border p-4 mx-auto" style="max-width: 500px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); border-radius: 8px;">
                <h5 class="text-center">Select Journey Details</h5>
                <div class="form-group">
                    <label for="fromLocation">From:</label>
                    <input type="text" class="form-control" id="fromLocation" placeholder="New Delhi">
                </div>
                <div class="form-group">
                    <label for="toLocation">To:</label>
                    <input type="text" class="form-control" id="toLocation" placeholder="Kanpur">
                </div>
                <div class="form-group">
                    <label for="journeyDate">Travel Date:</label>
                    <input type="date" class="form-control" id="journeyDate">
                </div>
                <div class="form-group">
                    <label for="classSelect">Class:</label>
                    <select class="form-control" id="classSelect">
                        <option>All Class</option>
                        <option>Sleeper</option>
                        <option>AC Chair</option>
                        <option>AC Sleeper</option>
                        <option>General</option>
                    </select>
                </div>
                <button class="btn btn-primary btn-block mb-3" id="fetchTrains">Search Trains</button>

                <h6>Available Trains:</h6>
                <div class="list-group" id="trainList">
                    <li class="list-group-item">
                        <strong>Train 101</strong> - <span class="text-success">Available</span><br>
                        <small>GEN: 42, AC: 32</small>
                    </li>
                    <li class="list-group-item">
                        <strong>Train 102</strong> - <span class="text-danger">Waiting List</span><br>
                        <small>GEN: 0, AC: 0</small>
                    </li>
                    <li class="list-group-item">
                        <strong>Train 103</strong> - <span class="text-success">Available</span><br>
                        <small>GEN: 30, AC: 15</small>
                    </li>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="flight" role="tabpanel" aria-labelledby="flight-tab">
            <div class="border p-4 mx-auto" style="max-width: 500px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); border-radius: 8px;">
                <h5 class="text-center">Flight Booking</h5>
                <div class="form-group">
                    <label for="fromFlight">From:</label>
                    <input type="text" class="form-control" id="fromFlight" placeholder="New Delhi">
                </div>
                <div class="form-group">
                    <label for="toFlight">To:</label>
                    <input type="text" class="form-control" id="toFlight" placeholder="Mumbai">
                </div>
                <div class="form-group">
                    <label for="flightDate">Travel Date:</label>
                    <input type="date" class="form-control" id="flightDate">
                </div>
                <button class="btn btn-primary btn-block mb-3" id="fetchFlights">Search Flights</button>

                <h6>Available Flights:</h6>
                <ul class="list-group" id="flightList">
                    <li class="list-group-item">Flight AI-101 - <span class="text-success">Available</span></li>
                    <li class="list-group-item">Flight AI-102 - <span class="text-danger">Full</span></li>
                    <li class="list-group-item">Flight AI-103 - <span class="text-success">Available</span></li>
                </ul>
            </div>
        </div>

        <div class="tab-pane fade" id="pnr" role="tabpanel" aria-labelledby="pnr-tab">
            <div class="border p-4 mx-auto" style="max-width: 500px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); border-radius: 8px;">
                <h5 class="text-center">Check PNR Status</h5>
                <div class="form-group">
                    <label for="pnrNumber">PNR Number:</label>
                    <input type="text" class="form-control" id="pnrNumber" placeholder="Enter PNR Number">
                </div>
                <button class="btn btn-primary btn-block mb-3" id="checkPNR">Check Status</button>

                <h6>PNR Status:</h6>
                <div id="pnrStatus" class="mt-2">
                    <p>No status available.</p>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="live-status" role="tabpanel" aria-labelledby="live-status-tab">
            <div class="border p-4 mx-auto" style="max-width: 500px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); border-radius: 8px;">
                <h5 class="text-center">Live Train Status</h5>
                <div class="form-group">
                    <label for="trainNumber">Train Number:</label>
                    <input type="text" class="form-control" id="trainNumber" placeholder="Enter Train Number">
                </div>
                <button class="btn btn-primary btn-block mb-3" id="checkLiveStatus">Check Status</button>

                <h6>Live Status:</h6>
                <div id="liveStatus" class="mt-2">
                    <p>No status available.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<br>

<?php include('includes/footer.php'); ?>
<?php
/*
  ************************************************************
  *                        AWB                                 *
  *                       Copyright                              *
  *   Gyan Prakash Pandey   *   Ansh Shukla   *   Shiwan Tripathi   *
  *   Code is open source, but please do not remove this credit. *
  ************************************************************
*/?>