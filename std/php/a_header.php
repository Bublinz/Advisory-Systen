 <body>


    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info--> 
          <div class="sidenav-header-inner text-center">
            <!-- <img src="img/avatar-1.jpg" alt="Update Profile" class="img-fluid rounded-circle"> -->
            <i class="fa fa-spinner fa-spin"></i>
            <h2 class="h5"> <?php echo get("surname","$s students_data $w std_id='".$_SESSION['id']."'"); ?></h2><span> <?php echo get("other_names","$s students_data $w std_id='".$_SESSION['id']."'"); ?></span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="dash.php" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->


      <!-- Logic to check the Level of students by admission year and mode of admission -->
        <?php
        $currentyear = date("Y");
        $adyear= get("admission_year","$s students_data $w std_id='".$_SESSION['id']."'");
        $admode= get("admissionMode","$s students_data $w std_id='".$_SESSION['id']."'");
        $checklevel = $currentyear - $adyear;

        if ($admode =="DE"){
          $level = $checklevel + 1;
        }else{
         global  $level;
         $level = $checklevel;
        }
        ?>
        <div class="main-menu">
          <h5 class="sidenav-heading">Reg No:   <?php echo get("reg_no","$s students_data $w std_id='".$_SESSION['id']."'"); ?> </h5>
          <h5 class="sidenav-heading">  <?php echo "Level: ".$level."00" ; ?> </h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="dash.php"> <i class="icon-home"></i>Home  </a></li>
            <li><a href="profile.php"> <i class="icon-form"></i>Profile</a></li>
            
            <!-- <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Mentoring Git </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Success Story</a></li> -->
            
            <?php  
           
            if ($level == "4"){

              echo ' <li><a href="it.php"> <i class="icon-interface-windows"></i>Industrial Training </a></li>
              ';
            }
            ?>
            <!-- <li><a href="it.php"> <i class="icon-interface-windows"></i>Industrial Training </a></li> -->
            <li> <a href="reminder.php"> <i class="icon-mail"></i>Reminders 
            <i class="fa fa-spinner fa-spin"></i>
            
                <!-- <div class="badge badge-warning"></div></a>-->
                </li> 
          </ul>
        </div>
       <!--  <div class="admin-menu">
          <h5 class="sidenav-heading">Second menu</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
            <li> <a href="#"> <i class="icon-screen"> </i>Demo</a></li>
            <li> <a href="#"> <i class="icon-flask"> </i>Demo
                <div class="badge badge-info">Special</div></a></li>
            <li> <a href=""> <i class="icon-flask"> </i>Demo</a></li>
            <li> <a href=""> <i class="icon-picture"> </i>Demo</a></li>
          </ul>
        </div> -->
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.php" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>Student </span><strong class="text-primary">Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning"><i class="fa fa-spinner fa-spin"></i></span></a>
                  <!-- <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                  </ul> -->
                </li>

                <!-- Messages dropdown-->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">
                    <i class="fa fa-spinner fa-spin"></i>
                </span></a>
                  <!-- <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul> -->
                </li>
             
                <!-- Log out-->
                <li class="nav-item"><a  href="php/test.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout </span> <i class="fa fa-sign-out" aria-hidden="true"></i>
                
                 <!-- <div id="charging" class="fa"></div> -->
                 </a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <marquee><p style="font-size: 17px; color: red;"> <i class="fa fa-home"></i>
      Greetings to you, this system is under serious monitoring, 
       hence some features will not be functional. Meanwhile, we hope to be active with all features by 6pm today for better experience. <i class="fa fa-book"></i>Developer's Desk
      </p></marquee>
 <?php require_once 'php/controller.php'; ?>