<?php
session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('incloud/condb.php');
if(isset($_POST['payed'])){
$price =$_POST['price'];
$r_id  =$_POST['r_id'];  
$sql   ="UPDATE `special_trip_request` SET `price`='$price' WHERE `request_id`='$r_id'";
    if($mysqli->query($sql)===true){
        ?><script>alert('<?php echo'Payment Completed';?>');</script><?php
        
                                   }else{
        echo"Error:".$sqlup."<br>".$mysqli->error;
    }

}
if(isset($_POST['cancel'])){
$r_id  =$_POST['r_id'];
    $sql   ="DELETE FROM `special_trip_request` WHERE `request_id`='$r_id'";
    if($mysqli->query($sql)===true){
        ?><script>alert('<?php echo'Calncel Completed';?>');</script><?php
        
                                   }else{
        echo"Error:".$sqlup."<br>".$mysqli->error;
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
                
                    <div class="row">
                        <div class="col s12 l6">
                            <blockquote>
                                <h4>Manage Special Trip</h4>
                            </blockquote>
                        </div>
                        <div class="input-field col s12 l6">
                            <input type="search" name="" id="search" class="customSearch" onkeyup="searchFilter()"
                                required>
                            <label for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </div>
                    <table id="table" class="highlight centered responsive-table bookingTable">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Phone No.</th>
                                <th>Type of Trip</th>
                                <th>Type of Bus</th>
                                <th>Number of Buses</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Date</th>
                                <th>Price</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sqls = "SELECT * FROM `special_trip_request`as a ,`sptrip` as b WHERE a.`trip_type`=b.`ttype_id` and `status`='1'";
                                $result = $mysqli->query($sqls);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()){
                            ?>
                            <form action="">
                            <tr>
                                <td><?php echo $row['request_id'];?></td>
                                <td><?php echo $row['phone_number'];?></td>
                                <td><?php echo $row['trip_type_en'];?></td>
                                <td><?php echo $row['bus_type'];?> seats</td>
                                <td><?php echo $row['number_of_buses'];?></td>
                                <td><?php echo $row['pickup_loctions'];?></td>
                                <td><?php echo $row['dropoff_location'];?></td>
                                <td><?php echo $row['date'];?></td>
                                <td>
                                    
                                    <div class="input-feild">
                                        <input type="number" name="price" placeholder="Enter Price">
                                        <input type="hidden" name="r_id"  value="<?php echo $row['request_id'];?>">
                                    </div>
                                 </td>
                                <td>
                                    <input class="btn orange darken-1" type="submit" name="payed" value="Payed">
                                </td>
                                <td>
                                    <input class="btn orange darken-1" type="submit" name="cancel" value="Cancel">
                                </td>
                            </tr>
                </form>
                <?php
                                    }
                                }
                        ?>
                        </tbody>
                    </table>
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