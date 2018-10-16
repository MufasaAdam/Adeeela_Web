<?php
	session_start();
include('../admin/incloud/condb.php');
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
if(isset($_POST['send'])){
    $user         =$_SESSION['u_id'];
    $typoftrip    =$_POST['typoftrip'];
    $bustype      =$_POST['bustype'];
    $numofbus     =$_POST['numofbus'];
    $pickup       =$_POST['pickup'];
    $dropoff      =$_POST['dropoff'];
    $date         =$_POST['date'];
    $phone_number =$_POST['phone_number'];
    $sql          ="INSERT INTO `special_trip_request`(`trip_type`, `bus_type`, `number_of_buses`, `pickup_loctions`, `dropoff_location`, `date`, `phone_number`,`status`, `user_id`) VALUES ('$typoftrip','$bustype','$numofbus',N'$pickup',N'$dropoff','$date','$phone_number','1','$user')";
    if($mysqli->query($sql)===true){
                 ?><script>alert('<?php echo'تم الطلب بنجاح';?>');</script><?php
        
                                   }else{
        echo"Error:".$sqlup."<br>".$mysqli->error;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>طلب رحلة</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" media="screen" href="assets/css/materialize.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" media="screen" href="assets/css/master.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <!-- Navbar -->
    <div class="navbar-fixed vis-on-med">
        <nav class="vis-on-med">
            <div class="nav-wrapper teal lighten-1">
                <a onclick="goBack()" class="sidenav-trigger left"><i class="material-icons">arrow_back</i></a>
                <a href="#" class="brand-logo center">طلب رحلة
                </a>
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

    <div class="requestPage">
        <div class="">
            <div class="row">
                <div class="col s12 no-padding">
                    <ul class="tabs teal lighten-1">
                        <li class="tab col s6"><a href="#tripStatus">حالة الرحلة
                            </a></li>
                        <li class="tab col s6"><a class="active" href="#requestTrip">طلب رحلة
                            </a></li>
                    </ul>
                </div>

                <!-- Request Trip -->
                <div id="requestTrip" class="col s12">
                    <div class="workspace z-depth-5">
                        <div class="row no-margin">
                            <div class="col s12">
                                <blockquote>
                                    <h5 class="no-margin">يرجى ملء تفاصيل الرحلة الخاصة</h5>
                                </blockquote>
                            </div>
                        </div>
                        <form action="request_trip.php" method="post">
                            <div class="row">
                                <div class="input-field col s12 l4" dir="rtl">
                                    <input type="number" name="numofbus" id="no_ofBuses">
                                    <label for="no_ofBuses">عدد الباصات</label>
                                </div>
                                <div class="input-field col s12 l4" dir="rtl">
                                    <select name="bustype" id="">
                                        <option value="" disabled selected>اختر النوع</option>
                               <?php
                            $sqls = "SELECT * FROM `sptrip`";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
                                        <option value="<?php echo $row['bus_type'];?>"><?php echo $row['bus_type'];?> مقاعد</option>
                                        <?php
                                }
                            }
                                        ?>
                                    </select>
                                    <label for="">نوع الباص</label>
                                </div>
                                <div class="input-field col s12 l4" dir="rtl">
                                    <select name="typoftrip" id="">
                                        <option value="" disabled selected>اختر النوع</option>
                                                       <?php
                            $sqls = "SELECT * FROM `sptrip`";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
                                        <option value="<?php echo $row['ttype_id'];?>"><?php echo $row['trip_type_ar'];?></option>
                                       <?php
                                }
                            }
                                        ?>
                                    </select>
                                    <label for="">نوع الرحلة</label>
                                </div>
                            </div>
                            <div class="row" dir="rtl">
                                <div class="col s1"></div>
                                <div class="input-field col s12 l5">
                                    <input type="text" name="dropoff" id="locaiton_to">
                                    <label for="location_to">إلى أين</label>
                                </div>
                                <div class="input-field col s12 l5">
                                    <input type="text" name="pickup" id="locaiton_from">
                                    <label for="location_from">من اين</label>
                                </div>
                                <div class="col s1"></div>
                            </div>
                            <div class="row" dir="rtl">
                                <div class="col s1"></div>
                                <div class="input-field col s12 l5">
                                    <input type="number" name="phone_number" id="phone_number">
                                    <label for="phone_number">رقم الهاتف</label>
                                </div>
                                <div class="input-field col s12 l5">
                                    <input type="text" name="date" class="datepicker">
                                    <label for="">تاريخ</label>
                                </div>
                                <div class="col s1"></div>
                            </div>
                            <div class="row">
                                <div class="input-feild col s12 l12">
                                    <button style="width: 100%;" class="btn waves-effect waves-light teal" type="submit"
                                        name="send">اطلب الرحلة</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="row padding">
                        <div class="row hide-on-med-and-down" style="padding: 10px;">
                            <a class="btn-floating waves-effect waves-light right pulse red accent-1" onclick="goBack()"><i
                                    class="material-icons">arrow_forward</i></a>
                        </div>
                    </div>
                </div>

                <!-- Trip Status -->
                <div id="tripStatus" class="col s12">
                    <div class="workspace z-depth-5">
                        <div class="row no-margin">
                            <div class="col s12">
                                <blockquote>
                                    <h5 class="no-margin">طلباتك</h5>
                                </blockquote>
                            </div>
                        </div>
                        <?php
                            $sqls = "SELECT * FROM `special_trip_request` where user_id='".$_SESSION['u_id']."'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
                        <div class="row" style="padding: 0px 10px;" dir="rtl">
                            <table class="responsive centered highlight bordered requestTable">
                                <tbody>
                                    <tr>
                                        <td>نوع الرحلة</td>
                                        <td><?php echo $row['trip_type'];?></td>
                                    </tr>
                                    <tr>
                                        <td>نوع الباص</td>
                                        <td><?php echo $row['bus_type'];?> مقاعد</td>
                                    </tr>
                                    <tr>
                                        <td>عدد الباصات</td>
                                        <td><?php echo $row['number_of_buses'];?></td>
                                    </tr>
                                    <tr>
                                        <td>من </td>
                                        <td><?php echo $row['pickup_loctions'];?></td>
                                    </tr>
                                    <tr>
                                        <td>إلى</td>
                                        <td><?php echo $row['dropoff_location'];?></td>
                                    </tr>
                                    <tr>
                                        <td>تاريخ الرحلة
                                        </td>
                                        <td><?php echo $row['date'];?></td>
                                    </tr>
                                    <tr>
                                        <td>رقم الهاتف
                                        </td>
                                        <td><?php echo $row['phone_number'];?></td>
                                    </tr>
                                    <tr>
                                        <td>تاريخ</td>
                                        <td><?php $tody=date('Y-M-D');echo $tody;?></td>
                                    </tr>
                                    <tr>
                                        <td>الحالة</td>
                                        <td><?php if($row['status']==1){echo"انتظار";}else if($row['status']==2){echo"تمت";}else if($row['status']==3){echo"اتلغت";}?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php
                                }
                            }
                                        ?>
                        <div class="row">
                            <div class="col s12 l12">
                                <button style="width: 100%;" class="btn waves-effect waves-light teal center">إعادة تحميل
                                    الصفحة</button>
                            </div>
                        </div>
                    </div>
                    <div class="row padding">
                        <div class="row hide-on-med-and-down" style="padding: 10px;">
                            <a class="btn-floating waves-effect waves-light right pulse red accent-1" onclick="goBack()"><i
                                    class="material-icons">arrow_forward</i></a>
                        </div>
                    </div>
                </div>
            </div>
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