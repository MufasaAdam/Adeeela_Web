<?php

include("../../admin/incloud/condb.php");?>
<?php
if (isset($_POST['signin'])) {  
        
    $phone = mysqli_real_escape_string($mysqli, $_POST['username']);
    $password = mysqli_real_escape_string($mysqli,$_POST['password']);
    $hashedPwd = md5($password);

        if (empty($phone) || empty($password)) {
                header("Location: ../index.php?cannot be empty");
        } else {
            $sql = "SELECT * from `customer` where `customer_phone` = {$phone} and `customer_password`='{$hashedPwd}' ";
            $result = mysqli_query($mysqli,$sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck<1) {   
            header("Location: ../index.php?error");
                exit();
            }else {
                        
                        $_SESSION['id'] = $row['customer_id'];
                        $_SESSION['name'] = $row['customer_name'];
                        $_SESSION['phone'] = $row['customer_phone'];
                        $_SESSION['email'] = $row['customer_email'];
                        $_SESSION['pass'] = $row['customer_password'];
                        header("Location: ../book.php");

                        // exit();
                    
                    }
                        
                    }
            }else{
            
    header("Location: ../index.php?login error enter user name or password");
    exit();

}
?>