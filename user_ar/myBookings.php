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
    <title>حالة التذاكر</title>
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
            <a href="#" class="brand-logo center">حالة التذاكر</a>
        </div>
    </nav>

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
        <li class="active"><a class="waves-effect" href="booking.php"><i class="material-icons teal-text">book</i>
                حجوزات </a></li>
        <li><a class="waves-effect" href="transaction.php"><i class="material-icons teal-text">swap_horiz</i>
                عمليات</a></li>
        <li><a class="waves-effect" href="salespoints.php"><i class="material-icons teal-text">place</i> نقاط البيع
            </a></li>
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

    <div class="requestPage">
        <div class="">
            <div class="row">
                <div class="col s12 no-padding">
                    <ul class="tabs teal lighten-1">
                        <li class="tab col s6"><a href="#notConfirmed">غير مؤكد</a></li>
                        <li class="tab col s6"><a class="active" href="#confirmed">تم تأكيد</a></li>
                    </ul>
                </div>

                <!-- Request Trip -->
                <div id="confirmed" class="col s12">
                    <div class="workspace z-depth-5">
                        <div class="row no-margin">
                            <div class="col s12">
                                <blockquote>
                                    <h5 class="no-margin">اختر السجل</h5>
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
                            $sqls   ="SELECT * FROM `special_trip_request`as a ,`sptrip` as b WHERE a.`trip_type`=b.`ttype_id` and `user_id`='$userid' and `status`='2' and `request_id`='$rid' ";
                            $result =$mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
                                    <div class="row">
                            <div class="col s2 l2"></div>
                            <div class="col center s8 l8">
                                <a style="width: 100%;" href="trip_recordc.php?r_id=<?php echo $row['request_id'];?>" class="btn waves-effect waves-light center teal"><?php echo $row['date'];?> - <?php echo $row['dropoff_location'];?> - <?php echo $row['pickup_loctions'];?></a>
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
                                <a style="width: 100%;background-color:#ff8a80; !importnt" href="#" class="btn waves-effect waves-light teal center">لا يوجد رحلة مواكدة</a>
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
                            <a class="btn-floating waves-effect waves-light right pulse red accent-1" onclick="goBack()"><i
                                    class="material-icons">arrow_forward</i></a>
                        </div>
                    </div>
                </div>

                <!-- Trip Status -->
                <div id="notConfirmed" class="col s12">
                    <div class="workspace z-depth-5">
                        <div class="row no-margin">
                            <div class="col s12">
                                <blockquote>
                                    <h5 class="no-margin">اختر السجل</h5>
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
                                <a style="width: 100%;" href="trip_record.php?r_id=<?php echo $row['request_id'];?>" class="btn waves-effect waves-light teal center"><?php echo $row['date'];?>- <?php echo $row['dropoff_location'];?> -<?php echo $row['pickup_loctions'];?> </a>
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
                                <a style="width: 100%;background-color:#9bdef7; !importnt" href="#" class="btn waves-effect waves-light teal center">لا يوجد طلب</a>
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
                            <a class="btn-floating waves-effect waves-light right pulse red accent-1" onclick="goBack()"><i
                                    class="material-icons">arrow_forward</i></a>
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