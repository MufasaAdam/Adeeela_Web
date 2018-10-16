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
    <title>عمليات</title>
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
                <a href="#" class="brand-logo center">عمليات</a>
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
        <li class="active"><a class="waves-effect" href="transaction.php"><i class="material-icons teal-text">swap_horiz</i>
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
    <div class="page">
        <div class="center hide-on-med-and-down">
            <a class="btn-floating waves-effect waves-light right pulse red accent-1" onclick="goBack()"><i class="material-icons">arrow_forward</i></a>
            <h5>عمليات</h5>
        </div>
        <?php
            $userid =$_SESSION['u_id'];
            $sqls   ="SELECT * FROM `bookings`as a,`agencies`as b ,`destination`as c WHERE a.`agency_id`=b.`agency_id`and a.`trip_des`=c.`desitination_id` and `user_id`='$userid'";
            $result =$mysqli->query($sqls);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
            ?>
        <div class="workspace">
            <table class="centered highlight responsive" dir="rtl">
                <thead>
                    <tr>
                        <th>التفاصيل</th>
                        <th>القيمة</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>الوجهة</td>
                        <td>من <?php echo $row['from_ar'];?> الي <?php echo $row['to_ar'];?></td>
                    </tr>
                    <tr>
                        <td>هاتف المسافر</td>
                        <td><?php echo $row['passenger_phone'];?></td>
                    </tr>
                    <tr>
                        <td>اسم المسافر</td>
                        <td><?php echo $row['passenger_name'];?></td>
                    </tr>
                    <tr>
                        <td>اسم الوكالة</td>
                        <td><?php echo $row['agency_name_arabic'];?></td>
                    </tr>
                    <tr>
                        <td>السعر</td>
                        <td><?php echo $row['t_price'];?></td>
                    </tr>
                    <tr>
                        <td>التاريخ</td>
                        <td><?php echo $row['booking_date'];?></td>
                    </tr>
                    <tr>
                        <td>الوقت</td>
                        <td><?php echo $row['booking_time'];?></td>
                    </tr>
                    <tr>
                        <td>الحالة</td>
                        <td>
                        <?php
                           if($row['payment_status']==0){
                           echo"لم تكتمل";
                           }else if($row['payment_status']==1){
                               echo"اكتملت";
                           }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
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