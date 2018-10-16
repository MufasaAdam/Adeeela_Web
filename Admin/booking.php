<?php
session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('incloud/condb.php');
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
                <form action="">
                    <div class="row">
                        <div class="col s12 l12">
                            <blockquote>
                                <h4>Customer's Booking Info</h4>
                            </blockquote>
                        </div>
                    </div>
                    <table class="highlight centered responsive-table bookingTable">
                        <thead>
                            <tr>
                                <th>Passenger's Name</th>
                                <th>Phone No.</th>
                                <th>Agency</th>
                                <th>Trip</th>
                                <th>Time</th>
                                <th>Date</th>
                                <th>Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                 $sqls = "SELECT * FROM `bookings`as a,`agencies` as b,`destination` as c where a.`agency_id`=b.`agency_id` and a.`trip_des`=c.`desitination_id` and a.`payment_status`!=0";
                                 $result = $mysqli->query($sqls);
                                 if ($result->num_rows > 0) {
                                     while($row = $result->fetch_assoc()){           
                            ?>
                            <tr>
                                <td><?php echo $row['passenger_name'] ?></td>
                                <td><?php echo $row['passenger_phone'] ?></td>
                                <td><?php echo $row['agency_name_english'] ?></td>
                                <td>From <?php echo $row['from'];?> To <?php echo $row['to']; ?></td>
                                <td><?php echo $row['booking_time'] ?></td>
                                <td><?php echo $row['booking_date'] ?></td>
                                <td><?php if($row['payment_status']==0){echo"Not Payed";}else{echo"Payed";} ?></td>
                            </tr>
                          <?php
                            
                                     }
                                 }
                            ?>
                        </tbody>
                    </table>
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