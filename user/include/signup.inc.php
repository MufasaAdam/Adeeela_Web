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
      VALUES ('{$name}','{$phone}','{$email}','{$gender}','{$hashedPwd}','$img')";
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