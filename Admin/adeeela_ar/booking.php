<?php
	session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" />
    <link type="text/css" rel="stylesheet" href="assets/css/icons.css">
    <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="assets/css/master.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

    <title>الحجوزات</title>
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
                <form action="">
                    <div class="row" style="margin:0;">
                        <div dir="rtl" class="input-field col s12 l6">
                            <input type="search" name="" id="search" class="customSearch" onkeyup="searchFilter()"
                                required>
                            <label for="search"><i class="material-icons">search</i></label>
                        </div>
                        <div class="col s12 l6">
                            <blockquote>
                                <h4>معلومات الحجز الخاصة بالعميل</h4>
                            </blockquote>
                        </div>
                    </div>
                    <table dir="rtl" id="table" class="highlight centered responsive-table bookingTable">
                        <thead>
                            <tr>
                                <th>رقم</th>
                                <th>اسم المسافر </th>
                                <th>رقم الهاتف</th>
                                <th>الرحلة</th>
                                <th>تاريخ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ahmed</td>
                                <td>0912345678</td>
                                <td>Khartoum - Attbara</td>
                                <td>30/8/2018</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Mohammed</td>
                                <td>0987654321</td>
                                <td>Khartoum - Port Sudan</td>
                                <td>1/9/2018</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Khalid</td>
                                <td>0987654321</td>
                                <td>Khartoum - Port Sudan</td>
                                <td>1/9/2018</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sammy</td>
                                <td>0987654321</td>
                                <td>Khartoum - Port Sudan</td>
                                <td>1/9/2018</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Malaz</td>
                                <td>0987654321</td>
                                <td>Khartoum - Port Sudan</td>
                                <td>1/9/2018</td>
                            </tr>
                        </tbody>
                    </table>
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