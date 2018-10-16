<?php 
	session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('../incloud/condb.php');
if(isset($_POST['addtrip'])){
    $agencie_id      =$_POST['agencie_id'];
    $timeu           =$_POST['timeu'];
    $dayid           =$_POST['dayid'];
    $datepp          =$_POST['datepp'];
    $bus_id          =$_POST['bus_id'];
    $price           =$_POST['price'];
    $did             =$_POST['did'];
    $sql             ="INSERT INTO `trips`(`agency_id`, `time_id`, `day_id`, `trip_date`, `bus_id`, `trip_price`, `destination_id`) VALUES ('$agencie_id','$timeu','$dayid','$datepp','$bus_id','$price','$did')";
    if($mysqli->query($sql)===true){
                               ?> <script>alert('<?php echo'تم الاضافة بنجاح';?>');</script><?php
    }else{
        echo"Error:".$sql."<br>".$mysqli->error;
    }
}
?>	
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" />
    <link type="text/css" rel="stylesheet" href="assets/css/icons.css">
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="assets/css/master.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

    <title>الرحلة</title>
</head>

<body>
    <main>
        <nav>
            <div class="nav-wrapper teal lighten-1">
                <ul>
                    <li class="left">
                        <a href="#" data-activates="slide-out" class="button-collapse left">
                            <i class="glyphicon glyphicon-menu-hamburger"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
          <?php 
include('assets/nav.php');
      ?>
        <div class="workspace">
            <div class="mainCnt white">
                <form action="trip.php" method="post">
                    <div class="row">
                        <div class="col s12" style="padding:0;">
                            <div class="orange darken-1 white-text center" style="border-bottom: 1px solid black; padding: 10px;">
                                <h4 style="margin:0;">الرحلة</h4>
                            </div>
                        </div>
                        <div dir="rtl" class="row">
                            <div dir="rtl" class="input-field col s12 l4">
                                <select name="dayid" id="">
                                    <option value="" disabled selected>اختر اليوم</option>
                                    <?php
                                 $sqls = "SELECT * FROM `days`";
                                 $result = $mysqli->query($sqls);
                                 if ($result->num_rows > 0) {
                                     while($row = $result->fetch_assoc()){
                                         ?>
                                         <option value="<?php echo $row['day_id'] ?>">
                                         <?php echo $row['day_arabic']; ?></option>
                                         <?php
                                         }
                                        }
                                        ?>
                                </select>
                                <label for="">اليوم</label>
                            </div>
                            <div class="input-field col s12 l4">
                                <input id="timepkr" type="text" name="timeu" class="timepicker">
                                <label for="timepkr">الوقت</label>
                            </div>
                            <div dir="rtl" class="input-field col s12 l4">
                                <select name="agencie_id" id="">
                                    <option value="" disabled selected>اختر الوكالة</option>
                                    <?php
                                 $sqls = "SELECT * FROM `agencies`";
                                 $result = $mysqli->query($sqls);
                                 if ($result->num_rows > 0) {
                                     while($row = $result->fetch_assoc()){
                                         ?>
                                         <option value="<?php echo $row['agency_id'] ?>">
                                         <?php echo $row['agency_name_arabic']; ?> </option>
                                         <?php
                                         }
                                        }
                                        ?>
                                </select>
                                <label>وكالة</label>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 l4">
                                    <input id="datepkr" type="date" name="datepp" class="datepicker">
                                    <label for="datepkr">التاريخ</label>
                                </div>
                                <div dir="rtl" class="input-field col s12 l4">
                                    <select name="bus_id" id="">
                                        <option value="" disabled selected>اختر الباص</option>
                                        <?php
                                 $sqls = "SELECT * FROM `buss`";
                                 $result = $mysqli->query($sqls);
                                 if ($result->num_rows > 0) {
                                     while($row = $result->fetch_assoc()){
                                         ?>
                                         <option value="<?php echo $row['bus_id'] ?>">
                                         <?php echo $row['bus_seat_num']; ?> Seates</option>
                                         <?php
                                         }
                                        }
                                        ?>
                                    </select>
                                    <label for=""> الباص</label>
                                </div>
                                <div class="input-field col s12 l4">
                                    <input type="number" name="price" id="">
                                    <label for="ticketPrice">السعر</label>
                                </div>
                            </div>
                            <div class="row">
                                <div dir="rtl" class="input-field col s12 l12">
                                    <select name="did" id="">
                                        <?php
                                         $sqls = "SELECT * FROM `destination`";
                                         $result = $mysqli->query($sqls);
                                         if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()){
                                         ?>
                                         <option value="<?php echo $row['desitination_id'] ?>">
                                         من <?php echo $row['from_ar']; ?> الي <?php echo $row['to_ar']; ?> </option>
                                         <?php
                                         }
                                        }
                                        ?>
                                    </select>
                                    <label dir="rtl" for="">الوجهة</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-feild col s12 center">
                                <input type="submit" name="addtrip" value="إضافة" class="btn btn-larger waves-effect waves-light teal lighten-1" style="width:80%;">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <footer class="page-footer a orange darken-1">
        <div class="footer-copyright teal lighten-1">
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