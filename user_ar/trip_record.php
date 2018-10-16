<?php
	session_start();
include('../admin/incloud/condb.php');
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
if(isset($_POST['remove'])){
    $del=$_POST['del'];
    $sql          ="DELETE FROM `special_trip_request` WHERE `request_id`='$del'";die();
    if($mysqli->query($sql)===true){
                 ?><script>alert('<?php echo'Your Request is Removed successfuly';?>');</script><?php
        
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
    <title>حالة التذاكر</title>
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
                <a href="#" class="brand-logo center">حالة التذاكر</a>
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
        <li><a class="waves-effect" href="home.php"><i class="material-icons teal-text">home</i> Home</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons teal-text">account_box</i> Account</a></li>
        <li class="active"><a class="waves-effect" href="#!"><i class="material-icons teal-text">book</i> Bookings</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons teal-text">swap_horiz</i> Transaction</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons teal-text">place</i> Salespoints</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons teal-text">help</i> Help</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="waves-effect" href="#!"><i class="material-icons teal-text">info</i> About Us</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons teal-text">phone</i> Contact Us</a></li>
        <li><a class="waves-effect" href="#!"><i class="material-icons teal-text">translate</i> Change Language</a></li>
        <li><a class="waves-effect" href="index.php"><i class="material-icons teal-text">power_settings_new</i>Log out</a></li>
    </ul>

    <div class="page">
        <div class="row no-margin">
            <div class="row hide-on-med-and-down" style="padding:0;">
                <a class="btn-floating waves-effect waves-light right pulse red accent-1" onclick="goBack()"><i class="material-icons">arrow_forward</i></a>
            </div>
        </div>
        <div class="workspace z-depth-5">
            <?php
                            if (isset($_GET['r_id'])){
                            $rid    =$_GET['r_id'];
                            $userid =$_SESSION['u_id'];
                            $sqls   ="SELECT * FROM `special_trip_request`as a ,`sptrip` as b WHERE a.`trip_type`=b.`ttype_id` and `user_id`='$userid' and `status`='1' and `request_id`='$rid' ";
                            $result =$mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
            <form action="trip_record.php?r_id=<?php echo $rid;?>" method="post">
                <table class="centered highlight responsive" dir="rtl">
                    <thead>
                        <tr>
                            <th>التفاصيل</th>
                            <th>القيمة</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>من</td>
                            <td><?php echo $row['pickup_loctions'];?></td>
                        </tr>
                        <tr>
                            <td>إلى</td>
                            <td><?php echo $row['dropoff_location'];?></td>
                        </tr>
                        <tr>
                            <td>التاريخ</td>
                            <td><?php echo $row['date'];?></td>
                        </tr>
                        <tr>
                            <td>نوع</td>
                            <td><?php echo $row['bus_type'];?></td>
                        </tr>
                        <tr>
                            <td>عدد البصات</td>
                            <td><?php echo $row['number_of_buses'];?></td>
                        </tr>
                        <tr>
                            <td>السعر</td>
                            <td><?php echo $row['price'];?></td>
                        </tr>
                        <tr>
                            <td>نوع الرحلة</td>
                            <td><?php echo $row['trip_type_ar'];?></td>
                        </tr>
                    </tbody>
                </table>
                <input type="hidden" name="del" value="<?php echo $row['request_id'];?>">
                <div class="row no-margin">
                    <div class="col s2 l2"></div>
                    <div class="input-field col s8 l8"> <button style="width: 100%;" class="btn waves-effect waves-light pulse red"
                            type="submit" name="remove">حذف
                        </button></div>
                    <div class="col s2 l2"></div>
                </div>
            </form>
            <?php
                                }
                            }
                            }
                        ?>
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