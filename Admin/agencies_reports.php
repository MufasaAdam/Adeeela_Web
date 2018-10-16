<?php
session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
include('incloud/condb.php');
include('incloud/head.php');
if(isset($_GET['agancyid'])){
     $agancyid    =$_GET['agancyid'];
     $sql         ="DELETE FROM `agencies` WHERE `agency_id`='$agancyid'";
    if($mysqli->query($sql)===true){
                 ?><script>alert('<?php echo'The Agancy Has Been Deleted';?>');</script><?php
                                   }else{
        echo"Error:".$sql."<br>".$mysqli->error;
    }
}
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
                        <div class="col s12 l6">
                            <blockquote>
                                <h4>Manage Agencies</h4>
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
                               
                                <th>Agency (en)</th>
                                <th>Agency (ar)</th>
                                <th>Owner (en)</th>
                                <th>Owner (ar)</th>
                                <th>Owner's Phone No.</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                 $sqls = "SELECT * FROM `agencies`";
                                 $result = $mysqli->query($sqls);
                                 if ($result->num_rows > 0) {
                                     while($row = $result->fetch_assoc()){           
                            ?>
                            <tr>
                                
                                <td><?php echo $row['agency_name_english'] ?></td>
                                <td charset="utf-8"><?php echo $row['agency_name_arabic'] ?></td>
                                <td><?php echo $row['owner'] ?></td>
                                <td charset="utf-8"><?php echo $row['owner_ar'] ?></td>
                                <td><?php echo $row['ownphone'] ?></td>
                                <td colspan="2">
                                    <a href="agency_edit.php?agncyid=<?php echo $row['agency_id'] ?>">
                                        <span class="glyphicon glyphicon-pencil green-text" aria-hidden="true"></span>
                                    </a>&nbsp;
                                    <a href="agencies_reports.php?agancyid=<?php echo $row['agency_id'] ?>" onclick="confirm('are you sure?!');">
                                        <span class="glyphicon glyphicon-trash red-text" aria-hidden="true"></span>
                                    </a>
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

    <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
    <script type="text/javascript" src="../assets/js/my$cript.js"></script>
</body>

</html>