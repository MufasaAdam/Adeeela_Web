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
                        <div class="col s12 l6">
                            <blockquote>
                                <h4>Manage Users</h4>
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
                                <th>Usertype</th>
                                <th>Username</th>
                                <th>Phone No.</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Image</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                 $sqls = "SELECT * FROM `users`";
                                 $result = $mysqli->query($sqls);
                                 if ($result->num_rows > 0) {
                                     while($row = $result->fetch_assoc()){           
                            ?>
                            <tr>
                                <td><?php echo $row['usertype'] ?></td>
                                <td><?php echo $row['username'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['f_name']." ".$row['l_name']; ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><img src="profile_image/<?php echo $row['profile_image'] ?>" style="width:50px !important;height:50px !important;"></td>
                            
                                <td colspan="2">
                                    <a href="editUser.php?uid=<?php echo $row['user_id'] ?>">
                                        <span class="glyphicon glyphicon-pencil green-text" aria-hidden="true"></span>
                                    </a>
                                 
                                    <a onclick="confirm('Are you sure!');" href="user.php?uid=<?php echo $row['user_id'] ?>" >
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
            <div class="row">
                <div>
                    <a class="btn-floating btn-large waves-effect waves-light tooltipped teal right" data-position="left"
                        data-delay="50" data-tooltip="Add new User" href="newUser.php"><i class="material-icons">add</i></a>
                </div>
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