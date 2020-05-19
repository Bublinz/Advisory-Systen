<?php 
     require_once 'php/database.php';  
  require_once 'php/controller.php';  
?> 
<?php error_reporting('0') ?>
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
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <style type="text/css">
        
        </style>
  </head>
  <body>
    <div class="page login-page">
      <div class="container" style="max-width: 100%;">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Let's Get</span><strong class="text-primary">Started</strong></div>
            <p>This is the registration portal, all field are necesary to complete the application to this system</p><hr>

            <form class="text-left form-validate" method="post" action="register.php">
             <center style="font-weight: bold; font-size: 20px;"> <p style="color: green"><?php echo @has($success); ?></p><p style="color: red;"><?php echo @has($error1); ?></p><p style="color: red;"><?php echo @has($error2); ?></p></center>
          <table style="width: 100%;">
            <tr>
             <td style="width: 50%;"> <div class="form-group-material">
                <input id="Surname" type="text" name="surname" required data-msg="Please enter your Surname" class="input-material">
                <label for="Surname" class="label-material">Surname</label>
              </div></td>
             <td> <div class="form-group-material">
                <input id="other-names" type="text" name="othernames" required data-msg="Please enter your names" class="input-material">
                <label for="other-names" class="label-material">Other Names</label>
              </div></td>
            </tr>
            <tr>
             <td style="width: 50%;"> <div class="form-group-material">
                <input id="Reg-no" type="number" name="reg_no" required data-msg="Please enter your Reg. No." class="input-material" maxlength="11">
                <label for="Reg-no" class="label-material">Registration No.</label>
              </div></td>
             <td> <div class="form-group-material">
               <label style="color: white; width: 45%; margin-left: 5px;">Year of Admission</label>
               <?php 
          $op;
          for($t=11;$t<=50;$t++){
            $u = $t+1;
         $op.="<option value='20$t/20$u'>20$t/20$u</option>";
          
          }
          ?>
                <select id="session"  name="section" required data-msg="Please select a valid Session" style="width: 50%; padding: 10px;">
                  <option value="">-select-</option>
                 <?php  echo $op; ?>
               </select>
              </div></td>
            </tr>
            <tr>
             <td style="width: 50%;"> <div class="form-group-material">
                <input id="phone" type="number" name="phone" required data-msg="Please enter your phone no." class="input-material" maxlength="11">
                <label for="phone" class="label-material">Phone Number</label>
              </div></td>
             <td> <div class="form-group-material">
                <input id="register-email" type="email" name="registerEmail" required data-msg="Please enter a valid email address" class="input-material">
                <label for="register-email" class="label-material">Email Address      </label>
              </div></td>
            </tr>
            <tr>
              <td style="width: 50%;"> <div class="form-group-material">
                <input id="register-password" type="password" name="password1" required data-msg="Please enter your password" class="input-material">
                <label for="register-password" class="label-material">Password</label>
              </div></td>
              <td> <div class="form-group-material">
                <input id="register-password2" type="password" name="password2" required data-msg="Please Re-Enter password" class="input-material">
                <label for="register-password2" class="label-material">Re-Enter Password</label>
              </div></td>
            </tr>

            <tr>
             <td> <div class="form-group terms-conditions text-center">
                <input id="register-agree" name="registeragree" type="checkbox" required value="1" data-msg="Your agreement is required" class="form-control-custom">
                <label for="register-agree">I agree with the terms and policy</label>
              </div></td>
             <td><div class="form-group text-center">
                <input id="register" type="reset" value="Reset" class="btn btn-primary">
                 <input id="register" type="submit" value="Register" name="register_student" class="btn btn-primary">
              </div></td>
            </tr>

              </table>
            </form><small>Already have an account? </small><a href="login.php" class="signup">Login</a>
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