<?php 
session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('incloud/condb.php');
if(isset($_GET['bookid'])){
    $bookid=$_GET['bookid'];
    
    $sql           ="UPDATE `bookings` SET `payment_status`='1' WHERE`book_id`='$bookid'";
    if($mysqli->query($sql)===true){
                 ?><script>alert('<?php echo'Your Agancye added';?>');</script><?php
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
    <script type="text/javascript" src="../assets/js/my$cript.js"></script>

    <title>Adeela</title>
</head>

<body>
    <main>
        <ul id="dropdown1" class="dropdown-content">
            <li><a href="#!">one</a></li>
            <li><a href="#!">two</a></li>
            <li class="divider"></li>
            <li><a href="#!">three</a></li>
        </ul>
        <nav>
            <div class="nav-wrapper teal lighten-2">
                <a href="#" data-activates="slide-out" class="button-collapse left">
                    <i class="glyphicon glyphicon-menu-hamburger"></i>
                    <ul class="right">
                        <li><a class="dropdown-button waves-effect waves-light" href="#!" data-activates="dropdown1"><i
                                    class="material-icons right" style="margin: 0;">settings</i></a></li>
                    </ul>
                </a>
            </div>
        </nav>
       <?php 
include('incloud/nav.php');
      ?>
        <div class="workspace">
            <div class="mainCnt white">
                <form action="">
                    <div class="row" style="margin:0;">
                        <div class="col s12 l6">
                            <blockquote>
                                <h4>Special Trips</h4>
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
                            <tr class="">
                                <th colspan="9" class="orange white-text">Salespoints</th>
                            </tr>
                            <tr>
                                <th>Passenger's Name</th>
                                <th>Phone No.</th>
                                <th>Seat No.</th>
                                <th>From - To</th>
                                <th>time</th>
                                <th>Date</th>
                                <th>Agancy</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        $sqls = "SELECT * FROM `agencies`as a ,`bookings` as b,`trips`as t,`destination` as d WHERE b.`trip_id`=t.`trip_id` and b.`trip_des`=d.`desitination_id`and b.`agency_id`=b.`agency_id` and b.`payment_status`='0'";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                        ?>
                            <tr>
                                <td><?php echo $row['passenger_name'];?></td>
                                <td><?php echo $row['passenger_phone'];?></td>
                                <td><?php echo $row['set_num'];?></td>
                                <td>Form <?php echo $row['from'];?> To <?php echo $row['to'];?></td>
                                <td><?php echo $row['booking_time'];?></td>
                                <td><?php echo $row['booking_date'];?></td>
                                <td><?php echo $row['agency_name_english'];?></td>
                                <td>
                                    <a href="salespoint.php?bookid=<?php echo $row['book_id'];?>">
                                    Pay
                            </td>
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

    <script>

    </script>

    <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
</body>

</html>