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
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

    <title>تحرير العضو</title>
</head>

<body>
    <main>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Log out</a></li>
            <li class="divider"></li>
            <div class="switch" style="margin:auto;">
                <label class="langSwitch">
                    en
                    <input type="checkbox" checked>
                    <span class="lever"></span>
                    ar
                </label>
            </div>
        </ul>
        <nav>
            <div class="nav-wrapper teal lighten-1">
                <ul>
                    <li class="right">
                        <a href="#" data-activates="slide-out" class="button-collapse left">
                            <i class="glyphicon glyphicon-menu-hamburger"></i>
                        </a>
                    </li>
                </ul>
                <ul class="left">
                    <li><a class="dropdown-button waves-effect waves-light" href="#!" data-activates="dropdown1"><i
                                class="material-icons right" style="margin: 0;">settings</i></a></li>
                </ul>
            </div>
        </nav>
  <?php 
include('assets/nav.php');
      ?>
        <div class="workspace">
            <div class="mainCnt white">
                <form action="">
                    <div class="row">
                        <div class="col s12" style="padding:0;">
                            <div class="orange darken-1 center white-text" style="border-bottom: 1px solid black; padding: 10px;">
                                <h4 style="margin:0;">تحرير العضو</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l2">
                                <select name="" id="">
                                    <option value="" selected disabled>Choose Type</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Agency</option>
                                    <option value="3">User</option>
                                </select>
                                <label for="" dir="rtl">Type</label>
                            </div>
                            <div class="input-field col s12 l10">
                                <select name="" id="">
                                    <option value="" selected disabled>Select Agency</option>
                                    <option value="1">Agency 1</option>
                                    <option value="2">Agency 2</option>
                                    <option value="3">Agency 3</option>
                                </select>
                                <label for="" dir="rtl">Agency</label>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 l4" dir="rtl">
                                    <input id="" type="text" class="validate">
                                    <label for="usr_name">Username</label>
                                </div>
                                <div class="input-field col s12 l4" dir="rtl">
                                    <input id="" type="text" class="validate">
                                    <label for="f_name"><i class="red-text">*</i>First Name</label>
                                </div>
                                <div class="input-field col s12 l4" dir="rtl">
                                    <input id="" type="text" class="validate">
                                    <label for="l_name"><i class="red-text">*</i>Last Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 l1"></div>
                                <div class="input-field col s12 l5" dir="rtl">
                                    <input id="" type="number" class="validate">
                                    <label for="usr_phone"><i class="red-text">*</i>Phone Number</label>
                                </div>
                                <div class="input-field col s12 l5" dir="rtl">
                                    <input id="" type="email" class="validate">
                                    <label for="usr_email"><i class="red-text">*</i>E-mail</label>
                                </div>
                            </div>
                            <div class="col s12 l1"></div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 l1">
                            </div>
                            <div class="input-field col s12 l5" dir="rtl">
                                <input id="" type="password" class="validate">
                                <label for="password"><i class="red-text">*</i>Password</label>
                            </div>
                            <div class="input-field col s12 l5" dir="rtl">
                                <input id="" type="password" class="validate">
                                <label for="con_password"><i class="red-text">*</i>Confirm Password</label>
                            </div>
                            <div class="input-field col s12 l1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-feild col s12 center">
                                <button class="btn btn-larger waves-effect waves-light teal lighten-1" style="width:80%;">Save</button>
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