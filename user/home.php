<?php 
	session_start();
//include('connectdb.php');	
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>First Step</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" media="screen" href="assets/css/materialize.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" media="screen" href="assets/css/master.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <!-- Navbar -->
    <header class="vis-on-med">
        <div class="navbar-fixed">
            <nav class="vis-on-med">
                <div class="nav-wrapper teal lighten-1">
                    <a href="#" data-target="slide-out" class="sidenav-trigger left"><i class="material-icons">menu</i></a>
                    <a href="#" class="brand-logo center">Choose Type</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Side Nav -->
    <?php
    include_once("include/nav.php");
    ?>
    <div class="page no-padding">
        <div class="no-padding">
            <div class="carousel carousel-slider">
                <a class="carousel-item" href="#one!"><img src="assets/img/ad/706735.png"></a>
                <a class="carousel-item" href="#two!"><img src="assets/img/ad/red.jpg"></a>
                <a class="carousel-item" href="#three!"><img src="assets/img/ad/tokyo.png"></a>
                <a class="carousel-item" href="#four!"><img src="assets/img/ad/Ubuntu Blue.png"></a>
            </div>
        </div>
    </div>
    <div class="page">
        <div class="row">
            <div class="col s12 l6">
                <div class="card teal">
                    <a href="request_trip.php">
                        <div class="card-image waves-effect center waves-block waves-light">
                            <i class="material-icons white-text">
                                <h1>airport_shuttle</h1>
                            </i>
                        </div>
                    </a>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Request Trip<i class="material-icons right">more_vert</i></span>
                        <p><a href="request_trip.php" class="white-text">Request Now</a></p>
                    </div>
                    <div class="card-reveal blue lighten-4">
                        <span class="card-title grey-text text-darken-4">Request Trip<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        <p><a href="request_trip.php" class="blue-text">Request Now</a></p>
                    </div>
                </div>
            </div>
            <div class="col s12 l6">
                <div class="card teal lighten-2">
                    <a href="book.php">
                        <div class="card-image waves-effect center waves-block waves-light">
                            <i class="material-icons white-text">
                                <h1>book</h1>
                            </i>
                        </div>
                    </a>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Book a Ticket<i class="material-icons right">more_vert</i></span>
                        <p><a href="book.php" class="white-text">Book Now</a></p>
                    </div>
                    <div class="card-reveal teal lighten-4">
                        <span class="card-title grey-text text-darken-4">Book a Ticket<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        <p><a href="book.php" class="teal-text">Book Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Import Jquery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- Import Materialize JavaScrip -->
    <script src="assets/js/materialize.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="assets/js/$cript.js"></script>
</body>

</html>