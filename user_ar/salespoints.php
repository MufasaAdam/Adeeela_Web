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
    <title>نقاط البيع</title>
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
            <a href="home.php" class="sidenav-trigger left"><i class="material-icons">arrow_back</i></a>
            <a href="#" class="brand-logo center">نقاط البيع</a>
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
        <li><a class="waves-effect" href="booking.php"><i class="material-icons teal-text">book</i> حجوزات </a></li>
        <li><a class="waves-effect" href="transaction.php"><i class="material-icons teal-text">swap_horiz</i>
                عمليات</a></li>
        <li class="active"><a class="waves-effect" href="salespoints.php"><i class="material-icons teal-text">place</i> نقاط البيع
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
            <h5>اختر أقرب نقطة بيع</h5>
        </div>
        <div class="workspace">
            <form action="">
                <div class="row">
                    <div class="input-field col s12 l12">
                        <select name="" id="">
                            <option value="1">الخرطوم</option>
                            <option value="2">امدرمان</option>
                            <option value="2">بورسودان</option>
                        </select>
                    </div>
                </div>
                <div class="row no-margin">
                    <blockquote>
                        <h5 class="no-margin">يمكنك الحجز مباشرة من أي نقاط بيع أدناه.</h5>
                    </blockquote>
                </div>
                <div class="row">
                    <div class="col s12 l12">
                        <table class="centered responsive highlight bordered" dir="rtl">
                            <thead class="">
                                <tr>
                                    <th>اسم</th>
                                    <th>هاتف</th>
                                    <th>موقع</th>
                                    <th>اسم المالك</th>
                                </tr>
                            </thead>
                            <tbody>
                                  <?php
                            $sqls = "SELECT * FROM `salepoint`";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
                                <tr>
                                    <td><?php echo $row['name_ar'];?></td>
                                    <td><?php echo $row['phone_num'];?></td>
                                    <td><?php echo $row['address_ar'];?></td>
                                    <td><?php echo $row['salep_respons_ar'];?></td>
                                </tr>
                                <?php
                                }
                            }
                                ?>
                            </tbody>
                        </table>
                    </div>
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