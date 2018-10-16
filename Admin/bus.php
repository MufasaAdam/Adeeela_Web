<?php
session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('incloud/condb.php');
if(isset($_POST['addbus'])){
    $agency_id  =$_POST['agency_id'];	
    $bus_set    =$_POST['bus_set'];						
    date_default_timezone_set ("Africa/Cairo");
    $date      =date("Y/m/d");
    $time      =date("h:i");
    //validation for attchment//
    //end of the validation for file//
    if(isset($_FILES['busimg']['name'])){
        for($i=0; $i<count($_FILES['busimg']['name']); $i++)
        {
            $tmpFilePath = $_FILES['busimg']['tmp_name'][$i];
            if ($tmpFilePath != ""){
                $path = "bus_images/";
                $name = $_FILES['busimg']['name'][$i];
                $size = $_FILES['busimg']['size'][$i];
                list($txt, $ext) = explode(".", $name);
                $file= substr(str_replace(" ", "_", $txt), 0);
                $info = pathinfo($file);
                $filename = $file.".".$ext;
                if(move_uploaded_file($_FILES['busimg']['tmp_name'][$i], $path.$filename))
                {
                    date_default_timezone_set ("Africa/Khartoum");
                    $currentdate=date("d M Y");
                    $file_name_all=$filename;
                }
            }
        }//end of Loop//
        $filepath = rtrim($file_name_all);
    }else{
        $filepath="Error";
    }
    $sql        ="INSERT INTO `buss`(`Agency_id`, `photo`, `bus_seat_num`) VALUES ('$agency_id','$filepath','$bus_set')";
    if($mysqli->query($sql)===true){
                    ?> <script>alert('<?php echo'Your bus has been added Succsesfuly';?>');</script><?php
                                   }else{
        echo"Error:".$sql."<br>".$mysqli->error;
    }
}
?>
  <?php 
include('incloud/head.php');
      ?>
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
        <div class="workspace">
            <div class="mainCnt white">
                <form action="bus.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col s12" style="padding:0;">
                            <div class="orange darken-1 white-text center" style="border-bottom: 1px solid black; padding: 10px;">
                                <h4 style="margin:0;">Bus</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 l4">
                                <select name="agency_id" id="" required>
                                    <option value="" disabled selected>Choose Agency</option>
                                    <?php
                                 $sqls = "SELECT * FROM `agencies`";
                                 $result = $mysqli->query($sqls);
                                 if ($result->num_rows > 0) {
                                     while($row = $result->fetch_assoc()){
                                         ?>
                                         <option value="<?php echo $row['agency_id'] ?>">
                                         <?php echo $row['agency_name_english']; ?> </option>
                                         <?php
                                         }
                                        }
                                        ?>
                                </select>
                                <label>Agnecy</label>
                            </div>
                            <div class="file-field input-field col s12 l4">
                                <div class="btn orange darken-1">
                                    <span>Bus Image</span>
                                    <input type="file" name="busimg[]" required accept=".jpg,.png,.jpeg">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text">
                                </div>
                            </div>
                            <div class="input-field col s12 l4">
                                <input type="number" name="bus_set" class="validate">
                                <label for="busSeatNo">Bus Seat Number</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-feild col s12 center">
                                <input type="submit" value="Add" name="addbus" class="btn btn-larger waves-effect waves-light orange darken-1" style="width:80%;">
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