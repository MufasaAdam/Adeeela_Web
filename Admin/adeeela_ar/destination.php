<?php
	session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('../incloud/condb.php');
if(isset($_POST['dadd'])){
    $dfrom      =$_POST['dfrom'];
    $dto        =$_POST['dto'];
    $dfromar    =$_POST['dfromar'];
    $dtoar      =$_POST['dtoar'];
    $sql        ="INSERT INTO `destination`(`from`, `to`, `from_ar`, `to_ar`)  VALUES ('$dfrom','$dto',n'$dfromar',n'$dtoar')";
    if($mysqli->query($sql)===true){
                 ?> <script>alert('<?php echo'تم الاضافة بنجاح';?>');</script><?php
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

    <title>الأماكن</title>
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
                <form action="destination.php" method="post">
                    <div class="row">
                        <div class="col s12" style="padding:0;">
                            <div class="orange darken-1 white-text center" style="border-bottom: 1px solid black; padding: 10px;">
                                <h4 style="margin:0;">الأماكن</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 l6" dir="rtl">
                            <select name="dfromar" id="" required>
                                <option value="" disabled selected>اختر من</option>
                                <?php
                                 $sqls = "SELECT * FROM  `cities`";
                                 $result = $mysqli->query($sqls);
                                 if ($result->num_rows > 0) {
                                     while($row = $result->fetch_assoc()){
                                         ?>
                                         <center><option value="<?php echo $row['name_arabic'] ?>">
                                         <?php echo $row['name_arabic']; ?></option></center>
                                         <?php
                                         }
                                        }
                                        else{
                                            echo "ERoor";
                                        }
                                        ?>
                            </select>
                            <label dir="rtl">من</label>
                        </div>
                        <div class="input-field col s12 l6" dir="rtl">
                            <select name="dtoar" id="" required>
                                <option value="" disabled selected>اختر إلى</option>
                               <?php
                                 $sqls = "SELECT * FROM  `cities`";
                                 $result = $mysqli->query($sqls);
                                 if ($result->num_rows > 0) {
                                     while($row = $result->fetch_assoc()){
                                         ?>
                                         <option value="<?php echo $row['name_arabic'] ?>">
                                         <?php echo $row['name_arabic']; ?> </option>
                                         <?php
                                         }
                                        }
                                        ?>
                            </select>
                            <label dir="rtl" for="">إلى</label>
                        </div>
                        <div class="input-field col s12 l6" dir="rtl">
                            <select name="dfrom" id="" required>
                                <option value="" disabled selected>Select From</option>
                                <?php
                                 $sqls = "SELECT * FROM  `cities`";
                                 $result = $mysqli->query($sqls);
                                 if ($result->num_rows > 0) {
                                     while($row = $result->fetch_assoc()){
                                         ?>
                                         <option value="<?php echo $row['name_english'] ?>">
                                         <?php echo $row['name_english']; ?> </option>
                                         <?php
                                         }
                                        }
                                        ?>
                            </select>
                            <label>From</label>
                        </div>
                        <div class="input-field col s12 l6" dir="rtl">
                            <select name="dto" id="" required>
                                <option value="" disabled selected>Select To</option>
                                <?php
                                 $sqls = "SELECT * FROM  `cities`";
                                 $result = $mysqli->query($sqls);
                                 if ($result->num_rows > 0) {
                                     while($row = $result->fetch_assoc()){
                                         ?>
                                         <center><option value="<?php echo $row['name_english'] ?>">
                                         <?php echo $row['name_english']; ?></option></center>
                                         <?php
                                         }
                                        }
                                        else{
                                            echo "ERoor";
                                        }
                                        ?>
                            </select>
                            <label for="">To</label>
                        </div>
                        <div class="row">
                            <div class="input-feild col s12 center">
                                <input type="submit" value="إضافة" name="dadd" class="btn btn-larger waves-effect waves-light orange darken-1" style="width:80%;">
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