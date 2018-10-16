<?PHP
include("../admin/incloud/condb.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>التسجيل</title>
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
    <nav class="vis-on-med">
        <div class="nav-wrapper teal lighten-1">
            <a href="#" class="brand-logo center">التسجيل</a>
        </div>
    </nav>
    <div class="reg-page">
        <div class="reg-box">
            <form action=" regster.php" method="post">
                <div class="row no-margin" dir="rtl">
                    <div class="input-field col s12 l12">
                        <input name="name" type="text" id="name" required>
                        <label for="name">اسم</label>
                    </div>
                    <div class="input-field col s12 l12">
                        <input name="phone" type="number" id="phone_no" required>
                        <label for="phone_no">هاتف</label>
                    </div>
                    <div class="input-field col s12 l12">
                        <input name="email" type="email" id="email" required>
                        <label for="email">البريد الإلكتروني</label>
                    </div>
                    <label for="gender" class="padding">جنس</label>
                    <div class="row no-margin center">
                        <div class="input-field col s6 l6">
                            <p class="no-margin">
                                <label>
                                    <input class="with-gap" name="gender" type="radio" value="M" />
                                    <span>ذكر</span>
                                </label>
                            </p>
                        </div>
                        <div class="input-field col s6 l6">
                            <p class="no-margin">
                                <label>
                                    <input class="with-gap" name="gender" type="radio" value="F" />
                                    <span>أنثى</span>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="input-field col s12 l12">
                        <input name="password1" type="password" id="password" required>
                        <label for="password">كلمه السر</label>
                    </div>
                    <div class="input-field col s12 l12">
                        <input name="password2" type="password" id="con_password" required>
                        <label for="con_password">تأكيد كلمة المرور</label>
                    </div>
                    <div class="row no-margin">
                        <div class="input-field col s12 l12">
                            <input name="submit" class="waves-effect waves-teal btn" style="width:100%;">سجل</a>
                        </div>
                        <div class="input-field col s12 l12">
                            <p>هل لديك حساب..؟
                                <a href="index.php" class="waves-effect waves-teal btn-flat blue-text">تسجيل الدخول</a>
                            </p>
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
<?php
include("../../admin/incloud/condb.php");
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
    $password1 = mysqli_real_escape_string($mysqli, $_POST['password1']);
    $password2 = mysqli_real_escape_string($mysqli, $_POST['password2']);    
    if (empty($name)|| empty($phone)|| empty($email)|| empty($gender)|| empty($password1)|| empty($password2)){
        header("Location: ../register.php?signup=empty");
        exit();
    }elseif($password1!=$password2){
        header("Location: ../register.php?password doesnt match!");
        exit();
    }else{
        $sql = "SELECT * From customer where customer_phone = '$phone' ";
        $result = mysqli_query($mysqli,$sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck>0) {
            header("Location: ../register.php?phone number is already exsit!.");
            exit();
        } 
    }
    $hashedPwd = md5($password1);
    if($gender=='M'){
        $img="defulet.jpg";
    }elseif($gender=='F'){
        $img="defulet_f.jpg";
    }
    $qurey = "INSERT INTO `customer`(`customer_name`,`customer_phone`,`customer_email`,`customer_gender`,`customer_password`,`customer_picture`)
      VALUES (n'{$name}','{$phone}','{$email}','{$gender}','{$hashedPwd}','$img')";
    try{
        $result = mysqli_query($mysqli,$qurey);
        if (mysqli_affected_rows($mysqli)>0) {
            echo "resgtirtions seccessesd".header("Location: ../index.php");          
        }else{
            echo "error in regisertions";
        }
    }catch(Exception $ex){
        echo("erorr".$ex->getMessage());
    }
}else{
    header("Location: ../register.php");
    exit();
}
?>