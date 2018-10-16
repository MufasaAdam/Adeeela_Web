 <ul id="slide-out" class="side-nav fixed borderNoShad teal lighten-2">
            <li>
                <div class="user-view center teal lighten-1">
                    <div class="background center">
                        <!-- <img src="../assets/img/logo.png" width="100" height="100" style="padding:5px;"> -->
                    </div>
                    <a href="#!user"><img class="circle auto-margin" src="profile_image/<?php echo $_SESSION['u_photo'];?>"></a>
                    <a href="#!<?php echo $_SESSION['u_name'];?>"><span class="white-text name"><?php echo $_SESSION['u_name'];?></span></a>
                    <a href="#!<?php echo $_SESSION['u_email'];?>"><span class="white-text email"><?php echo $_SESSION['u_email'];?></span></a>
                </div>
            </li>
            <ul class="collapsible" data-collapisble="accordion">
                <li class="teal lighten-2">
                    <a class="collapsible-header waves-effect white-text">Manage
                        <i class="glyphicon glyphicon-menu-down right white-text"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul class="orange lighten-5">
                            <li>
                                <a href="agency.php" class="waves-effect waves-light">Agency</a>
                            </li>
                            <li>
                                <a href="city.php" class="waves-effect waves-light">City</a>
                            </li>
                            <li>
                                <a href="destination.php" class="waves-effect waves-light">Destinations</a>
                            </li>
                            <li>
                                <a href="trip.php" class="waves-effect waves-light">Trip</a>
                            </li>
                            <li>
                                <a href="bus.php" class="waves-effect waves-light">Bus</a>
                            </li>
                            <li>
                                <a href="manageBus.php" class="waves-effect waves-light">Manage Seat</a>
                            </li>
                            <li><a href="advert.php" class="waves-effect waves-light">Advertisment</a></li>
                        </ul>
                    </div>
                </li>
                <li class="teal lighten-2">
                    <a class="collapsible-header waves-effect white-text">Reports
                        <i class="glyphicon glyphicon-menu-down right white-text"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul class="orange lighten-5">
                            <li>
                                <a href="booking.php" class="waves-effect waves-light">Bookings</a>
                            </li>
                            <li>
                                <a href="agencies_reports.php" class="waves-effect waves-light">Agencies</a>
                            </li>
                            <li>
                                <a href="user.php" class="waves-effect waves-light">Users</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="teal lighten-2">
                    <a class="collapsible-header waves-effect white-text">Salespoints
                        <i class="glyphicon glyphicon-menu-down right white-text"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul class="orange lighten-5">
                            <li>
                                <a href="addsalepoint.php" class="waves-effect waves-light">Add new</a>
                            </li>
                            <li>
                                <a href="salespoint.php" class="waves-effect waves-light">Confirmation</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="teal lighten-2">
                    <a class="collapsible-header waves-effect white-text">Special Trip
                        <i class="glyphicon glyphicon-menu-down right white-text"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul class="orange lighten-5">
                            <li>
                                <a href="managet.php" class="waves-effect waves-light">Manage Trip</a>
                            </li>
                            <li>
                                <a href="stc.php" class="waves-effect waves-light">Trip Confrmation</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="teal lighten-2">
                    <a class="collapsible-header waves-effect white-text" href="logout.php">Logout
                    </a>
                </li>
            </ul>
        </ul>