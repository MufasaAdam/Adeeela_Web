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
    <title>Contact Us</title>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <div class="navbar-fixed vis-on-med">
        <nav class="">
            <div class="nav-wrapper teal lighten-1">
                <a href="home.php" class="sidenav-trigger left"><i class="material-icons">arrow_back</i></a>
                <a href="#" class="brand-logo center">Contact Us</a>
            </div>
        </nav>
    </div>

    <!-- Side Nav -->
    <?php
    include_once("include/nav.php");
    ?>

    <div class="page">
        <div class="center hide-on-med-and-down">
            <a class="btn-floating waves-effect waves-light left pulse red accent-1" onclick="goBack()"><i class="material-icons">arrow_back</i></a>
            <h5>Contact Us</h5>
        </div>
        <div class="workspace padding">
            <div class="row">
                <div class="col s12 m4 l3">
                    <div class="card-panel indigo darken-4 center">
                        <span class="">
                            <a href="https://www.facebook.com/Adeeela.sd/" data-positio="bottom" class="tooltipped"
                                data-tooltip="Our facebook Page"><i class="fa fa-facebook fa-4x white-text"></i></a>
                        </span>
                    </div>
                </div>
                <div class="col s12 m4 l3">
                    <div class="card-panel blue lighten-1 center">
                        <span class="">
                            <a href="https://twitter.com/Adeeela_app/" data-positio="bottom" class="tooltipped"
                                data-tooltip="Our Twitter Page"><i class="fa fa-twitter fa-4x white-text"></i></a>
                        </span>
                    </div>
                </div>
                <div class="col s12 m4 l3">
                    <div class="card-panel  red accent-2 center">
                        <span class="">
                            <a href="https://www.instagram.com/adeeela.app/" data-positio="bottom" class="tooltipped"
                                data-tooltip="Our Instagram Page"><i class="fa fa-instagram fa-4x white-text"></i></a>
                        </span>
                    </div>
                </div>
                <div class="col s12 m4 l3">
                    <div class="card-panel  red center">
                        <span class="">
                            <a href="" data-positio="bottom" class="tooltipped"
                                data-tooltip="Our YouTube Page"><i class="fa fa-youtube fa-4x white-text"></i></a>
                        </span>
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