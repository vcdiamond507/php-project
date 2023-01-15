<?php
        session_start();
?>
<!-- sidebar menu start -->
<div class="sidebar-menu sticky-sidebar-menu" style=" margin-top: 0px; position: fixed; top: 0px; left: 0px; height: 100vh;">

    <!-- logo start -->
    <div class="logo" style=" height: 10vh;">
        <h1><a href="index.php" style="margin-top:2vh;">V.C.D.</a></h1>
    </div>



    <div class="logo-icon text-center" style="height: 10vh;">
        <a href="index.php" title="logo"><img src="assets/images/icon.png" alt="logo-icon" style="height: 10vh;"> </a>
    </div>
    <!-- //logo end -->

    <div class="sidebar-menu-inner">

        <!-- sidebar nav start -->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li class="active"><a href="index.php"><i class="fa fa-tachometer"></i><span>
                        Dashboard</span></a>
            </li>


            <!-- <li class="menu-list">
                <a href="#"><i class="fa fa-cogs"></i>
                    <span>Elements <i class="lnr lnr-chevron-right"></i></span></a>
                <ul class="sub-menu-list">
                    <li><a href="carousels.html">Carousels</a> </li>
                    <li><a href="cards.html">Default cards</a> </li>
                    <li><a href="people.html">People cards</a></li>
                </ul>
            </li> -->


            <!-- <li class="menu-list"><a href="#"><i class="fa fa-book"></i>
                    <span>More pages <i class="lnr lnr-chevron-right"></i></span></a>
                <ul class="sub-menu-list">
                    <li><a href="timeline.html">Timeline</a></li>
                    <li><a href="error.html">404</a></li>
                    <li><a href="blank-page.html">Blank Page</a></li>
                </ul>
            </li> -->


            <!-- <li><a href="charts.html"><i class="fa fa-pie-chart"></i> <span>Charts</span> 
              <label
                        class="label label-primary"> new</label></a></li>
            <li><a href="pricing.html"><i class="fa fa-table"></i> <span>Pricing tables</span> 
            </a></li> -->


            <!-- <li class="menu-list"><a href="#"><i class="fa fa-envelope"></i>
                    <span>Mailbox <i class="lnr lnr-chevron-right"></i></span></a>
                <ul class="sub-menu-list">
                    <li><a href="inbox.html">Inbox</a> </li>
                    <li><a href="#compose-mail.html">Compose Mail</a></li>
                </ul>
            </li> -->


            <!-- <li><a href="blocks.html"><i class="fa fa-th"></i> <span>Content blocks</span> 
             </a> 
            </li> -->


            <li class="menu-list"><a href="#"><i class="fa fa-question-circle"></i>
                  <span>Faq/Charges/Offers <i class="lnr lnr-chevron-right"></i></span></a>
                  <ul class="sub-menu-list">
                  <li><a href="faq.php">Faq</a> </li>
                  <li><a href="charges.php">Charges/Offers</a></li>
                  </ul>
                  </li>


            <?php
                if(isset($_SESSION['login']) && $_SESSION['login']=="success")
                {
                 
                }
                else
                {
                  echo(' <li class="menu-list"><a href="#"><i class="fa fa-user"></i>
                  <span>User <i class="lnr lnr-chevron-right"></i></span></a>
                  <ul class="sub-menu-list">
                  <li><a href="login.php">Login</a> </li>
                  <li><a href="signup.php">Sign Up</a></li>
                  <li><a href="forgot-password.php">Forgot Password</a></li>
                  </ul>
                  </li>');
                }
             ?>
           
           
           

           <!-- <li><a href="forms.html"><i class="fa fa-file-text"></i> <span>Forms</span></a> 
            </li> -->
        </ul>
        <!-- //sidebar nav end -->
        <!-- toggle button start -->
        <a class="toggle-btn">
            <i class="fa fa-angle-double-left menu-collapsed__left"><span>Detailed View</span>
            </i>
            <i class="fa fa-angle-double-right menu-collapsed__right"></i>
        </a>
        <!-- //toggle button end -->
    </div>
</div>
<!-- //sidebar menu end -->





<!-- header-starts -->
<div class="header " style="background-color:rgb(234, 234, 234);box-shadow: 0px 0px 30px 0px rgb(57, 57, 57); display: flex; align-items: center; justify-content: end;  height: 10vh; width: 100vw; margin-top: 0px; position: sticky; top: 0px; left: 0px; z-index: 1;">

    <!-- notification menu start -->
    <div class="menu-right">
        <div class="navbar user-panel-top">
            <div class="search-box">
                <form action="#search-results.html" method="get">
                    <input class="search-input" placeholder="Search Here..." type="search" id="search">
                    <button class="search-submit" value=""><span class="fa fa-search"></span></button>
                </form>
            </div>

            <?php
                if(isset($_SESSION['login']) && $_SESSION['login']=="success")
                {
                  $userfname = $_SESSION['username'];
                  $userftext = $userfname[0];
                  echo('<div class="user-dropdown-details d-flex">
                  <div class="profile_details_left">
                    <ul class="nofitications-dropdown">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i><span class="badge blue">3</span></a>
                        <ul class="dropdown-menu">
                          <li>
                            <div class="notification_header">
                              <h3>You have 3 new notifications</h3>
                            </div>
                          </li>
                          <li><a href="#" class="grid">
                              <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                              <div class="notification_desc">
                                <p>Johnson purchased template</p>
                                <span>Just Now</span>
                              </div>
                            </a></li>
                          <li class="odd"><a href="#" class="grid">
                              <div class="user_img"><img src="assets/images/avatar2.jpg" alt=""></div>
                              <div class="notification_desc">
                                <p>New customer registered </p>
                                <span>1 hour ago</span>
                              </div>
                            </a></li>
                          <li><a href="#" class="grid">
                              <div class="user_img"><img src="assets/images/avatar3.jpg" alt=""></div>
                              <div class="notification_desc">
                                <p>Lorem ipsum dolor sit amet </p>
                                <span>2 hours ago</span>
                              </div>
                            </a></li>
                          <li>
                            <div class="notification_bottom">
                              <a href="#all" class="bg-primary">See all notifications</a>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-comment-o"></i><span class="badge blue">4</span></a>
                        <ul class="dropdown-menu">
                          <li>
                            <div class="notification_header">
                              <h3>You have 4 new messages</h3>
                            </div>
                          </li>
                          <li><a href="#" class="grid">
                              <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                              <div class="notification_desc">
                                <p>Johnson purchased template</p>
                                <span>Just Now</span>
                              </div>
                            </a></li>
                          <li class="odd"><a href="#" class="grid">
                              <div class="user_img"><img src="assets/images/avatar2.jpg" alt=""></div>
                              <div class="notification_desc">
                                <p>New customer registered </p>
                                <span>1 hour ago</span>
                              </div>
                            </a></li>
                          <li><a href="#" class="grid">
                              <div class="user_img"><img src="assets/images/avatar3.jpg" alt=""></div>
                              <div class="notification_desc">
                                <p>Lorem ipsum dolor sit amet </p>
                                <span>2 hours ago</span>
                              </div>
                            </a></li>
                          <li><a href="#" class="grid">
                              <div class="user_img"><img src="assets/images/avatar1.jpg" alt=""></div>
                              <div class="notification_desc">
                                <p>Johnson purchased template</p>
                                <span>Just Now</span>
                              </div>
                            </a></li>
                          <li>
                            <div class="notification_bottom">
                              <a href="#all" class="bg-primary">See all messages</a>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
        
        
                  <div class="profile_details">
                    <ul>
                      <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenu3" aria-haspopup="true" aria-expanded="false">
                          <div class="profile_img">
                            <span style=" margin-top:-7px;background-color:black; display:flex;justify-content:center;align-items:center; color : white">'.$userftext.'</span>
                            <div class="user-active">
                              <span></span>
                            </div>
                          </div>
                        </a>
                        <ul class="dropdown-menu drp-mnu" aria-labelledby="dropdownMenu3">
                          <li class="user-info">
                            <h5 class="user-name">'. $userfname.'</h5>
                            <span class="status ml-2">Available</span>
                          </li>
                          <li> <a href="#"><i class="lnr lnr-user"></i>My Profile</a> </li>
                          <li> <a href="#"><i class="lnr lnr-users"></i>1k Followers</a> </li>
                          <li> <a href="#"><i class="lnr lnr-cog"></i>Setting</a> </li>
                          <li> <a href="#"><i class="lnr lnr-heart"></i>100 Likes</a> </li>
                          <li class="logout"> <a href="logout.php"><i class="fa fa-power-off"></i> Logout</a> </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>');
                }

                ?>

        </div>
    </div>
    <!--notification menu end -->
</div>
<!-- //header-ends -->

<!-- main content start -->


<!-- main content end-->


            
