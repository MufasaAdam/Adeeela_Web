<?php
	session_start();
include('../admin/incloud/condb.php');
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
if(isset($_POST['remove'])){
    $del=$_POST['del'];
    $sql          ="DELETE FROM `special_trip_request` WHERE `request_id`='$del'";
    if($mysqli->query($sql)===true){
                 ?><script>alert('<?php echo'Your Request is Removed successfuly';?>');</script><?php
        
                                   }else{
        echo"Error:".$sqlup."<br>".$mysqli->error;
    }

}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>History Record</title>
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
            <a onclick="goBack()" class="sidenav-trigger left"><i class="material-icons">arrow_back</i></a>
            <a href="#" class="brand-logo center">History Record</a>
        </div>
    </nav>

    <!-- Side Nav -->
         <?php
    include_once("include/nav.php");
    ?>

    <div class="page">
        <div class="row no-margin">
            <div class="row hide-on-med-and-down" style="padding:0;">
                <a class="btn-floating waves-effect waves-light left pulse red accent-1" onclick="goBack()"><i class="material-icons">arrow_back</i></a>
            </div>
        </div>
        <div class="workspace z-depth-5">
            <?php
                            if (isset($_GET['r_id'])){
                            $rid    =$_GET['r_id'];
                            $userid =$_SESSION['u_id'];
                            $sqls   ="SELECT * FROM `special_trip_request`as a ,`sptrip` as b WHERE a.`trip_type`=b.`ttype_id` and `user_id`='$userid' and `status`='1' and `request_id`='$rid' ";
                            $result =$mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
            <form action="trip_record.php?r_id=<?php echo $rid;?>" method="post">
                <table class="centered highlight responsive">
                    <thead>
                        <tr>
                            <th>Detail</th>
                            <th>Value</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>From</td>
                            <td><?php echo $row['pickup_loctions'];?></td>
                        </tr>
                        <tr>
                            <td>To</td>
                            <td><?php echo $row['dropoff_location'];?></td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td><?php echo $row['date'];?></td>
                        </tr>
                        <tr>
                            <td>Bus Type</td>
                            <td><?php echo $row['bus_type'];?></td>
                        </tr>
                        <tr>
                            <td>Number of Buses</td>
                            <td><?php echo $row['number_of_buses'];?></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td><?php echo $row['price'];?></td>
                        </tr>
                        <tr>
                            <td>Trip Type</td>
                            <td><?php echo $row['trip_type_en'];?></td>
                        </tr>
                    </tbody>
                </table>
                <input type="hidden" name="del" value="<?php echo $row['request_id'];?>">
                <div class="row no-margin">
                    <div class="col s2 l2"></div>
                    <div class="input-field col s8 l8"> <button style="width: 100%;" class="btn waves-effect waves-light pulse red"
                            type="submit" onclick="confirm('are you dure!');" name="remove">Remove
                        </button></div>
                    <div class="col s2 l2"></div>
                </div>
            </form>
            <?php
                                }
                            }
                            }
                        ?>
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