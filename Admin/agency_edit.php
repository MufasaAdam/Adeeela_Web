<?php
session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
?>
  <?php 
include('incloud/head.php');
      ?>
<body>
  <main>
    <nav>
      <div class="nav-wrapper teal accent-4">
        <a href="#" data-activates="slide-out" class="button-collapse left">
          <i class="glyphicon glyphicon-menu-hamburger"></i>
        </a>
      </div>
    </nav>
    <?php 
include('incloud/nav.php');
      ?>
    <div class="workspace">
      <div class="mainCnt white">
        <form action="">
          <div class="row">
            <div class="col s12" style="padding:0;">
              <div class="orange darken-1 white-text center" style="border-bottom: 1px solid black; padding: 10px;">
                <h4 style="margin:0;">Agency</h4>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 l3">
                <input id="" type="text" class="validate">
                <label for="agencyName_eng">Agency Name (en)</label>
              </div>
              <div class="input-field col s12 l3">
                <input id="" type="text" class="validate">
                <label for="agencyName_arb">Agency Name (ar)</label>
              </div>
              <div class="input-field col s12 l3">
                <input id="" type="text" class="validate">
                <label for="owner_name">Owner's Name</label>
              </div>
              <div class="input-field col s12 l3">
                <input id="" type="number" class="validate">
                <label for="owner_number">Owner's Number</label>
              </div>
            </div>
            <div class="row">
              <div class="input-feild col s12 center">
                <button class="btn btn-larger waves-effect waves-light orange darken-1" style="width:80%;">Save</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>

  <footer class="page-footer a orange darken-1">
    <div class="footer-copyright teal lighten-2">
      <div class="container center">
        Copyright © 2018, Siham_3M
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="../assets/js/my$cript.js"></script>
</body>

</html>