<ul id="slide-out" class="sidenav sidenav-fixed">
        <li>
            <div class="user-view teal lighten-2 center">
                <div class="background">
                    <img src="assets/img/road.jpg">
                </div>
                <a href="#user"><img class="circle auto-margin" src="assets/profile_image/<?php echo $_SESSION['u_photo'];?>"></a>
                <a href="#<?php echo $_SESSION['u_name'];?>"><span class="white-text name"><?php echo $_SESSION['u_name'];?></span></a>
                <a href="#email"><span class="white-text email"><?php echo $_SESSION['u_email'];?></span></a>
            </div>
        </li>
        <li class="active"><a class="waves-effect" href="home.php"><i class="material-icons teal-text">home</i> Home</a></li>
        <li><a class="waves-effect" href="account.php"><i class="material-icons teal-text">account_box</i> Account</a></li>
        <li><a class="waves-effect" href="booking.php"><i class="material-icons teal-text">book</i> Bookings</a></li>
        <li><a class="waves-effect" href="transaction.php"><i class="material-icons teal-text">swap_horiz</i>
                Transaction</a></li>
        <li><a class="waves-effect" href="salespoints.php"><i class="material-icons teal-text">place</i> Salespoints</a></li>
        <li><a class="waves-effect" href="help.php"><i class="material-icons teal-text">help</i> Help</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="waves-effect" href="about.php"><i class="material-icons teal-text">info</i> About Us</a></li>
        <li><a class="waves-effect" href="contact_us.php"><i class="material-icons teal-text">phone</i> Contact Us</a></li>
        <li><a class="waves-effect" href="user_ar/home.php"><i class="material-icons teal-text">translate</i> Change
                Language</a></li>
        <li><a class="waves-effect" href="logout.php"><i class="material-icons teal-text">power_settings_new</i>Log out</a></li>
    </ul>