<?php
	session_start();
//include('connectdb.php');	
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}

include('../admin/incloud/condb.php');
if(isset($_POST['bookt'])){
$yourdes  =$_POST['yourdes'];
$agancyid =$_POST['agancyid'];
$time     =$_POST['time'];
$datea    =$_POST['datea'];
$tripid   =$_POST['tripid'];
date_default_timezone_set ("Africa/Cairo");
$dateres  =date('Y/m/d');
$timeres  =date('H:i:s');
$price    =$_POST['price'];
$user_id  =$_SESSION['u_id'];
$sql      ="INSERT INTO `bookings`(`trip_id`, `booking_date`, `booking_time`, `user_id`,`agency_id`,`trip_des`,`date_reserved`,`time_res`,`t_price`,`payment_status`) VALUES ('$tripid','$datea','$time','$user_id','$agancyid','$yourdes','$dateres','$timeres','$price','0')";
    if($mysqli->query($sql)===true){
                 ?><script>alert('<?php echo'Your Agancye added';?>');</script><?php
        header('location:bus.php?tripid='.$tripid.'');
                                   }else{
        echo"Error:".$sql."<br>".$mysqli->error;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>وجهة الرحلة</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" media="screen" href="assets/css/materialize.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" media="screen" href="assets/css/master.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
function Dest(v)
{
	window.location.assign("book.php?dest="+v);
}
        function All(v)
{
    var mypage=window.location.href;
	window.location.assign(mypage+"&&agncay="+v);
}
         </script>
</head>

<body>

    <!-- Navbar -->
    <div class="navbar-fixed vis-on-med">
        <nav class="vis-on-med">
            <div class="nav-wrapper teal lighten-1">
                <a onclick="goBack()" class="sidenav-trigger left"><i class="material-icons">arrow_back</i></a>
                <a href="#" class="brand-logo center">الوجهة والوقت</a>
                <a href="bus.php" class="sidenav-trigger right">التالى</a>
            </div>
        </nav>
    </div>

    <!-- Side Nav -->
    <ul id="slide-out" class="sidenav right-aligned sidenav-fixed">
        <li>
            <div class="user-view teal lighten-2 center">
                <div class="background">
                    <img src="assets/img/road.jpg">
                </div>
                <a href="#user"><img class="circle auto-margin" src="assets/img/admin.jpg"></a>
                <a href="#name"><span class="white-text name">Mustafa
                        Adam</span></a>
                <a href="#email"><span class="white-text email">mustafa@gmail.com</span></a>
            </div>
        </li>
        <li><a class="waves-effect" href="home.php"><i class="material-icons teal-text">home</i> الصفحة
                الرئيسية
            </a></li>
        <li><a class="waves-effect" href="account.php"><i class="material-icons teal-text">account_box</i> الحساب</a></li>
        <li><a class="waves-effect" href="booking.php"><i class="material-icons teal-text">book</i> حجوزات </a></li>
        <li><a class="waves-effect" href="transaction.php"><i class="material-icons teal-text">swap_horiz</i>
                عمليات</a></li>
        <li><a class="waves-effect" href="salespoints.php"><i class="material-icons teal-text">place</i> نقاط البيع
            </a></li>
        <li><a class="waves-effect" href="help.php"><i class="material-icons teal-text">help</i> مساعدة</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="waves-effect" href="about.php"><i class="material-icons teal-text">info</i>معلوماتنا
            </a></li>
        <li><a class="waves-effect" href="contact_us.php"><i class="material-icons teal-text">phone</i>تصل إلينا</a></li>
        <li><a class="waves-effect" href="../home.php"><i class="material-icons teal-text">translate</i>غير اللغة</a></li>
        <li><a class="waves-effect" href="index.php"><i class="material-icons teal-text">power_settings_new</i>الخروج</a></li>
    </ul>

    <div class="page">
        <div class="center hide-on-med-and-down">
            <a class="btn-floating waves-effect waves-light right pulse red accent-1" onclick="goBack()"><i class="material-icons">arrow_forward</i></a>
            <h5>اختر وجهة</h5>
        </div>
        <div class="workspace z-depth-5">
            <form action="book.php" method="post">
                <div class="row">
                    <div class="input-field col s12 l4">
                        <input type="text" class="datepicker">
                        <label for="">تاريخ</label>
                    </div>
                    <div class="input-field col s12 l4">
                        <select name="yourdes" id="dest"  onchange="Dest(this.value)">
                            <option value="" disabled selected>خيارك</option>
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
                        <label>الوجهة</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 l6">
                        <select id="all" onchange="All(this.value)" name="agancyid">
                            <option value="" disabled selected>خيارك</option>
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
                        <label>وكالة</label>
                    </div>
                    <div class="input-field col s12 l6">
                        <select name="time">
                            <option value="" disabled selected>خيارك</option>
                            <?php
                            if(isset($_GET['dest']) & isset($_GET['agncay'])){
                                $dest = $_GET['dest'];
                                $agncay = $_GET['agncay'];
                                $sqls = "SELECT a.`agency_id`,b.`agency_name_english`,a.`time_id`,a.`destination_id`,a.`trip_price`,a.`trip_date`,a.`trip_price` FROM `trips` as a,`agencies`as b where a.`agency_id`=b.`agency_id` and a.`destination_id`='$dest' and a.`agency_id`='$agncay'";
                                $result = $mysqli->query($sqls);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()){
                            ?>
                            <option  value="<?php echo $row['time_id'];?>">
                                <?php echo $row['time_id'];?>
                            </option>
                            <?php
                                        ?>
                            <input type="hidden" name="price" value="<?php echo $row['trip_price'];?>">
                            <?php
                                    }
                                }
                            }
                            ?>
                        </select>
                        <label>الوقت</label>
                    </div>
                    <div class="input-field col s12 l6">
                        <select name="datea">
                            <option value="" disabled selected>خيارك</option>
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
                        <label>التاريخ</label>
                    </div>
                    <div class="row hide-on-med-and-down">
                        <div class="input-field col s12 l12 center">
                            <button style="width: 100%;" class="btn waves-effect waves-light" type="submit" name="bookt">التالى
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row center">
                    <div class="preloader-wrapper big active">
                        <div class="spinner-layer spinner-teal">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="gap-patch">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>

                        <div class="spinner-layer spinner-yellow">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="gap-patch">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>

                        <div class="spinner-layer spinner-blue">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="gap-patch">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>

                        <div class="spinner-layer spinner-green">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="gap-patch">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <!-- Import Jquery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- Import Materialize JavaScrip -->
    <script src="assets/js/materialize.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="assets/js/$cript.js"></script>
</body>

</html>