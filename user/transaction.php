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
                <a href="#" class="brand-logo center">My Transaction</a>
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
            <h5>Transaction</h5>
        </div>
            <?php
            $userid =$_SESSION['u_id'];
            $sqls   ="SELECT * FROM `bookings`as a,`agencies`as b ,`destination`as c WHERE a.`agency_id`=b.`agency_id`and a.`trip_des`=c.`desitination_id` and `user_id`='$userid'";
            $result =$mysqli->query($sqls);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
            ?>
        <div class="workspace">
            <table class="centered highlight responsive">
                <thead>
                    <tr>
                        <th>Detail</th>
                        <th>Value</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Destination</td>
                        <td>From <?php echo $row['from'];?> To <?php echo $row['to'];?></td>
                    </tr>
                    <tr>
                        <td>Passenger Phone</td>
                        <td><?php echo $row['passenger_phone'];?></td>
                    </tr>
                    <tr>
                        <td>Passenger_Name</td>
                        <td><?php echo $row['passenger_name'];?></td>
                    </tr>
                    <tr>
                        <td>Agency Name</td>
                        <td><?php echo $row['agency_name_english'];?></td>
                    </tr>
                    <tr>
                        <td>Amout</td>
                        <td><?php echo $row['t_price'];?></td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td><?php echo $row['booking_date'];?></td>
                    </tr>
                    <tr>
                        <td>Time</td>
                        <td><?php echo $row['booking_time'];?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><?php
                           if($row['payment_status']==0){
                           echo"Not Traveled";
                           }else if($row['payment_status']==1){
                               echo"Traveled";
                           }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="row"></div>
            <?php
                                }
                            }
            ?>




    <!-- Import Jquery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- Import Materialize JavaScrip -->
    <script src="assets/js/materialize.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="assets/js/$cript.js"></script>
</body>

</html>