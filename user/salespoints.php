<?php
	session_start();
//include('connectdb.php');	
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('../admin/incloud/condb.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Salespoints</title>
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
            <a href="home.php" class="sidenav-trigger left"><i class="material-icons">arrow_back</i></a>
            <a href="#" class="brand-logo center">Salespoints</a>
        </div>
    </nav>

    <!-- Side Nav -->
      <?php
    include_once("include/nav.php");
    ?>
    <div class="page">
        <div class="center hide-on-med-and-down">
            <a class="btn-floating waves-effect waves-light left pulse red accent-1" onclick="goBack()"><i class="material-icons">arrow_back</i></a>
            <h5>Choose the nearest Salespoint</h5>
        </div>
        <div class="workspace">
            <form action="">
                <div class="row">
                    <div class="input-field col s12 l12">
                        <select name="" id="">
                            <option value="1">Khartoum</option>
                            <option value="2">Omdurman</option>
                            <option value="2">Port Sudan</option>
                        </select>
                    </div>
                </div>
                <div class="row no-margin">
                    <blockquote>
                        <h5 class="no-margin">You can book direclty from any of the salespoints below.</h5>
                    </blockquote>
                </div>
                <div class="row">
                    <div class="col s12 l12">
                        <table class="centered responsive highlight bordered">
                            <thead class="">
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Owner name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $sqls = "SELECT * FROM `salepoint`";
                            $result = $mysqli->query($sqls);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()){
                            ?>
                                <tr>
                                    <td><?php echo $row['name_eng'];?></td>
                                    <td><?php echo $row['phone_num'];?></td>
                                    <td><?php echo $row['address_eng'];?></td>
                                    <td><?php echo $row['salep_respons_en'];?></td>
                                </tr>
                                <?php
                                }
                            }
                                ?>
                            </tbody>
                        </table>
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