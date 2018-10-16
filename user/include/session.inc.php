<?php 
include("../../admin/incloud/condb.php");
include("singin.inc.php");

session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");    

}elseif ($_SESSION['login']) {
  $sql = "SELECT * from `customer` where `customer_name` = '{$_SESSION['name']}' and `custmoer_password`='{$_SESSION['pass']}' ";
  $res = mysqli_qurey($conn, $sql);
  if (mysqli_num_rows($res)==0) {
      return false;
      exit();
  }else {
      $row = mysqli_fetch_array($res);
      $_SESSION['user'] = $row['customer_name'];
      $_SESSION['email'] = $row['customer_email'];
      $_SESSION['phone'] = $row['customer_phone'];
      $_SESSION['id'] = $row['id'];
      return true;
  }

} 

?>