<?php
session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
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
    <title>Users</title>
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
                                <th>No.</th>
                                <th>Username</th>
                                <th>Phone No.</th>
                                <th>Password</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Agency</th>
                                <th>User Type</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Mufasa</td>
                                <td>09????????</td>
                                <td>MD5_mF%@(f</td>
                                <td>Mustafa</td>
                                <td>Adam</td>
                                <td> - </td>
                                <td>Admin</td>
                                <td>
                                    <a href="editUser.php">
                                        <span class="glyphicon glyphicon-pencil green-text" aria-hidden="true"></span>
                                    </a>
                                </td>
                                <td>
                                    <a href="">
                                        <span class="glyphicon glyphicon-trash red-text" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Getto Romio</td>
                                <td>09????????</td>
                                <td>MD5_mF%@(f</td>
                                <td>Mustafa</td>
                                <td>Adam</td>
                                <td> - </td>
                                <td>Admin</td>
                                <td>
                                    <a href="editUser.php">
                                        <span class="glyphicon glyphicon-pencil green-text" aria-hidden="true"></span>
                                    </a>
                                </td>
                                <td>
                                    <a href="">
                                        <span class="glyphicon glyphicon-trash red-text" aria-hidden="true"></span>
                                    </a>
                                </td>
                            </tr>
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