<?php
	session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('../admin/incloud/condb.php');
if(isset($_POST['pasnger'])){
    $passname  =$_POST['passname'];
    $passnum   =$_POST['passnum'];
    $sqlup     ="UPDATE `bookings` SET `passenger_name`=N'$passname',`passenger_phone`='$passnum' WHERE `book_id`='".$_SESSION['book_id']."' and `user_id`='".$_SESSION['u_id']."'";
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>تفاصيل الرحلة</title>
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
        <nav class="vis-on-med">
            <div class="nav-wrapper teal lighten-1">
                <a onclick="goBack()" class="sidenav-trigger left"><i class="material-icons">arrow_back</i></a>
                <a href="#" class="brand-logo center">تفاصيل الرحلة</a>
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

    <div class="page">
        <div class="center hide-on-med-and-down">
            <a class="btn-floating waves-effect waves-light right pulse red accent-1" onclick="goBack()"><i class="material-icons">arrow_forward</i></a>
            <h5>تفاصيل الرحلة</h5>
        </div>
        <div class="workspace">
            <?php
                        $userid=$_SESSION['u_id'];
                        $tripid=$_GET['tripid'];
                            $sqls = "SELECT * FROM `bookings` as a,`agencies` as b,`destination`as c where a.`agency_id`= b.`agency_id`and a.`trip_des`=c.`desitination_id` and a.`trip_id`='$tripid'and a.`user_id`='$userid'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
            <form action="trip_details.php" method="post">
                <table class="centered highlight responsive" dir="rtl">
                    <thead>
                        <tr>
                            <th>التفاصيل</th>
                            <th>القيمة</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <?php
                                    $bookid=$row['book_id'];
                                    $_SESSION['book_id']=$bookid;
                            ?>
                            <td>من </td>
                            <td><?php echo $row['from_ar'];?></td>
                        </tr>
                        <tr>
                            <td>إلى</td>
                            <td><?php echo $row['to_ar'];?></td>
                        </tr>
                        <tr>
                            <td>الوقت</td>
                            <td><?php echo $row['booking_time'];?></td>
                        </tr>
                        <tr>
                            <td>التاريخ</td>
                            <td><?php echo $row['booking_date'];?></td>
                        </tr>
                        <tr>
                            <td>وكالة</td>
                            <td><?php echo $row['agency_name_english'];?>Al Damar new</td>
                        </tr>
                        <tr>
                            <td>سعر المقعد</td>
                            <td><?php echo $row['t_price'];?></td>
                        </tr>
                        <tr>
                            <td>رقم المقعد</td>
                            <td><?php echo $row['set_num'];?></td>
                        </tr>
                        <tr>
                            <td>مجموع</td>
                            <td><?php echo $row['t_price'];?></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row no-margin red lighten-5">
                    <div class="input-field col s12 l6">
                        <input type="text" name="passname" id="pass_name" required>
                        <label for="pass_name">اسم الراكب</label>
                    </div>
                    <div class="input-field col s12 l6">
                        <input type="number" name="passnum" id="pass_no" required>
                        <label for="pass_no">رقم الراكب</label>
                    </div>
                </div>
                <div class="row no-margin">
                    <div class="col s2 l2"></div>
                    <div class="input-field col s8 l8"> <button style="width: 100%;" class="btn waves-effect teal waves-light"
                            type="submit" name="pasnger">التالى
                        </button></div>
                    <div class="col s2 l2"></div>
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