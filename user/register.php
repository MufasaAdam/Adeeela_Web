<?PHP
include("../admin/incloud/condb.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
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
            <a href="regiser.php" class="brand-logo center">Sign Up</a>
        </div>
    </nav>
    <div class="reg-page">
        <div class="reg-box">
            <form action="include/signup.inc.php" method="post">
                <div class="row no-margin">
                    <div class="input-field col s12 l12">
                        <input name="name" type="text" id="name" required>
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s12 l12">
                        <input name="phone" type="text" id="phone_no" required>
                        <label for="phone_no">Phone</label>
                    </div>
                    <div class="input-field col s12 l12">
                        <input name="email" type="email" id="email" required>
                        <label for="email">Email</label>
                    </div>
                    <label for="gender" class="padding">Gender</label>
                    <div class="row no-margin center">
                        <div class="input-field col s6 l6">
                            <p class="no-margin">
                                <label>
                                    <input class="with-gap" name="gender" type="radio" value="M" />
                                    <span>Male</span>
                                </label>
                            </p>
                        </div>
                        <div class="input-field col s6 l6">
                            <p class="no-margin">
                                <label>
                                    <input class="with-gap" name="gender" type="radio" value="F" />
                                    <span>Female</span>
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="input-field col s12 l12">
                        <input name="password1" type="password" id="password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="input-field col s12 l12">
                        <input name="password2" type="password" id="con_password" required>
                        <label for="con_password">Confirm
                            Password</label>
                    </div>
                    <div class="row no-margin">
                        <div class="input-field col s12 l12 center">
                            <input value="Create Account" type="Submit" name="submit" class="waves-effect waves-teal btn white-text">
                        </div>
                        <div class="input-field col s12 l12">
                            <p>Already have an Account..?
                                <a href="index.php" class="waves-effect waves-teal btn-flat blue-text">Log in</a>
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