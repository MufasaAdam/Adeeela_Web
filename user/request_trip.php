<?php
	session_start();
include('../admin/incloud/condb.php');
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
if(isset($_POST['send'])){
    $user         =$_SESSION['u_id'];
    $typoftrip    =$_POST['typoftrip'];
    $bustype      =$_POST['bustype'];
    $numofbus     =$_POST['numofbus'];
    $pickup       =$_POST['pickup'];
    $dropoff      =$_POST['dropoff'];
    $date         =$_POST['date'];
    $phone_number =$_POST['phone_number'];
    $sql          ="INSERT INTO `special_trip_request`(`trip_type`, `bus_type`, `number_of_buses`, `pickup_loctions`, `dropoff_location`, `date`, `phone_number`,`status`, `user_id`) VALUES ('$typoftrip','$bustype','$numofbus','$pickup','$dropoff','$date','$phone_number','1','$user')";
    if($mysqli->query($sql)===true){
                 ?><script>alert('<?php echo'Your Request is made successfuly';?>');</script><?php
        
                                   }else{
        echo"Error:".$sqlup."<br>".$mysqli->error;
    }
}
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
            <a href="#" class="brand-logo center">Request Trip</a>
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
                        <li class="tab col s6"><a class="active" href="#requestTrip">Request Trip</a></li>
                        <li class="tab col s6"><a href="#tripStatus">Trip Status</a></li>
                    </ul>
                </div>

                <!-- Request Trip -->
                <div id="requestTrip" class="col s12">
                    <div class="workspace z-depth-5">
                        <div class="row no-margin">
                            <div class="col s12">
                                <blockquote>
                                    <h5 class="no-margin">Please fill the Special trip details</h5>
                                </blockquote>
                            </div>
                        </div>
                        <form action="request_trip.php" method="post">
                            <div class="row">
                                <div class="input-field col s12 l4">
                                    <select name="typoftrip" id="">
                                        <option value="" disabled selected>Select Type</option>
                                                     <?php
                            $sqls = "SELECT * FROM `sptrip`";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
                                        <option value="<?php echo $row['ttype_id'];?>"><?php echo $row['trip_type_en'];?></option>
                                       <?php
                                }
                            }
                                        ?>
                                    </select>
                                    <label for="">Type of Trip</label>
                                </div>
                                <div class="input-field col s12 l4">
                                    <select name="bustype" id="">
                                        <option value="" disabled selected>Select Type</option>
                                           <?php
                            $sqls = "SELECT * FROM `sptrip`";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
                                        <option value="<?php echo $row['bus_type'];?>"><?php echo $row['bus_type'];?> Seats</option>
                                        <?php
                                }
                            }
                                        ?>
                                    </select>
                                    <label for="">Type of Bus</label>
                                </div>
                                <div class="input-field col s12 l4">
                                    <input type="number" name="numofbus" id="no_ofBuses">
                                    <label for="no_ofBuses">Number of Buses</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s1"></div>
                                <div class="input-field col s12 l5">
                                    <input type="text" name="pickup" id="locaiton_from">
                                    <label for="location_from">Pickup locations</label>
                                </div>
                                <div class="input-field col s12 l5">
                                    <input type="text" name="dropoff" id="locaiton_to">
                                    <label for="location_to">Dropoff locations</label>
                                </div>
                                <div class="col s1"></div>
                            </div>
                            <div class="row">
                                <div class="col s1"></div>
                                <div class="input-field col s12 l5">
                                    <input type="text" name="date" class="datepicker">
                                    <label for="">Date</label>
                                </div>
                                <div class="input-field col s12 l5">
                                    <input type="number" name="phone" id="phone_number">
                                    <label for="phone_number">Phone Number</label>
                                </div>
                                <div class="col s1"></div>
                            </div>
                            <div class="row">
                                <div class="input-feild col s12 l12">
                                    <input style="width: 100%;" class="btn waves-effect waves-light teal white-text" type="submit" name="send" value="Send Request">
                                </div>
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
                <div id="tripStatus" class="col s12">
                    <div class="workspace z-depth-5">
                        <div class="row no-margin">
                            <div class="col s12">
                                <blockquote>
                                    <h5 class="no-margin">Your requests</h5>
                                </blockquote>
                            </div>
                        </div>
                             <?php
                            $sqls = "SELECT * FROM `special_trip_request` where user_id='".$_SESSION['u_id']."'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
                        <div class="row" style="padding: 0px 10px;">
                            <table class="responsive centered highlight bordered requestTable">
                                <tbody>
                                    <tr>
                                        <th>Trip Type</th>
                                        <td><?php echo $row['trip_type'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Bus Type</th>
                                        <td><?php echo $row['bus_type'];?> Seats</td>
                                    </tr>
                                    <tr>
                                        <th>Bus Count</th>
                                        <td><?php echo $row['number_of_buses'];?></td>
                                    </tr>
                                    <tr>
                                        <th>From</th>
                                        <td><?php echo $row['pickup_loctions'];?></td>
                                    </tr>
                                    <tr>
                                        <th>To</th>
                                        <td><?php echo $row['dropoff_location'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Trip Date</th>
                                        <td><?php echo $row['date'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td><?php echo $row['phone_number'];?></td>
                                    </tr>
                                    <tr>
                                        <th>Date</th>
                                        <td><?php $tody=date('Y-M-D');echo $tody;?></td>
                                    </tr>
                                    <tr>
                                        <th>Stauts</th>
                                        <td><?php if($row['status']==1){echo"pending";}else if($row['status']==2){echo"complet";}else if($row['status']==3){echo"cancel";}?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                           <?php
                                }
                            }
                                        ?>
                        <div class="row">
                            <div class="col s12 l12">
                                <button style="width: 100%;" class="btn waves-effect waves-light center teal white-text">Refresh Page</button>
                            </div>
                        </div>
                    </div>
                    <div class="row padding">
                        <div class="row hide-on-med-and-down" style="padding: 10px;">
                            <a class="btn-floating waves-effect waves-light left pulse red accent-1"
                                onclick="goBack()"><i class="material-icons">arrow_back</i></a>
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