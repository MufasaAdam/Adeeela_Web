<ul id="slide-out" class="side-nav fixed borderNoShad right-aligned teal lighten-1">
        <li class="teal lighten-2">
                <div class="user-view center">
                    <a href="#!user"><img class="circle" style="margin:auto;" src="../profile_image/<?php echo $_SESSION['u_photo'];?>"></a>
                    <a href="#!<?php echo $_SESSION['u_name'];?>"><span class="white-text name"><?php echo $_SESSION['u_name'];?></span></a>
                    <a href="#!<?php echo $_SESSION['u_email'];?>"><span class="white-text email"><?php echo $_SESSION['u_email'];?></span></a>
                </div>
            </li>
      <ul class="collapsible" data-collapisble="accordion">
        <li class="teal lighten-1">
          <a class="collapsible-header waves-effect white-text">تدبير
            <i class="glyphicon glyphicon-menu-down left white-text"></i>
          </a>
          <div class="collapsible-body">
            <ul class="orange lighten-5">
              <li>
                <a href="agency.php" class="waves-effect  waves-light">وكالة</a>
              </li>
              <li>
                <a href="city.php" class="waves-effect waves-light">مدينة</a>
              </li>
              <li>
                <a href="bus.php" class="waves-effect waves-light">الحافلة</a>
              </li>
            <li>
                <a href="manageBus.php" class="waves-effect waves-light">ادارة المقاعد</a>
            </li>
              <li>
                <a href="destination.php" class="waves-effect waves-light">الأماكن</a>
              </li>
              <li>
                <a href="trip.php" class="waves-effect waves-light">الرحلة</a>
              </li>
              <li>
              <a href="advert.php" class="waves-effect waves-light">الإعلانات</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="teal lighten-1">
          <a class="collapsible-header waves-effect white-text">تقارير
            <i class="glyphicon glyphicon-menu-down left white-text"></i>
          </a>
          <div class="collapsible-body">
            <ul class="orange lighten-5">
              <li>
                <a href="booking.php" class="waves-effect waves-light">الحجوزات</a>
              </li>
              <li>
                <a href="agencies_reports.php" class="waves-effect waves-light">وكالات</a>
              </li>
              <li>
                <a href="user.php" class="waves-effect waves-light">المستخدمين</a>
              </li>
                
            </ul>
          </div>
        </li>
          <li class="teal lighten-1">
                    <a class="collapsible-header waves-effect white-text">نقاط البيع
                        <i class="glyphicon glyphicon-menu-down left white-text"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul class="orange lighten-5">
                            <li>
                                <a href="addsalepoint.php" class="waves-effect waves-light">اضافت جديدة</a>
                            </li>
                            <li>
                                <a href="salespoint.php" class="waves-effect waves-light">استلام</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="teal lighten-1">
                    <a class="collapsible-header waves-effect white-text">الرحلة الخاصة
                        <i class="glyphicon glyphicon-menu-down left white-text"></i>
                    </a>
                    <div class="collapsible-body">
                        <ul class="orange lighten-5">
                            <li>
                                <a href="managet.php" class="waves-effect waves-light">ادارة الرحلة</a>
                            </li>
                            <li>
                                <a href="stc.php" class="waves-effect waves-light">تاكيد الحجز</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="">
                    <a class="collapsible-header waves-effect white-text" href="logout.php">تسجيل الخروج
                    </a>
                </li>
      </ul>
    </ul>