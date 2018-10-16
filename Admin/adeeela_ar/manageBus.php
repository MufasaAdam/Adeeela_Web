<?php
session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('../incloud/condb.php');
if(isset($_POST['bookt'])){
$yourdes  =$_POST['yourdes'];
$agancyid =$_POST['agancyid'];
$time     =$_POST['time'];
$datea    =$_POST['datea'];
$tripid   =$_POST['tripid'];
$dateres  =date('Y/m/d');
$sqls      ="SELECT * FROM `trips` where `trip_id`='$tripid'";
    $result = $mysqli->query($sqls);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
        $busid=$row['bus_id'];
        }
    }
    $sql="INSERT INTO `bus_set`(`trip_id`, `bus_id`, `set_1`, `set_2`, `set_3`, `set_4`, `set_5`, `set_6`, `set_7`, `set_8`, `set_9`, `set_10`, `set_11`, `set_12`, `set_13`, `set_14`, `set_15`, `set_16`, `set_17`, `set_18`, `set_19`, `set_20`, `set_21`, `set_22`, `set_23`, `set_24`, `set_25`, `set_26`, `set_27`, `set_28`, `set_29`, `set_30`, `set_31`, `set_32`, `set_33`, `set_34`, `set_35`, `set_36`, `set_37`, `set_38`, `set_39`, `set_40`, `set_41`, `set_42`, `set_43`, `set_44`, `set_45`, `set_46`, `set_47`, `set_48`, `set_49`) VALUES ('$tripid','$busid','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4','4')";
    if($mysqli->query($sql)===true){
          ?><script>alert('<?php echo'Your Agancye added';?>');</script><?php
                                    header('location:manageBusSeat.php?tripid='.$tripid.'');
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

    <title>Adeela</title>
     <script>
function Dest(v)
{
	window.location.assign("manageBus.php?dest="+v);
}
        function All(v)
{
    var mypage=window.location.href;
	window.location.assign(mypage+"&&agncay="+v);
}
         </script>
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
                <form action="manageBus.php" method="post" accept-charset="UTF-8">
                    <div class="row">
                        <div class="col s12" style="padding:0;">
                            <div class="orange darken-1 white-text center" style="border-bottom: 1px solid black; padding: 10px;">
                                <h4 style="margin:0;">ادارة المقاعد</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 l8"  dir="rtl">
                        <select name="yourdes" id="dest"  onchange="Dest(this.value)">
                            <option value="" disabled selected>اختار</option>
                            <?php
                            $sqls = "SELECT * FROM `destination`";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
                            <option value="<?php echo $row['desitination_id'];?>"
                            <?php if(isset($_GET['dest']) and $_GET['dest'] == $row['desitination_id']){ echo 'selected';}?>
                                    >
                                   من <?php echo $row['from_ar'];?> الي <?php echo $row['to_ar'];?> 
                           
                            </option>
                             <?php
                                }
                            }
                            ?>
                           
                        </select>
                        <label dir="rtl">الوجهة</label>
                    </div>
                            <div class="input-field col s12 l4" dir="rtl">
                        <select id="all" onchange="All(this.value)" name="agancyid">
                            <option value="" disabled selected>اختار</option>
                            <?php
                            if(isset($_GET['dest'])){
                                $dest = $_GET['dest'];
                                $sqls = "SELECT a.`agency_id`,b.`agency_name_arabic`,a.`time_id`,a.`destination_id`,a.`trip_price`,a.`trip_date` FROM `trips` as a,`agencies`as b where a.`agency_id`=b.`agency_id` and a.`destination_id`='$dest'";
                                $result = $mysqli->query($sqls);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()){
                            ?>
                            <option  value="<?php echo $row['agency_id'];?>"
                                    <?php if(isset($_GET['agncay']) and $_GET['agncay'] == $row['agency_id']){ echo 'selected';}?>

                                    ><?php echo $row['agency_name_arabic'];?></option>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </select>
                        <label dir="rtl">الوكالة</label>
                    </div>
                        </div>
                        <div class="row" >
                             <div class="input-field col s12 l6" dir="rtl">
                        <select name="time">
                            <option value="" disabled selected>اختار</option>
                            <?php
                            if(isset($_GET['dest']) & isset($_GET['agncay'])){
                                $dest = $_GET['dest'];
                                $agncay = $_GET['agncay'];
                                $sqls = "SELECT a.`agency_id`,b.`agency_name_english`,a.`time_id`,a.`destination_id`,a.`trip_price`,a.`trip_date` FROM `trips` as a,`agencies`as b where a.`agency_id`=b.`agency_id` and a.`destination_id`='$dest' and a.`agency_id`='$agncay'";
                                $result = $mysqli->query($sqls);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()){
                            ?>
                            <option  value="<?php echo $row['time_id'];?>">
                                <?php echo $row['time_id'];?>
                            </option>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </select>
                        <label dir="rtl">الساعة</label>
                    </div>
                    <div class="input-field right col s12 l6" dir="rtl">
                        <select name="datea">
                            <option value="" disabled selected>اختار</option>
                            <?php
                            if(isset($_GET['dest']) & isset($_GET['agncay'])){
                                $dest = $_GET['dest'];
                                $agncay = $_GET['agncay'];
                                $sqls = "SELECT a.`trip_id`,a.`agency_id`,b.`agency_name_english`,a.`time_id`,a.`destination_id`,a.`trip_price`,a.`trip_date` FROM `trips` as a,`agencies`as b where a.`agency_id`=b.`agency_id` and a.`destination_id`='$dest' and a.`agency_id`='$agncay'";
                                $result = $mysqli->query($sqls);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()){
                            ?>
                            <option  value="<?php echo $row['trip_date'];?>">
                                <?php echo $row['trip_date'];?>
                            </option>
                            <input type="hidden" name="tripid" value="<?php echo $row['trip_id'];?>">
                            <?php
                                    }
                                }
                            }
                            ?>
                        </select>
                        <label dir="rtl" for="التاريخ">التاريخ</label>
                    </div>                
                        <div class="row">
                            <div class="input-feild col s12 center">
                                <button class="btn btn-larger waves-effect waves-light orange darken-1" type="submit" name="bookt" style="width:80%;">ادارة</button>
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

    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/my$cript.js"></script>
</body>

</html>