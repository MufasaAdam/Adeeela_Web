<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" />
    <link type="text/css" rel="stylesheet" href="assets/css/icons.css">
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="assets/css/master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bookings</title>
</head>

<body>
    <main>
        <nav>
            <div class="nav-wrapper teal lighten-2">
                <a href="#" data-activates="slide-out" class="button-collapse left">
                    <i class="glyphicon glyphicon-menu-hamburger"></i>
                </a>
            </div>
        </nav>
        <ul id="slide-out" class="side-nav fixed borderNoShad teal lighten-2">
            <ul class="collapsible" data-collapisble="accordion">
                <li class="teal lighten-2">
                    <a class="collapsible-header waves-effect white-text">Manage
                        <i class="glyphicon glyphicon-menu-down right white-text"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul class="orange lighten-5">
                            <li>
                                <a href="agency.php" class="waves-effect waves-light">Agency</a>
                            </li>
                            <li>
                                <a href="city.php" class="waves-effect waves-light">City</a>
                            </li>
                            <li>
                                <a href="destination.php" class="waves-effect waves-light">Destinations</a>
                            </li>
                            <li>
                                <a href="trip.php" class="waves-effect waves-light">Trip</a>
                            </li>
                            <li>
                                <a href="bus.php" class="waves-effect waves-light">Bus</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="teal lighten-2">
                    <a class="collapsible-header waves-effect active white-text">Reports
                        <i class="glyphicon glyphicon-menu-down right white-text"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul class="orange lighten-5">
                            <li class="active">
                                <a href="booking.php" class="waves-effect waves-light">Bookings</a>
                            </li>
                            <li>
                                <a href="agencies_reports.php" class="waves-effect waves-light">Agencies</a>
                            </li>
                            <li>
                                <a href="user.php" class="waves-effect waves-light">Users</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </ul>
        <div class="workspace">
            <div class="mainCnt white">
                <form action="">
                    <div class="row">
                        <div class="col s12 l12">
                            <blockquote>
                                <h4>Customer's Booking Info</h4>
                            </blockquote>
                        </div>
                    </div>
                    <table class="highlight centered responsive-table bookingTable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Passenger's Name</th>
                                <th>Phone No.</th>
                                <th>Trip</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ahmed Mohammed</td>
                                <td>0912345678</td>
                                <td>Khartoum - Attbara</td>
                                <td>30/8/2018</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mohammed</td>
                                <td>0987654321</td>
                                <td>Khartoum - Port Sudan</td>
                                <td>1/9/2018</td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </main>

    <footer class="page-footer a orange darken-1">
        <div class="footer-copyright teal lighten-2">
            <div class="container center">
                Copyright © 2018, Siham_3M
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/my$cript.js"></script>
</body>

</html>