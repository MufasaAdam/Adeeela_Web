<?php 
session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('incloud/condb.php');
if(isset($_POST['addtrip'])){
    $agencie_id      =$_POST['agencie_id'];
    $timeu           =$_POST['timeu'];
    $datepp          =$_POST['datepp'];
    $bus_id          =$_POST['bus_id'];
    $price           =$_POST['price'];
    $did             =$_POST['did'];
    $sql             ="INSERT INTO `trips`(`agency_id`, `time_id`,`trip_date`, `bus_id`, `trip_price`, `destination_id`) VALUES ('$agencie_id','$timeu','$datepp','$bus_id','$price','$did')";
    if($mysqli->query($sql)===true){
                               ?> <script>alert('<?php echo'Your Trips added Succsesfuly';?>');</script><?php
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
                <form action="trip.php" method="post">
                    <div class="row">
                        <div class="col s12" style="padding:0;">
                            <div class="orange darken-1 white-text center" style="border-bottom: 1px solid black; padding: 10px;">
                                <h4 style="margin:0;">Trip</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 l4">
                                <select name="agencie_id" id="">
                                    <option value="" disabled selected>Choose Agency</option>
                                    <?php
                                 $sqls = "SELECT * FROM `agencies`";
                                 $result = $mysqli->query($sqls);
                                 if ($result->num_rows > 0) {
                                     while($row = $result->fetch_assoc()){
                                         ?>
                                         <option value="<?php echo $row['agency_id'] ?>">
                                         <?php echo $row['agency_name_english']; ?></option>
                                         <?php
                                         }
                                        }
                                        ?>
                                </select>
                                <label>Agnecy</label>
                            </div>
                            <div class="input-field col s12 l4">
                                <input id="timepkr" type="text"  name="timeu" class="timepicker">
                                <label for="timepkr">Time</label>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 l4">
                                    <input id="datepkr" type="date" name="datepp" class="datepicker" required>
                                    <label for="datepkr">Date</label>
                                </div>
                                <div class="input-field col s12 l4">
                                    <select name="bus_id" id="">
                                        <option value="" disabled selected>Select Bus</option>
                                        <?php
                                 $sqls = "SELECT * FROM `buss`";
                                 $result = $mysqli->query($sqls);
                                 if ($result->num_rows > 0) {
                                     while($row = $result->fetch_assoc()){
                                         ?>
                                         <option value="<?php echo $row['bus_id'] ?>">
                                         <?php echo $row['bus_seat_num']; ?> Seates</option>
                                         <?php
                                         }
                                        }
                                        ?>
                                    </select>
                                    <label for="">Bus</label>
                                </div>
                                <div class="input-field col s12 l4">
                                    <input type="number" name="price" id="">
                                    <label for="ticketPrice">Price</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12 l12">
                                    <select name="did" id="">
                                        <option value="" disabled selected>Select Destination</option>
                                        <?php
                                         $sqls = "SELECT * FROM `destination`";
                                         $result = $mysqli->query($sqls);
                                         if ($result->num_rows > 0) {
                                            while($row = $result->fetch_assoc()){
                                         ?>
                                         <option value="<?php echo $row['desitination_id'] ?>">
                                         From <?php echo $row['from']; ?> To <?php echo $row['to']; ?> </option>
                                         <?php
                                         }
                                        }
                                        ?>
                                        <label for="">Destination ID</label>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-feild col s12 center">
                                <input type="submit" class="btn btn-larger waves-effect waves-light orange darken-1" style="width:80%;" name="addtrip" value="Add">
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