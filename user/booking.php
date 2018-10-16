<?php
	session_start();
include('../admin/incloud/condb.php');
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bookings</title>
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
    <nav class="vis-on-med">
        <div class="nav-wrapper teal lighten-1">
            <a href="#" data-target="slide-out" class="sidenav-trigger left"><i class="material-icons">menu</i></a>
            <a href="#" class="brand-logo center">Bookings</a>
        </div>
    </nav>

    <!-- Side Nav -->
    <?php
    include_once("include/nav.php");
    ?>
    <div class="page">
        <div class="row no-padding">
            <div class="center hide-on-med-and-down">
                <a class="btn-floating waves-effect waves-light left pulse red accent-1" onclick="goBack()"><i class="material-icons">arrow_back</i></a>
                <h5>Choose Date</h5>
            </div>
        </div>
        <div class="workspace">
                        <?php
                            $userid =$_SESSION['u_id'];
                            $sqls   ="SELECT * FROM `special_trip_request` WHERE `user_id`='$userid'";
                            $result =$mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
            <form action="">
                <div class="row">
                    <div class="col s12 12 center">
                        <a href="myBookings.php?r_id=<?php echo $row['request_id'];?>" class="btn waves-effect waves-light teal" style="width: 80%;"><?php echo $row['date'];?></a>
                    </div>
                </div>
            </form>
                        <?php
                                }
                            }
                        ?>
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