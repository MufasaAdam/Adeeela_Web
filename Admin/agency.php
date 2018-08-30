<?php 
include('incloud/condb.php');
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
  <title>Adeela</title>
</head>

<body>
  <main>
    <nav>
      <div class="nav-wrapper teal lighten-2">
        <a href="#" data-activates="slide-out" class="button-collapse left">
          <i class="glyphicon glyphicon-menu-hamburger"></i>
        </a>
      </div>
    </nav>
<ul id="slide-out" class="side-nav fixed borderNoShad teal lighten-2">
      <ul class="collapsible" data-collapisble="accordion">
        <li class="teal lighten-2">
          <a class="collapsible-header active waves-effect white-text">Manage
            <i class="glyphicon glyphicon-menu-down right white-text"></i>
          </a>
          <div class="collapsible-body">
            <ul class="orange lighten-5">
              <li class="active">
                <a href="agency.php" class="waves-effect waves-light">Agency</a>
              </li>
              <li>
                <a href="city.php" class="waves-effect waves-light">City</a>
              </li>
              <li>
                <a href="destination.php" class="waves-effect waves-light">Destinations</a>
              </li>
              <li>
                <a href="trip.php" class="waves-effect waves-light">Trip</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="teal lighten-2">
          <a class="collapsible-header waves-effect white-text">Reports
            <i class="glyphicon glyphicon-menu-down right white-text"></i>
          </a>
          <div class="collapsible-body">
            <ul class="orange lighten-5">
              <li>
                <a href="#!" class="waves-effect waves-light">Bookings</a>
              </li>
              <li>
                <a href="#!" class="waves-effect waves-light">Agencies</a>
              </li>
              <li>
                <a href="#!" class="waves-effect waves-light">Users</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </ul>
    <div class="workspace">
      <div class="mainCnt white">
        <form action="agency.php" method="post">
          <div class="row">
            <div class="col s12" style="padding:0;">
              <div class="orange darken-1 white-text center" style="border-bottom: 1px solid black; padding: 10px;">
                <h4 style="margin:0;">Agency</h4>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 l3">
                <input id=""name="agancyen" type="text" class="validate" >
                <label for="agencyName_eng">Agency Name (en)</label>
              </div>
              <div class="input-field col s12 l3">
                <input name="agancyar" id="" type="text" class="validate" >
                <label for="agencyName_arb">Agency Name (ar)</label>
              </div>
              <div class="input-field col s12 l3">
                <input name="ownername" id="" type="text" class="validate" >
                <label for="owner_name">Owner's Name</label>
              </div>
              <div class="input-field col s12 l3">
                <input id="" name="phone" type="number" class="validate" >
                <label for="owner_number">Owner's Number</label>
              </div>
            </div>
            <div class="row">
              <div class="input-feild col s12 center">
                <input value="Add" type="submit" name="agancy" class="btn btn-larger waves-effect waves-light teal lighten-2" style="width:80%;">
                  
                
              </div>
            </div>
          </div>
        </form>
        <?php
        if(isset($_POST['agancy'])){
          $agancyen    =$_POST['agancyen'];
          $agancyar    =$_POST['agancyar'];
          $ownername   =$_POST['ownername'];
          $phone       =$_POST['phone'];
          $sql         ="INSERT INTO `agencies`(`agency_name_english`, `agency_name_arabic`, `owner`,`ownphone`) VALUES ('$agancyen','$agancyar','$ownername ','$phone')";
          if($mysqli->query($sql)===true){
                             ?><script>alert('<?php echo'Your Agancye added';?>');</script><?php
                                                    }
                                                            else
                                                            {
                                                              echo"Error:".$sql."<br>".$mysqli->error;
                                                            }
                                                          }
        ?>
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

  <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="assets/js/materialize.min.js"></script>
  <script type="text/javascript" src="assets/js/my$cript.js"></script>
</body>

</html>