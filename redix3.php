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
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
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
            <div class="logo text-uppercase"><span>Reset</span><strong class="text-primary">-Details</strong></div>
            <p class="text-primary">Enter your profile details details.</p>
            <form method="get" class="text-left form-validate">
              <div class="form-group-material">
                <input id="Reg-no" type="number" name="reg_no" required data-msg="Please enter your Reg. No." class="input-material" maxlength="11">
                <label for="Reg-no" class="label-material">Registration No.</label>
              </div>
              <div class="form-group-material">
                <input id="register-email" type="email" name="registerEmail" required data-msg="Please enter a valid email address" class="input-material">
                <label for="register-email" class="label-material">Email Address      </label>
              </div>
              <div class="form-group-material">
                <input id="resetpassword1" type="password" name="resetpassword1" required data-msg="Please enter new password" class="input-material">
                <label for="resetpassword1" class="label-material">New Password</label>
              </div>
              <div class="form-group-material">
                <input id="resetpassword2" type="password" name="resetpassword2" required data-msg="Please Re-enter password" class="input-material">
                <label for="resetpassword2" class="label-material">Re-Enter Password</label>
              </div>
              <div class="form-group text-center"><input type="submit" Value="Reset Password" id="reset" name="reset" class="btn btn-primary">
                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
              </div>
            </form><a href="login.php" class="forgot-pass">Login?</a><small>Do not have an account? </small><a href="register.php" class="signup">Signup</a>
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