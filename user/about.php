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
    <title>Transaction</title>
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
                <a href="#" class="brand-logo center">About Us</a>
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
            <h5>About Us</h5>
        </div>
        <div class="workspace padding">
            <div class="row center">
                <div class="col s2 l4"></div>
                <div class="col s8 l4">
                    <div class="logo_about z-depth-1">
                        
                    </div>
                </div>
                <div class="col s2 l4"></div>
            </div>
            <div class="row center">
                <div class="col s2 l4"></div>
                <div class="col s8 l4">
                    <div class="row">
                        <p class="no-margin"><strong>Owned By: &nbsp;</strong>Siham3M Multi Activities</p>
                    </div>
                    <div class="row no-margin">
                        <p class="no-margin">AlSahafa east - Block 36 - Near Canar</p>
                    </div>
                    <div class="row">
                        <p>+249910008878 -- +249912409222</p>
                    </div>
                </div>
                <div class="col s2 l4"></div>
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