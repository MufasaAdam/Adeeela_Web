<?php 
	session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('incloud/condb.php');
if(isset($_POST['adds'])){
    $spansor   =$_POST['spansor'];
    $urladd    =$_POST['urladd'];
    //file upload profile pecutre section
    date_default_timezone_set ("Africa/Khartoum");
    $date      =date("Y/m/d");
    $time      =date("h:i");
    //validation for attchment//
    //end of the validation for file//
    if(isset($_FILES['advr']['name'])){
        for($i=0; $i<count($_FILES['advr']['name']); $i++)
        {
            $tmpFilePath = $_FILES['advr']['tmp_name'][$i];
            if ($tmpFilePath != ""){
                $path            = "Advrtisment/";
                $name            = $_FILES['advr']['name'][$i];
                $size            = $_FILES['advr']['size'][$i];
                list($txt, $ext) = explode(".", $name);
                $file            = substr(str_replace(" ", "_", $txt), 0);
                $info            = pathinfo($file);
                $filename        = $file.".".$ext;
                if(move_uploaded_file($_FILES['advr']['tmp_name'][$i], $path.$filename)){
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
    $sql="INSERT INTO `advertisment`(`spansor`, `ura`, `adds_imag`) VALUES ('$spansor','$urladd','$filepath')";
    if($mysqli->query($sql)===true){
           ?> <script>alert('<?php echo'Advertisment Created Succsesfuly';?>');</script><?php
                                   }else{
        echo"Error:".$sql."<br>".$mysqli->error;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" />
    <link type="text/css" rel="stylesheet" href="../assets/css/icons.css">
    <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="../assets/css/master.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Adeela</title>
</head>

<body>
    <main>
        <nav>
            <div class="nav-wrapper teal lighten-2">
                <a href="#" data-activates="slide-out" class="button-collapse left">
                    <i class="glyphicon glyphicon-menu-hamburger"></i>
                </a>
            </div>
        </nav>
 <?php 
include('incloud/nav.php');
      ?>
        <!-- SideNav include php code goes here -->

        <div class="workspace">
            <div class="mainCnt white">
                <form action="advert.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col s12" style="padding:0;">
                            <div class="orange darken-1 white-text center" style="border-bottom: 1px solid black; padding: 10px;">
                                <h4 style="margin:0;">Advertisment</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 l4">

                            </div>
                            <div class="input-field col s12 l4">
                                <div class="file-field input-field">
                                    <div class="btn orange darken-1">
                                        <span>Image</span>
                                        <input type="file" name="advr[]" required accept=".jpg,.png,.jpeg">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="input-field col s12 l4">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col l4 s12"></div>
                            <div class="input-field col s12 l4">
                                <input id="" type="text" name="spansor" class="validate">
                                <label for="">Sponsor<i class="red-text">*</i></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col l4 s12"></div>
                            <div class="input-field col s12 l4">
                                <input id="" type="text" name="urladd" class="validate">
                                <label for="">URL<i class="red-text">*</i></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-feild col s12 center">
                                <button class="btn btn-larger waves-effect waves-light orange darken-1" style="width:80%;" type="submit" name="adds">Add</button>
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

    <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="../assets/js/my$cript.js"></script>
</body>

</html>