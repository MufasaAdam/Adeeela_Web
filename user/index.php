<?php
session_start();
include_once("../admin/incloud/condb.php");
$error_msg = '';
$user_name = '';
$password = '';
if(isset($_POST['login'])){
    $user_name = $_POST['user_name'];
    $password  = $_POST['password'];
    $password  = md5($password);
	$sql = "SELECT * From customer where customer_phone='$user_name' AND customer_password='$password'";
	$query = mysqli_query($mysqli,$sql);
	if(mysqli_num_rows($query))
	{
		$result = mysqli_fetch_array($query);
		$_SESSION['u_id'] = $result['customer_id'];
		$_SESSION['u_name'] = $result['customer_name'];
		$_SESSION['u_photo'] = $result['customer_picture'];
		$_SESSION['u_phone'] = $result['customer_phone'];
		$_SESSION['u_email'] = $result['customer_email'];
		
		header('location:home.php');
	}
	else
	{
		$msg = "<p style='color:#FFF;'>Username or Password are incorrect!</p>";
	}
}
		
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
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
    <main>
        <div class="row">
            <div class="login-page">
                <div class="login-box">
                    <form action="index.php" method="POST">
                        <div class="row no-margin">
                            <div class="input-field col s12 l12">
                                <input name="user_name" type="text" id="username">
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field col s12 l12">
                                <input name="password" type="password" id="password">
                                <label for="password">Password</label>
                            </div>
                            <div class="row no-margin">
                                <div class="input-field col s4 l4">
                                    <button class="btn waves-effect waves-light teal" type="submit" name="login">Log
                                        in
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                                <div class="input-field col s8 l8">
                                    <p>Dont have an Account?...
                                        <a href="register.php" class="waves-effect waves-teal btn-flat blue-text">Sign
                                            up</a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <div class="row">
        <div class="col s12 l12 center">
            <img class="brand-name" src="../assets/img/logo.png" alt="">
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