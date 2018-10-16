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
    <title>Account</title>
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
    <nav class="vis-on-med">
        <div class="nav-wrapper teal lighten-1">
            <a href="#" data-target="slide-out" class="sidenav-trigger left"><i class="material-icons">menu</i></a>
            <a href="#" class="brand-logo center">Account</a>
        </div>
    </nav>

    <!-- Side Nav -->
    <?php
    include_once("include/nav.php");
    ?>
    <?php
                            $sqls = "SELECT * FROM `customer` WHERE `customer_id`='".$_SESSION['u_id']."'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
    <div class="page">
        <form action="account.php" method="post"  enctype="multipart/form-data">
        <div class="row no-padding">
            <div class="center hide-on-med-and-down">
                <a class="btn-floating waves-effect waves-light left pulse red accent-1" onclick="goBack()"><i class="material-icons">arrow_back</i></a>
                <h5>Account Settings</h5>
            </div>
        </div>
        <div class="workspace">
            
                <div class="row">
                    <div class="input-field col s12 l4">
                        <input type="text" name="name" value="<?php echo $row['customer_name'];?>">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field col s12 l4">
                        <input type="text" name="" value="<?php 
                                    if($row['customer_gender']==='M'){echo "Male";}else{echo "Female";}
                                                          ?>" id="gender" readonly>
                        <label for="gender">Gender</label>
                    </div>
                    <div class="input-field col s12 l4">
                        <input type="number" name="phone" id="phone_no" value="<?php echo $row['customer_phone'];?>">
                        <label for="phone_no">Phone</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 l4">
                        <input type="email" name="email" id="email" value="<?php echo $row['customer_email'];?>">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                            <div class="col s12 l3"></div>
                            <div class="file-field input-field col s12 l6">
                                <div class="btn teal">
                                    <span>Profile Picture</span>
                                    <input type="file" name="pimg[]"  accept=".jpg,.png,.jpeg">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                <div class="row">
                    <div class="input-field col s12 l12">
                        <input style="width: 100%;" class="btn waves-effect waves-light teal" style="color:#fff !important;"type="submit" name="updateacc" value="Confirm">
                       
                    </div>
                </div>
        </div>
            </form>
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