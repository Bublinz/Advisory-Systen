<?php 
     require_once 'php/database.php';  
  require_once 'php/controller.php';  
?>
<?php// error_reporting('E_ALL');?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Advisory and Mentoring System</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <!-- <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet"> -->
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/logo.jpeg">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner" >
            <div class="logo text-uppercase"><span>Login</span><strong class="text-primary">-Panel</strong></div>
            <p class="text-primary">Enter your login details. Please check the box if your a Mentor/Adviser</p>
            <form method="post" class="text-left form-validate">
              <!-- Here is the message that notifies a user for wrong details -->
                 <center style="font-weight: bold; font-size: 20px;">
                  <p style="color: red;"><?php echo @has($error1); ?></p></center>
                  <!-- username input -->
              <div class="form-group-material">
                <input id="login-username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                <label for="login-username" class="label-material">Reg_number ~ Username</label>
              </div>
              <!-- password input -->
              <div class="form-group-material">
                <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                <label for="login-password" class="label-material">Password</label>
              </div>

             <div class="form-group terms-conditions text-center">
                <input type="checkbox" id="register-agree" name="mentor"  value="1"  class="form-control-custom">
                <label for="register-agree">I am a Course Adviser</label>
              </div>

              <div class="form-group text-center">
                <input type="submit" Value="Login" id="login" name="login" class="btn btn-primary">
              
              </div>
            </form><a href="reset.php" class="forgot-pass">Forgot Password?</a>
            <small>Do not have an account? </small>
            <a href="register.php" class="signup">Signup</a><br>

             <small>Go back to the <a href="index.php" class="signup">Home</a> page</small>
           
          </div>
        
        </div>
      </div>

    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>