<?php
	session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('../incloud/condb.php');
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

  <title>الحافلة</title>
</head>

<body>
  <main>
    <nav>
      <div class="nav-wrapper teal lighten-2">
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
        <form action="addsalepoint.php" method="post">
          <div class="row">
            <div class="col s12" style="padding:0;">
              <div class="orange darken-1 white-text center" style="border-bottom: 1px solid black; padding: 10px;">
                <h4 style="margin:0;">رحلة خاصة</h4>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 l6" dir="rtl">
                <input id="" type="text" class="validate">
                <label for="">نوع الرحلة</label>
              </div>
              <div class="input-field col s12 l6" dir="rtl">
                <input id="" type="number" class="validate">
                <label for="">نوع الباص</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 l6" dir="rtl">
                <input id="" type="text" class="validate">
                <label for="" dir="rlt">نوع الرحلة (en)</label>
              </div>
              <div class="input-field col s12 l6" dir="rtl">
                <input id="" type="number" class="validate">
                <label for="" dir="rlt">نوع الباص (en) </label>
              </div>
            </div>
            <div class="row">
              <div class="input-feild col s12 center">
                <input type="submit" class="btn btn-larger waves-effect waves-light orange darken-1" style="width:80%;"
                  name="addsp" value="Add">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>

  <footer class="page-footer a orange darken-4">
    <div class="footer-copyright teal lighten-2">
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