<?php
	session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('../admin/incloud/condb.php');
if(isset($_POST['pasnger'])){
    $passname  =$_POST['passname'];
    $passnum   =$_POST['passnum'];
    $sqlup     ="UPDATE `bookings` SET `passenger_name`='$passname',`passenger_phone`='$passnum' WHERE `book_id`='".$_SESSION['book_id']."' and `user_id`='".$_SESSION['u_id']."'";
    if($mysqli->query($sqlup)===true){
                 ?><script>alert('<?php echo'Your Agancye added';?>');</script><?php
        header('location:payment.php?bookid='.$_SESSION['book_id'].'');
                                   }else{
        echo"Error:".$sql."<br>".$mysqli->error;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Trip Details</title>
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
    <div class="navbar-fixed">
        <nav class="vis-on-med">
            <div class="nav-wrapper teal lighten-1">
                <a onclick="goBack()" class="sidenav-trigger left"><i class="material-icons">arrow_back</i></a>
                <a href="#" class="brand-logo center">Trip Details</a>
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
            <h5>Trip Details</h5>
        </div>
        <div class="workspace">
                         <?php
                        $userid=$_SESSION['u_id'];
                        $tripid=$_GET['tripid'];
                            $sqls = "SELECT * FROM `bookings` as a,`agencies` as b,`destination`as c where a.`agency_id`= b.`agency_id`and a.`trip_des`=c.`desitination_id` and a.`trip_id`='$tripid'and a.`user_id`='$userid' and payment_status='0' ";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
            <form action="trip_details.php" method="post">
                <table class="centered highlight responsive">
                    <thead>
                        <tr>
                            <th>Detail</th>
                            <th>Value</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr><?php
                                    $bookid=$row['book_id'];
                                    $_SESSION['book_id']=$bookid;
                            ?>
                            <td>From</td>
                            <td><?php echo $row['from'];?></td>
                        </tr>
                        <tr>
                            <td>To</td>
                            <td><?php echo $row['to'];?></td>
                        </tr>
                        <tr>
                            <td>Time</td>
                            <td><?php echo $row['booking_time'];?></td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td><?php echo $row['booking_date'];?></td>
                        </tr>
                        <tr>
                            <td>Agency</td>
                            <td><?php echo $row['agency_name_english'];?></td>
                        </tr>
                        <tr>
                            <td>Seat Price</td>
                            <td><?php echo $row['t_price'];?></td>
                        </tr>
                        <tr>
                            <td>Seat No</td>
                            <td><?php echo $row['set_num'];?></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><?php echo $row['t_price'];?></td>
                        </tr>
                                    
                    </tbody>
                </table>
                <div class="row no-margin red lighten-5">
                    <div class="input-field col s12 l6">
                        <input type="text" name="passname" id="pass_name" required>
                        <label for="pass_name">Passenger Name</label>
                    </div>
                    <div class="input-field col s12 l6">
                        <input type="number" name="passnum" id="pass_no" required>
                        <label for="pass_no">Passenger Number</label>
                    </div>
                </div>
                <div class="row no-margin">
                    <div class="col s2 l2"></div>
                    <div class="input-field col s8 l8"> 
                        <input style="width: 100%;" class="btn waves-effect waves-light teal"
                            type="submit" name="pasnger" value="Proceed">
                        </div>
                    <div class="col s2 l2"></div>
                </div>
                <div class="col s12 center l12">
                </div>
            </form>
        </div>
                        <?php
                                }
                            }
                        ?>
    </div>


    <!-- Import Jquery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- Import Materialize JavaScrip -->
    <script src="assets/js/materialize.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="assets/js/$cript.js"></script>
</body>
</html>
