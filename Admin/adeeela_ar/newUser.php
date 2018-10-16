<?php
	session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('../incloud/condb.php');
if(isset($_POST['adduser'])){
    $usertype   =$_POST['usertype'];
    $agancyid   =$_POST['agancyid'];
    $username   =$_POST['username'];
    $fname      =$_POST['fname'];
    $lname      =$_POST['lname'];
    $phone      =$_POST['phone'];
    $email      =$_POST['email'];
    $password   =md5($_POST['password']);
    $cpassword  =md5($_POST['cpassword']);
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
                $path            = "../profile_image/";
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
//file uplod end
    if($password === $cpassword){
        $sql             ="INSERT INTO `users`(`usertype`,`username`, `phone`, `pass`, `email`, `f_name`, `l_name`, `profile_image`, `agency_id`) VALUES ('$usertype','$username','$phone','$password','$email',n'$fname',n'$lname','$filepath','$agancyid')";
        if($mysqli->query($sql)===true){
                             ?> <script>alert('<?php echo'=تم الاضافة بنجاح';?>');</script><?php
                                       }else{
            echo"Error:".$sql."<br>".$mysqli->error;
        }
    }else{
        ?> <script>alert('<?php echo'كلمت السير غير مطابقة';?>');</script><?php
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
    <title>Users</title>
</head>

<body>
    <main>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">Log out</a></li>
            <li class="divider"></li>
            <div class="switch" style="margin:auto;">
                <label class="langSwitch">
                    en
                    <input type="checkbox" checked>
                    <span class="lever"></span>
                    ar
                </label>
            </div>
        </ul>
        <nav>
            <div class="nav-wrapper teal lighten-1">
                <ul>
                    <li class="right">
                        <a href="#" data-activates="slide-out" class="button-collapse left">
                            <i class="glyphicon glyphicon-menu-hamburger"></i>
                        </a>
                    </li>
                </ul>
                <ul class="left">
                    <li><a class="dropdown-button waves-effect waves-light" href="#!" data-activates="dropdown1"><i
                                class="material-icons right" style="margin: 0;">settings</i></a></li>
                </ul>
            </div>
        </nav>
          <?php 
include('assets/nav.php');
      ?>
        <div class="workspace">
            <div class="mainCnt white">
                <form action="newUser.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col s12" style="padding:0;">
                            <div class="orange darken-1 center white-text" style="border-bottom: 1px solid black; padding: 10px;">
                                <h4 style="margin:0;">مستخدم جديد</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l2">
                                <select name="usertype" required>
                                    <option value="" selected disabled>اختار النوع</option>
                                    <option value="1">مدير</option>
                                    <option value="2">وكالة</option>
                                    <option value="3">نقطت بيع</option>
                                </select>
                                <label for="" dir="rtl">النوع</label>
                            </div>
                            <div class="input-field col s12 l10">
                                <select name="agancyid" >
                                    <option value="0" selected>اختار وكالة</option>
                                    <?php
                                    $sqls   = "SELECT * FROM `agencies`";
                                    $result = $mysqli->query($sqls);
                                    if ($result->num_rows > 0) {
                                        while($row = $result->fetch_assoc()){
                                    ?>
                                    <option value="<?php echo $row['agency_id'] ?>">
                                        <?php echo $row['agency_name_arabic']; ?> 
                                    </option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <label dir="rtl" for="">وكالة</label>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 l4">
                                    <input name="lname" type="text" class="validate" required dir="rtl">
                                    <label for="l_name" dir="rtl">اسم العالة <i class="red-text">*</i></label>
                                </div>
                                <div class="input-field col s12 l4" dir="rtl">
                                    <input name="fname" type="text" class="validate" required>
                                    <label for="f_name">الاسم <i class="red-text">*</i></label>
                                </div>
                                <div class="input-field col s12 l4" dir="rtl">
                                    <input name="username" type="text" class="validate" required>
                                    <label for="usr_name">اسم المستخديم<i class="red-text">*</i></label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 l1"></div>
                                <div class="input-field col s12 l5" dir="rtl">
                                    <input name="phone"type="number" class="validate" required>
                                    <label for="usr_phone">رقم الهاتف<i class="red-text">*</i></label>
                                </div>
                                <div class="input-field col s12 l5" dir="rtl">
                                    <input name="email" type="email" class="validate">
                                    <label for="usr_email">البريد</label>
                                </div>
                            </div>
                            <div class="col s12 l1"></div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 l1">
                            </div>
                            <div class="input-field col s12 l5" dir="rtl">
                                <input name="cpassword" type="password" class="validate" required>
                                <label for="con_password" >تاكيد كلمت السر <i class="red-text">*</i></label>
                            </div>
                            <div class="input-field col s12 l5" dir="rtl">
                                <input name="password" type="password" class="validate" required>
                                <label for="password">كلمت السر <i class="red-text">*</i></label>
                            </div>
                            <div class="input-field col s12 l1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 l3"></div>
                            <div class="file-field input-field col s12 l6" dir="rtl">
                                <div class="btn">
                                    <span>الصورة الشخصية</span>
                                    <input type="file" name="pimg[]" required accept=".jpg,.png,.jpeg">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                            <div class="col s12 l3"></div>
                        </div>
                        <div class="row">
                            <div class="input-feild col s12 center">
                                <input type="submit" class="btn btn-larger waves-effect waves-light teal lighten-2" style="width:80%;" value="اضافة" name="adduser">
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