<?php
session_start();
include_once("incloud/condb.php");
$error_msg = '';
$user_name = '';
$password = '';
if(isset($_POST['login'])){
    $user_name = $_POST['user_name'];
    $password  = $_POST['password'];
    $password  = md5($password);
	$sql = "SELECT * FROM `users` WHERE `username`='$user_name' AND `pass`='$password'";
	$query = mysqli_query($mysqli,$sql);
	if(mysqli_num_rows($query))
	{
		$result = mysqli_fetch_array($query);
		$_SESSION['u_id'] = $result['user_id'];
		$_SESSION['u_name'] = $result['f_name']." ".$result['l_name'];
		$_SESSION['u_photo'] = $result['profile_image'];
		$_SESSION['u_phone'] = $result['phone'];
		$_SESSION['u_email'] = $result['email'];
		$_SESSION['agency_id'] = $result['agency_id'];
		
		header('location:agency.php');
	}
	else
	{
		$msg = "<p style='color:#FFF;'>Username or Password are incorrect!<p>";
	}
}
		
?>
<?php 
include('incloud/head.php');
      ?>

<body style="background-color: #fffbde">
    <main>
        <!-- <div class="row">
            <div class="col s12 l12 center">
                <img class="login-img" src="../assets/img/icon.png" alt="">
            </div>
        </div> -->
        <div class="row">
            <div class="login-space">
                <div class="login-box">
                    <div class="row">
                        <form class="col s12" action="index.php" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="username" name="user_name" type="text" class="validate">
                                    <label for="username">Username</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" name="password" class="validate">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="s12 l12 center">
                                    <input type="submit" name="login" value="Log in" class="btn lgn waves-effect teal lighten-2">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="row">
        <div class="col s12 l12 center">
            <img class="brand-name" src="../assets/img/logo.png" alt="">
        </div>
    </div>
    <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="../assets/js/my$cript.js"></script>
</body>

</html>