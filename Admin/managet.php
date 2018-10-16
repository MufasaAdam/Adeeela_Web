<?php 
	session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('incloud/condb.php');
if(isset($_POST['add'])){
$Tripen =$_POST['Tripen'];
$tripr  =$_POST['tripr'];
$type   =$_POST['type'];
    $sql         ="INSERT INTO `sptrip`(`trip_type_en`, N`trip_type_ar`, `bus_type`) VALUES ('$Tripen','$tripr','$type')";
    if($mysqli->query($sql)===true){
                 ?><script>alert('<?php echo'Your Special Trip Added';?>');</script><?php
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
      <div class="nav-wrapper teal lighten-3">
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
        <form action="managet.php" method="post">
          <div class="row">
            <div class="col s12" style="padding:0;">
              <div class="orange darken-1 white-text center" style="border-bottom: 1px solid black; padding: 10px;">
                <h4 style="margin:0;">Special Trip</h4>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 l6">
                <input id=""  name="Tripen" type="text" class="validate">                
                <label for="">Type of Trip</label>
              </div>
              <div class="input-field col s12 l6">
                  <input id="" name="type" type="number" class="validate">                                  
                  <label for="">Type of Bus</label>
              </div>
            </div>
              <div class="row">
                <div class="input-field col s12 l6">
                    <input id="" name="tripr" type="text" class="validate">                                  
                    <label for="">Type of Trip (ar)</label>
                </div>
             
              </div>
            <div class="row">
              <div class="input-feild col s12 center">
                <input type="submit" class="btn btn-larger waves-effect waves-light orange darken-1" style="width:80%;" name="add" value="Add">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </main>

  <footer class="page-footer a orange darken-1">
    <div class="footer-copyright teal lighten-3">
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