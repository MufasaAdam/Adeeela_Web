<?php 
	session_start();
//include('connectdb.php');	
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>الخطوة الأولى</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" media="screen" href="assets/css/materialize.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" media="screen" href="assets/css/master.css">
    <!-- Import Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <!-- Navbar -->
    <header class="vis-on-med">
        <div class="navbar-fixed">
            <nav class="vis-on-med">
                <div class="nav-wrapper teal lighten-1">
                    <a href="#" data-target="slide-out" class="sidenav-trigger left"><i class="material-icons">menu</i></a>
                    <a href="#" class="brand-logo center">نوع الرحلة
                    </a>
                </div>
            </nav>
        </div>
    </header>

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
        <li class="active"><a class="waves-effect" href="home.php"><i class="material-icons teal-text">home</i> الصفحة
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
        <li><a class="waves-effect" href="index.php"><i class="material-icons teal-text">power_settings_new</i>الخروج</a></li>
    </ul>

    <div class="page no-padding">
        <div class="no-padding">
            <div class="carousel carousel-slider">
                <a class="carousel-item" href="#one!"><img src="assets/img/ad/706735.png"></a>
                <a class="carousel-item" href="#two!"><img src="assets/img/ad/red.jpg"></a>
                <a class="carousel-item" href="#three!"><img src="assets/img/ad/tokyo.png"></a>
                <a class="carousel-item" href="#four!"><img src="assets/img/ad/Ubuntu Blue.png"></a>
            </div>
        </div>
    </div>
    <div class="page">
        <div class="row" dir="rtl">
            <div class="col s12 l6">
                <div class="card teal lighten-2">
                    <a href="book.php">
                        <div class="card-image waves-effect center waves-block waves-light">
                            <i class="material-icons white-text">
                                <h1>book</h1>
                            </i>
                        </div>
                    </a>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">احجز تذكرة<i class="material-icons right">more_vert</i></span>
                        <p><a href="book.php" class="white-text">احجز الآن
                            </a></p>
                    </div>
                    <div class="card-reveal teal lighten-4">
                        <span class="card-title grey-text text-darken-4">احجز تذكرة<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        <p><a href="book.php" class="teal-text">احجز الآن
                            </a></p>
                    </div>
                </div>
            </div>
            <div class="col s12 l6">
                <div class="card teal">
                    <a href="request_trip.php">
                        <div class="card-image waves-effect center waves-block waves-light">
                            <i class="material-icons white-text">
                                <h1>airport_shuttle</h1>
                            </i>
                        </div>
                    </a>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">طلب رحلة<i class="material-icons right">more_vert</i></span>
                        <p><a href="request_trip.php" class="white-text">اطلب الآن</a></p>
                    </div>
                    <div class="card-reveal blue lighten-4">
                        <span class="card-title grey-text text-darken-4">طلب رحلة<i class="material-icons right">close</i></span>
                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                        <p><a href="request_trip.php" class="blue-text">اطلب الآن</a></p>
                    </div>
                </div>
            </div>
        </div>
    </dciv>
    <!-- Import Jquery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- Import Materialize JavaScrip -->
    <script src="assets/js/materialize.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="assets/js/$cript.js"></script>
</body>

</html>