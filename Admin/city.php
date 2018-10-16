<?php 
session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('incloud/condb.php');
if(isset($_POST['city'])){
    $cityen    =$_POST['cityen'];
    $cityar    =$_POST['cityar'];
    $sql         ="INSERT INTO `cities`(`name_arabic`, `name_english`) VALUES (N'$cityar','$cityen')";
    if($mysqli->query($sql)===true){
                     ?><script>alert('<?php echo'Your city added';?>');</script><?php
                                   }else{
        echo"Error:".$sql."<br>".$mysqli->error;
    }
}
?>	
  <?php 
include('incloud/head.php');
      ?>
<body>
  <main>
    <nav>
      <div class="nav-wrapper teal lighten-2">
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
        <form action="city.php" method="post">
          <div class="row">
            <div class="col s12" style="padding:0;">
              <div class="orange darken-1 white-text center" style="border-bottom: 1px solid black; padding: 10px;">
                <h4 style="margin:0;">City</h4>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 l6">
                <input id="" type="text" name="cityen" class="validate" required>
                <label for="cityName_eng">City Name (en)</label>
              </div>
              <div class="input-field col s12 l6">
                <input id="" name="cityar" type="text" class="validate" required>
                <label for="cityName_arb">City Name (ar)</label>
              </div>
            </div>
            <div class="row">
              <div class="input-feild col s12 center">
                <input type="submit" class="btn btn-larger waves-effect waves-light orange darken-1" style="width:80%;" name="city" value="Add">
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