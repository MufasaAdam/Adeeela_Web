<?php
	session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('../admin/incloud/condb.php');
if(isset($_GET['tripid'])){
    $tid=$_GET['tripid'];
}
if(isset($_POST['btn1'])){
    $setnum="1";
}
if(isset($_POST['btn2'])){
    $setnum="2";
}
if(isset($_POST['btn3'])){
    $setnum="3";
}
if(isset($_POST['btn4'])){
    $setnum="4";
}
if(isset($_POST['btn5'])){
    $setnum="5";
}
if(isset($_POST['btn6'])){
    $setnum="5";
}
if(isset($_POST['btn6'])){
    $setnum="6";
}
if(isset($_POST['btn7'])){
    $setnum="7";
}
if(isset($_POST['btn8'])){
    $setnum="8";
}
if(isset($_POST['btn9'])){
    $setnum="9";
}
if(isset($_POST['btn10'])){
    $setnum="10";
}
if(isset($_POST['btn11'])){
    $setnum="11";
}
if(isset($_POST['btn12'])){
    $setnum="12";
}
if(isset($_POST['btn13'])){
    $setnum="13";
}
if(isset($_POST['btn14'])){
    $setnum="14";
}
if(isset($_POST['btn15'])){
    $setnum="15";
}
if(isset($_POST['btn16'])){
    $setnum="16";
}
if(isset($_POST['btn17'])){
    $setnum="17";
}
if(isset($_POST['btn18'])){
    $setnum="18";
}
if(isset($_POST['btn19'])){
    $setnum="19";
}
if(isset($_POST['btn20'])){
    $setnum="20";
}
if(isset($_POST['btn22'])){
    $setnum="22";
}
if(isset($_POST['btn23'])){
    $setnum="23";
}
if(isset($_POST['btn24'])){
    $setnum="24";
}
if(isset($_POST['btn25'])){
    $setnum="25";
}
if(isset($_POST['btn26'])){
    $setnum="26";
}
if(isset($_POST['btn27'])){
    $setnum="27";
}
if(isset($_POST['btn28'])){
    $setnum="28";
}
if(isset($_POST['btn29'])){
    $setnum="29";
}
if(isset($_POST['btn30'])){
    $setnum="30";
}
if(isset($_POST['btn31'])){
    $setnum="31";
}
if(isset($_POST['btn32'])){
    $setnum="32";
}
if(isset($_POST['btn33'])){
    $setnum="33";
}
if(isset($_POST['btn34'])){
    $setnum="34";
}
if(isset($_POST['btn35'])){
    $setnum="35";
}
if(isset($_POST['btn36'])){
    $setnum="36";
}
if(isset($_POST['btn37'])){
    $setnum="37";
}
if(isset($_POST['btn38'])){
    $setnum="38";
}
if(isset($_POST['btn39'])){
    $setnum="39";
}
if(isset($_POST['btn40'])){
    $setnum="40";
}
if(isset($_POST['btn41'])){
    $setnum="41";
}
if(isset($_POST['btn42'])){
    $setnum="42";
}
if(isset($_POST['btn43'])){
    $setnum="43";
}
if(isset($_POST['btn44'])){
    $setnum="44";
}
if(isset($_POST['btn45'])){
    $setnum="45";
}
if(isset($_POST['btn46'])){
    $setnum="46";
}
if(isset($_POST['btn47'])){
    $setnum="47";
}
if(isset($_POST['btn48'])){
    $setnum="48";
}
if(isset($_POST['btn49'])){
    $setnum="49";
}
$dateres  =date('Y/m/d');
if(isset($setnum)){
    $user_id  =$_SESSION['u_id'];
    $timeres  =date('H:i');
     $sql     ="UPDATE `bookings` SET `set_num`='$setnum' WHERE `trip_id`='$tid' and `user_id`='$user_id' and `date_reserved`='$dateres'";
    $forup    ="set_".$setnum;
    $_SESSION['set_num']=$setnum;
    $sqlup    ="UPDATE `bus_set` SET $forup='3' WHERE `trip_id`='$tid'";
    if($mysqli->query($sql)===true and $mysqli->query($sqlup)===true){
                 ?><script>alert('<?php echo'Your Agancye added';?>');</script><?php
        header('location:trip_details.php?tripid='.$tid.'&setnum='.$setnum);
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
    <title>الباص</title>
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
        <nav>
            <div class="nav-wrapper teal lighten-1">
                <a onclick="goBack()" class="sidenav-trigger left"><i class="material-icons">arrow_back</i></a>
                <a href="#" class="brand-logo center">اختر المقعد</a>
                <a href="trip_details.php" class="sidenav-trigger right">التالى</a>
            </div>
        </nav>
    </div>

    <!-- Side Nav -->
    <ul id="slide-out" class="sidenav right-aligned sidenav-fixed">
        <li>
            <div class="user-view teal lighten-2 center">
                <div class="background">
                    <img src="assets/img/road.jpg">
                </div>
                <a href="#user"><img class="circle auto-margin" src="assets/img/admin.jpg"></a>
                <a href="#name"><span class="white-text name">Mustafa
                        Adam</span></a>
                <a href="#email"><span class="white-text email">mustafa@gmail.com</span></a>
            </div>
        </li>
        <li><a class="waves-effect" href="home.php"><i class="material-icons teal-text">home</i> الصفحة
                الرئيسية
            </a></li>
        <li><a class="waves-effect" href="account.php"><i class="material-icons teal-text">account_box</i> الحساب</a></li>
        <li><a class="waves-effect" href="booking.php"><i class="material-icons teal-text">book</i> حجوزات </a></li>
        <li><a class="waves-effect" href="transaction.php"><i class="material-icons teal-text">swap_horiz</i> عمليات</a></li>
        <li><a class="waves-effect" href="salespoints.php"><i class="material-icons teal-text">place</i> نقاط البيع </a></li>
        <li><a class="waves-effect" href="help.php"><i class="material-icons teal-text">help</i> مساعدة</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="waves-effect" href="about.php"><i class="material-icons teal-text">info</i>معلوماتنا
            </a></li>
        <li><a class="waves-effect" href="contact_us.php"><i class="material-icons teal-text">phone</i>تصل إلينا</a></li>
        <li><a class="waves-effect" href="../home.php"><i class="material-icons teal-text">translate</i>غير اللغة</a></li>
        <li><a class="waves-effect" href="index.php"><i class="material-icons teal-text">power_settings_new</i>الخروج</a></li>
    </ul>

    <div class="page">
        <div class="center hide-on-med-and-down">
            <a class="btn-floating waves-effect waves-light right pulse red accent-1" onclick="goBack()"><i class="material-icons">arrow_forward</i></a>
            <h5>اختر المقعد</h5>
        </div>
        <div class="workspace">
           <form action="bus.php?tripid=<?php echo $tid;?>" method="post">
                <div class="row">
                    <div class="col l2"></div>
                    <div class="col s12 l8 center">
                      <?php
                        $sqls = "SELECT  b.`photo` FROM `trips` as a ,`buss` as b where a.`bus_id`=b.`bus_id` and a.`trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        <img src="../admin/bus_images/<?php echo $row['photo'];?>" style="width:100% !important;height:150px !important;">
                    <?php
                                }
                            }
                        ?>
                            </div>
                    <div class="col l2"></div>
                </div>
                <div class="row no-margin">
                    <div class="col s1"></div>
                    <div class="input-field col s2 center">
                        <button class="btn-floating btn-large niDegree teal disabled"><i class="material-icons black-text">pie_chart_outlined</i></button>
                    </div>
                    <div class="input-field col s8 l7"></div>
                    <div class="col s1"></div>
                </div>
                <div class="row no-margin">
                    <div class="col s1  "></div>
                    <div class="input-field col s2 center ">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn1" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_1']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_1']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_1']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_1']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >1</button>
                    <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn2" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_2']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_2']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_2']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_2']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >2</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">

                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn3" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_3']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_3']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_3']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_3']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >3</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn4" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_4']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_4']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_4']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_4']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >4</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="col s1"></div>
                </div>
                <div class="row no-margin">
                    <div class="col s1  "></div>
                    <div class="input-field col s2 center ">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn5" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_5']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_5']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_5']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_5']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >5</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn6" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_6']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_6']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_6']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_6']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >6</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">

                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn7" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_7']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_7']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_7']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_7']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >7</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn8" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_8']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_8']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_8']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_8']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >8</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="col s1"></div>
                </div>
                <div class="row no-margin">
                    <div class="col s1  "></div>
                    <div class="input-field col s2 center ">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn9" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_9']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_9']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_9']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_9']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >9</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn10" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_10']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_10']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_10']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_10']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >10</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">

                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn11" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_11']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_11']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_11']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_11']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >11</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn12" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_12']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_12']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_12']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_12']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >12</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="col s1"></div>
                </div>
                <div class="row no-margin">
                    <div class="col s1  "></div>
                    <div class="input-field col s2 center ">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn13" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_13']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_13']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_13']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_13']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >13</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn14" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_14']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_14']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_14']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_14']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >14</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">

                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn15" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_15']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_15']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_15']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_15']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >15</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn16" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_16']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_16']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_16']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_16']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >16</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="col s1"></div>
                </div>
                <div class="row no-margin">
                    <div class="col s1  "></div>
                    <div class="input-field col s2 center ">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn17" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_17']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_17']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_17']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_17']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >17</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn18" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_18']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_18']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_18']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_18']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >18</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">

                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn19" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_19']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_19']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_19']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_19']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >19</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn20" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_20']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_20']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_20']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_20']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >20</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="col s1"></div>
                </div>
                <div class="row no-margin">
                    <div class="col s1  "></div>
                    <div class="input-field col s2 center ">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn21" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_21']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_21']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_21']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_21']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >21</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn22" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_22']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_22']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_22']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_22']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >22</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">

                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn23" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_23']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_23']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_23']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_23']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >23</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn24" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_24']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_24']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_24']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_24']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >24</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="col s1"></div>
                </div>
                <div class="row no-margin">
                    <div class="col s1  "></div>
                    <div class="input-field col s2 center ">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn25" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_25']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_25']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_25']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_25']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >25</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn26" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_26']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_26']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_26']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_26']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >26</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">

                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn27" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_27']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_27']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_27']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_27']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >27</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn28" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_28']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_28']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_28']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_28']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >28</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="col s1"></div>
                </div>
                <div class="row no-margin">
                    <div class="col s1  "></div>
                    <div class="input-field col s2 center ">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn29" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_29']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_29']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_29']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_29']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >29</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn30" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_30']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_30']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_30']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_30']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >30</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">

                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn31" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_31']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_31']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_31']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_31']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >31</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn32" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_32']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_32']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_32']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_32']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >32</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="col s1"></div>
                </div>
                <div class="row no-margin">
                    <div class="col s1  "></div>
                    <div class="input-field col s2 center ">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn33" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_33']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_33']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_33']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_33']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >33</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn34" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_34']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_34']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_34']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_34']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >34</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">

                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn35" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_35']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_35']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_35']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_35']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >35</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn36" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_36']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_36']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_36']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_36']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >36</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="col s1"></div>
                </div>
                <div class="row no-margin">
                    <div class="col s1  "></div>
                    <div class="input-field col s2 center ">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn37" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_37']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_37']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_37']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_37']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >37</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn38" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_38']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_38']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_38']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_38']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >38</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">

                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn39" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_39']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_39']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_39']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_39']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >39</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn40" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_40']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_40']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_40']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_40']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >40</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
                <div class="row no-margin">
                    <div class="col s1  "></div>
                    <div class="input-field col s2 center ">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn41" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_41']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_41']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_41']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_41']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >41</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn42" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_42']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_42']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_42']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_42']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >42</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">

                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn43" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_43']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_43']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_43']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_43']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >43</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn44" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_44']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_44']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_44']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_44']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >44</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="col s1"></div>
                </div>
                <div class="row no-margin">
                    <div class="col s1  "></div>
                    <div class="input-field col s2 center ">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn45" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_45']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_45']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_45']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_45']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >45</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn46" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_46']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_46']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_46']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_46']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >46</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn47" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_47']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_47']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_47']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_47']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >47</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn48" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_48']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_48']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_48']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_48']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >48</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="input-field col s2 center">
                        <?php
                        $sqls = "SELECT * FROM `bus_set` where `trip_id`='$tid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                        
                        <button name="btn49" type="submit" class="btn waves-effet busSeat effect-light <?php if($row['set_49']==1){
                            echo"";
                            $color="#2bbbad";
                        }elseif($row['set_49']==2){
                            echo "disabled";
                            $color="#ff0000";
                        }elseif($row['set_49']==3){
                            echo "disabled";
                            $color="#ffae00";
                        }elseif($row['set_49']==4){
                            echo "disabled";
                            $color="#73879c";
                        }
                            ?>"
                                
                                style="background-color:<?php echo $color; ?> !important;color:#fff !important;"
                                >49</button>
                        <?php
                                }
                            }
                        ?>
                    </div>
                    <div class="col s1"></div>
                </div>
                <div class="row no-margin hide-on-med-and-down">
                    <div class="col s2 l2"></div>
                    <div class="input-field col s8 l8 center">
                        <button style="width: 100%;" class="btn waves-effect waves-light" type="submit" name="action">حجز
                        </button>
                    </div>
                    <div class="col s2 l2"></div>
                </div>
            </form>
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