<?php 
	session_start();
//include('connectdb.php');	
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('../admin/incloud/condb.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Request Trip</title>
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
            <a onclick="goBack()" class="sidenav-trigger left"><i class="material-icons">arrow_back</i></a>
            <a href="#" class="brand-logo center">Ticket Status</a>
        </div>
    </nav>

    <!-- Side Nav -->
     <?php
    include_once("include/nav.php");
    ?>

    <div class="requestPage">
        <div class="">
            <div class="row">
                <div class="col s12 no-padding">
                    <ul class="tabs teal lighten-1">
                        <li class="tab col s6"><a class="active" href="#confirmed">Confirmed</a></li>
                        <li class="tab col s6"><a href="#notConfirmed">Not Confirmed</a></li>
                    </ul>
                </div>

                <!-- Request Trip -->
                <div id="confirmed" class="col s12">
                    <div class="workspace z-depth-5">
                        <div class="row no-margin">
                            <div class="col s12">
                                <blockquote>
                                    <h5 class="no-margin">Choose Record</h5>
                                </blockquote>
                            </div>
                        </div>
                        <form action="">
                            <div class="row">
                            </div>
                            <div class="row">
                                <div class="col s2 l2"></div>
                                <div class="input-feild col s8 l8">
                                   <?php
                            if (isset($_GET['r_id'])){
                            $rid    =$_GET['r_id'];
                            $userid =$_SESSION['u_id'];
                            $sqls   ="SELECT * FROM `special_trip_request` WHERE `user_id`='$userid' and `status`='2' and `request_id`='$rid' ";
                            $result =$mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
                        <div class="row">
                            <div class="col s2 l2"></div>
                            <div class="col center s8 l8">
                                <a style="width: 100%;" href="trip_recordc.php?r_id=<?php echo $row['request_id'];?>" class="btn waves-effect waves-light center"><?php echo $row['pickup_loctions'];?>- <?php echo $row['dropoff_location'];?> - <?php echo $row['date'];?></a>
                            </div>
                            <div class="col s2 l2"></div>
                        </div>
                        <?php
                                }
                            }else{
                                    ?>
                              <div class="row">
                            <div class="col s2 l2"></div>
                            <div class="col center s8 l8">
                                <a style="width: 100%;background-color:#ff8a80; !importnt" href="#" class="btn waves-effect waves-light center">No Trip Confirmed Yet</a>
                            </div>
                            <div class="col s2 l2"></div>
                        </div>  
                            <?php
                            }
                            }
                        ?>
                                </div>
                                <div class="col s2 l2"></div>
                            </div>
                        </form>
                    </div>
                    <div class="row padding">
                        <div class="row hide-on-med-and-down" style="padding: 10px;">
                            <a class="btn-floating waves-effect waves-light left pulse red accent-1" onclick="goBack()"><i
                                    class="material-icons">arrow_back</i></a>
                        </div>
                    </div>
                </div>

                <!-- Trip Status -->
                <div id="notConfirmed" class="col s12">
                    <div class="workspace z-depth-5">
                        <div class="row no-margin">
                            <div class="col s12">
                                <blockquote>
                                    <h5 class="no-margin">Choose Record</h5>
                                </blockquote>
                            </div>
                        </div>
                        <div class="row" style="padding: 0px 10px;">

                        </div>
                         <?php
                            if (isset($_GET['r_id'])){
                            $rid    =$_GET['r_id'];
                            $userid =$_SESSION['u_id'];
                            $sqls   ="SELECT * FROM `special_trip_request`as a ,`sptrip` as b WHERE a.`trip_type`=b.`ttype_id` and `user_id`='$userid' and `status`='1' and `request_id`='$rid' ";
                            $result =$mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
                        <div class="row">
                            <div class="col s2 l2"></div>
                            <div class="col center s8 l8">
                                <a style="width: 100%;" href="trip_record.php?r_id=<?php echo $row['request_id'];?>" class="btn waves-effect waves-light center"><?php echo $row['pickup_loctions'];?>- <?php echo $row['dropoff_location'];?> - <?php echo $row['date'];?></a>
                            </div>
                            <div class="col s2 l2"></div>
                        </div>
                        <?php
                                }
                            }else{
                                    ?>
                              <div class="row">
                            <div class="col s2 l2"></div>
                            <div class="col center s8 l8">
                                <a style="width: 100%;background-color:#9bdef7; !importnt" href="#" class="btn waves-effect waves-light center">No Request Pending</a>
                            </div>
                            <div class="col s2 l2"></div>
                        </div>  
                            <?php
                            }
                            }
                        ?>
                    </div>
                    <div class="row padding">
                        <div class="row hide-on-med-and-down" style="padding: 10px;">
                            <a class="btn-floating waves-effect waves-light left pulse red accent-1" onclick="goBack()"><i
                                    class="material-icons">arrow_back</i></a>
                        </div>
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