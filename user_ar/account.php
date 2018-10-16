<?php
	session_start();
//include('connectdb.php');	
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('../admin/incloud/condb.php');
if(isset($_POST['updateacc'])){
//file upload profile pecutre section
    date_default_timezone_set ("Africa/Khartoum");
    $date      =date("Y/m/d");
    $time      =date("h:i");
//validation for attchment//
//end of the validation for file//
    if(isset($_FILES['pimg']['name'])){
        for($i=0; $i<count($_FILES['pimg']['name']); $i++)
        {
            $tmpFilePath = $_FILES['pimg']['tmp_name'][$i];
            if ($tmpFilePath != ""){
                $path            = "assets/profile_image/";
                $name            = $_FILES['pimg']['name'][$i];
                $size            = $_FILES['pimg']['size'][$i];
                list($txt, $ext) = explode(".", $name);
                $file            = substr(str_replace(" ", "_", $txt), 0);
                $info            = pathinfo($file);
                $filename        = $file.".".$ext;
                if(move_uploaded_file($_FILES['pimg']['tmp_name'][$i], $path.$filename)){
                    date_default_timezone_set ("Africa/Khartoum");
                    $currentdate   =date("d M Y");
                    $file_name_all =$filename;
                }
            }
        }//end of Loop//
        $filepath = rtrim($file_name_all);
    }else{
        $filepath ="Error";
    }
    $name     =$_POST['name'];
    $phone    =$_POST['phone'];
    $email    =$_POST['email'];
    $sqlup    ="UPDATE `customer` SET`customer_name`='$name',`customer_phone`='$phone',`customer_email`='$email',`customer_picture`='$filepath' WHERE `customer_id`='".$_SESSION['u_id']."'";
    if($mysqli->query($sqlup)===true){
                 ?><script>alert('<?php echo'Your Profile Updated';?>');</script><?php
        
                                   }else{
        echo"Error:".$sqlup."<br>".$mysqli->error;
    }
//file uplod end
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>الحساب</title>
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
                <a href="#" data-target="slide-out" class="sidenav-trigger left"><i class="material-icons">menu</i></a>
                <a href="#" class="brand-logo center">الحساب</a>
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
        <li class="active"><a class="waves-effect" href="account.php"><i class="material-icons teal-text">account_box</i>
                الحساب</a></li>
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
 <?php
                            $sqls = "SELECT * FROM `customer` WHERE `customer_id`='".$_SESSION['u_id']."'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
    <div class="page">
        <div class="row no-padding">
            <div class="center hide-on-med-and-down">
                <a class="btn-floating waves-effect waves-light left pulse red accent-1" onclick="goBack()"><i class="material-icons">arrow_back</i></a>
                <h5>Account Settings</h5>
            </div>
        </div>
        <div class="workspace">
            <form action="account.php" method="post"  enctype="multipart/form-data">
                <div class="row" dir="rtl">
                    <div class="input-field col s12 l6">
                        <input type="number" name="phone" id="phone_no" value="<?php echo $row['customer_phone'];?>">
                        <label for="phone_no">هاتف</label>
                    </div>
                    <div class="input-field col s12 l6">
                        <input type="text" name="name" value="<?php echo $row['customer_name'];?>">
                        <label for="name">اسم</label>
                    </div>
                </div>
               
                    <div class="input-field col s12 l4">
                        <input type="email" name="email" id="email" value="<?php echo $row['customer_email'];?>">
                        <label for="email">البريد الإلكتروني</label>
                    </div>
        <div class="row">
                            <div class="col s12 l3"></div>
                            <div class="file-field input-field col s12 l6">
                                <div class="btn teal">
                                    <span>الصورة الشخصية</span>
                                    <input type="file" name="pimg[]"  accept=".jpg,.png,.jpeg">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
        
                <div class="row">
                    <div class="input-field col s12 l12">
                        <button style="width: 100%;" class="btn waves-effect waves-light teal" type="submit" name="updateacc">حفظ
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php
                                }
                            }
        ?>
    <!-- Import Jquery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- Import Materialize JavaScrip -->
    <script src="assets/js/materialize.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="assets/js/$cript.js"></script>
</body>

</html>