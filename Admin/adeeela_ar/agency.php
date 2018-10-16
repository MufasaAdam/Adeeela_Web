<?php 
	session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('../incloud/condb.php');
if(isset($_POST['agancy'])){
    $agancyen      =$_POST['agancyen'];
    $agancyar      =$_POST['agancyar'];
    $ownername     =$_POST['ownername'];
    $ownernamear   =$_POST['ownernamear'];
    $phone         =$_POST['phone'];
    $sql           ="INSERT INTO `agencies`(`agency_name_english`, `agency_name_arabic`, `owner`,`owner_ar`,`ownphone`) VALUES ('$agancyen',N'$agancyar','$ownername ',N'$ownernamear','$phone')";
    if($mysqli->query($sql)===true){
                 ?><script>alert('<?php echo'تم الاضافة بنجاح';?>');</script><?php
                                   }else{
        echo"Error:".$sql."<br>".$mysqli->error;
    }
}
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
  <title>عديييلة</title>
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
        <form action="agency.php" method="post">
          <div class="row">
            <div class="col s12" style="padding:0;">
              <div class="orange darken-1 white-text center" style="border-bottom: 1px solid black; padding: 10px;">
                <h4 style="margin:0;">وكالة</h4>
              </div>
            </div>
            <div dir="rtl" class="row">
              <div class="input-field col s12 l4">
                <input name="phone" type="number" class="validate" required>
                <label for="owner_number">رقم هاتف المالك</label>
              </div>
              <div class="input-field col s12 l4">
                <input name="ownernamear" type="text" class="validate" required>
                <label for="owner_name">أسم المالك</label>
              </div>
              <div class="input-field col s12 l4">
                <input name="agancyar" type="text" class="validate" required>
                <label for="agencyName_arb">اسم الوكالة </label>
              </div>
              <div class="input-field col s12 l6">
                <input dir="ltr" name="ownername" type="text" class="validate" required>
                <label for="owner_name">أسم المالك (en)</label>
              </div>
              <div class="input-field col s12 l6">
                <input dir="ltr" name="agancyen" type="text" class="validate" required>
                <label for="agencyName_eng">اسم الوكالة (en)</label>
              </div>
            </div>
            <div class="row">
              <div class="input-feild col s12 center">
                <input type="submit" name="agancy" class="btn btn-larger waves-effect waves-light orange darken-1" style="width:80%;" value="إضافة">
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