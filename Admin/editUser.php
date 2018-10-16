<?php
session_start();
if(!isset($_SESSION['u_id']))
{ header('location:index.php');}
?>
<  <?php 
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
                        <div class="col s12" style="padding:0;">
                            <div class="orange darken-1 center white-text" style="border-bottom: 1px solid black; padding: 10px;">
                                <h4 style="margin:0;">Edit User</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 l2">
                                <select name="" id="">
                                    <option value="" selected disabled>Choose Type</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Agency</option>
                                    <option value="3">User</option>
                                </select>
                                <label for="">Type</label>
                            </div>
                            <div class="input-field col s12 l10">
                                <select name="" id="">
                                    <option value="" selected disabled>Select Agency</option>
                                    <option value="1">Agency 1</option>
                                    <option value="2">Agency 2</option>
                                    <option value="3">Agency 3</option>
                                </select>
                                <label for="">Agency</label>
                            </div>

                            <div class="row">
                                <div class="input-field col s12 l4">
                                    <input id="" type="text" class="validate">
                                    <label for="usr_name">Username<i class="red-text">*</i></label>
                                </div>
                                <div class="input-field col s12 l4">
                                    <input id="" type="text" class="validate">
                                    <label for="f_name">First Name</label>
                                </div>
                                <div class="input-field col s12 l4">
                                    <input id="" type="text" class="validate">
                                    <label for="l_name">Last Name</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 l1"></div>
                                <div class="input-field col s12 l5">
                                    <input id="" type="number" class="validate">
                                    <label for="usr_phone">Phone Number<i class="red-text">*</i></label>
                                </div>
                                <div class="input-field col s12 l5">
                                    <input id="" type="email" class="validate">
                                    <label for="usr_email">E-mail</label>
                                </div>
                            </div>
                            <div class="col s12 l1"></div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 l1">
                            </div>
                            <div class="input-field col s12 l5">
                                <input id="" type="password" class="validate">
                                <label for="password">Password <i class="red-text">*</i></label>
                            </div>
                            <div class="input-field col s12 l5">
                                <input id="" type="password" class="validate">
                                <label for="con_password">Confirm Password</label>
                            </div>
                            <div class="input-field col s12 l1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-feild col s12 center">
                                <button class="btn btn-larger waves-effect waves-light teal lighten-2" style="width:80%;">Save</button>
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