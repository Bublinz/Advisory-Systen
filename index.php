<?php 
     require_once 'php/database.php';  
  require_once 'php/controller.php';  
?>

<?php error_reporting('E_ALL');?>
<!DOCTYPE html>
<html lang="zxx">
 
<head>
<title>Advisory and Mentoring System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Advisory, Course Adviser" />

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/examples.css" rel="stylesheet" type="text/css">
    <link href="css/slider-pro.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
    <link href="css/nav.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.png">
</head>

<body>
    <div id="example1" class="slider-pro">

        <div class="sp-slides">
            <div class="sp-slide">
                <img class="sp-image" src="images/banner4.jpg" data-src="images/banner4.jpg" alt=" " data-retina="images/banner4.jpg" />

                <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="10%" data-show-transition="left" data-hide-transition="left">
                    Automated work-load
                </h3>

                <p class="sp-layer sp-white sp-padding hide-medium-screen" data-horizontal="40" data-vertical="22%" data-show-transition="left"
                    data-show-delay="200" data-hide-transition="left" data-hide-delay="200">
                    Creating flexibility to work
                </p>
            </div>

            <!--<div class="sp-slide">-->
            <!--    <img class="sp-image" src="images/blank.gif" data-src="images/banner3.jpg" alt=" " data-retina="images/banner3.jpg" />-->

            <!--    <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="10%" data-show-transition="left" data-hide-transition="left">-->
            <!--        Better communication ensured-->
            <!--    </h3>-->

            <!--    <p class="sp-layer sp-white sp-padding hide-medium-screen" data-horizontal="40" data-vertical="22%" data-show-transition="left"-->
            <!--        data-show-delay="200" data-hide-transition="left" data-hide-delay="200">-->
            <!--        In a unique digital concept-->
            <!--    </p>-->

                
            <!--</div>-->
            <!--<div class="sp-slide">-->
            <!--    <img class="sp-image" src="images/blank.gif" data-src="images/banner4.jpg" alt=" " data-retina="images/banner4.jpg" />-->

            <!--    <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="10%" data-show-transition="left" data-hide-transition="left">-->
            <!--       Be upto date with Dept. Activities-->
            <!--    </h3>-->

            <!--    <p class="sp-layer sp-white sp-padding hide-medium-screen" data-horizontal="40" data-vertical="22%" data-show-transition="left"-->
            <!--        data-show-delay="200" data-hide-transition="left" data-hide-delay="200">-->
            <!--        With the quick reminder-->
            <!--    </p>-->

               
            <!--</div>-->
            <!--<div class="sp-slide">-->
            <!--    <img class="sp-image" src="images/blank.gif" data-src="images/banner5.jpg" alt=" " data-retina="images/banner5.jpg" />-->

            <!--    <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="10%" data-show-transition="left" data-hide-transition="left">-->
            <!--        Keeping track on the go-->
            <!--    </h3>-->

            <!--    <p class="sp-layer sp-white sp-padding hide-medium-screen" data-horizontal="40" data-vertical="22%" data-show-transition="left"-->
            <!--        data-show-delay="200" data-hide-transition="left" data-hide-delay="200">-->
            <!--        Consistency yields results-->
            <!--    </p>-->

               
            <!--</div>-->
            <!--<div class="sp-slide">-->
            <!--    <img class="sp-image" src="images/blank.gif" data-src="images/banner1.jpg" alt=" " data-retina="images/banner1.jpg" />-->

            <!--    <h3 class="sp-layer sp-black sp-padding" data-horizontal="40" data-vertical="10%" data-show-transition="left" data-hide-transition="left">-->
            <!--        Automated work load-->
            <!--    </h3>-->

            <!--    <p class="sp-layer sp-white sp-padding hide-medium-screen" data-horizontal="40" data-vertical="22%" data-show-transition="left"-->
            <!--        data-show-delay="200" data-hide-transition="left" data-hide-delay="200">-->
            <!--        Creating flexibility to work-->
            <!--    </p>-->

                
            <!--</div>-->

        </div>

        <!--
        <div class="sp-thumbnails">
                
                    <div class="sp-thumbnail">
                <div class="sp-thumbnail-title">Our System</div>
                <div class="sp-thumbnail-description">Provides better solution</div>
            </div>
  
            <div class="sp-thumbnail">
                <div class="sp-thumbnail-title">Ut enim</div>
                <div class="sp-thumbnail-description">Dolor sit amet, consectetur adipiscing elit sed</div>
            </div>

            <div class="sp-thumbnail">
                <div class="sp-thumbnail-title">Ullamco oris</div>
                <div class="sp-thumbnail-description">Dolor sit amet, consectetur adipiscing elit sed</div>
            </div>

            <div class="sp-thumbnail">
                <div class="sp-thumbnail-title">Duis aute</div>
                <div class="sp-thumbnail-description">Dolor sit amet, consectetur adipiscing elit sed</div>
            </div>
            <div class="sp-thumbnail">
                <div class="sp-thumbnail-title">Ut enim</div>
                <div class="sp-thumbnail-description">Dolor sit amet, consectetur adipiscing elit sed</div>
            </div> -->

        </div>
        <!--/nav-->
        <div class="top_nav">
            <h1>
                <a class="logo" href="index.html">Advisory</a>
            </h1>
            <div class="top-btns">
                <div class="sign-btn">
                   
                          
                                <?php
                                $checkerror = @has($error1);
                                if ($checkerror ==""){
                                echo @has($error1);
                                }
                                else{
                                    echo '<div class="alert alert-danger" role="alert">'; 
                                    echo @has($error1);
                                    echo '</div>';
                                }
                                ?>
                                 <?php
                                $checksuccess = @has($success);
                                if ($checksuccess ==""){
                                echo @has($success);
                                }
                                else{
                                    echo '<div class="alert alert-success" role="alert">'; 
                                    echo @has($success);
                                    echo '</div>';
                                }
                                ?>
                               
                </div>
                
            </div>
         
           
        
        </div>
    </div>

    
   
     
     <!--/events-->
    <section class="banner-bottom-w3layouts bg-light py-md-5 py-4">
        <div class="container">
            <div class="inner-sec-wthree-w3ls py-md-5 py-4">
                <h3 class="tittle-w3l text-center mb-lg-5 mb-3">
                    <span>
                         <a href="#" data-toggle="modal"  class="btn btn-sm animated-button victoria-two"  data-target="#exampleModalCenter">
                         Get Started</a></span>
                         Class Advisory System </h3>
                <div class="row choose-main ">
                    <div class="col-lg-6 galsses-grid-right">
                        <h5>
                            <span class="post-color">CSC</span>FUTO</h5>
                        <h4 class="post my-3">Building better communication</h4>
                        <p>This system allows students to easily communicate with their class adviser anytime, anywhere. Tracking of students response is also automated for better performance in his/her academic activities</p>
                        <div class="read inner mt-4">
                               
						<a href="#" class="btn btn-sm animated-button victoria-two"data-toggle="modal" data-target="#exampleModalCenter2">
                                <i class="fa fa-user-circle" aria-hidden="true"></i> Register</a>
					</div>

                    </div>
                    <div class="col-lg-6 galsses-grid-right">
                        <div class="galsses-grid-left">
                            <figure class="effect-lexi">
                                <img src="images/futo.png" alt="" class="img-fluid">
                                <figcaption>
                                   
                                    <p style="color: white">CSC Department</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row choose-main my-lg-5 my-3">
                    <div class="col-lg-6 galsses-grid-right">
                        <div class="galsses-grid-left">
                            <figure class="effect-lexi">
                                <img src="images/happy.jpg" alt="" class="img-fluid">
                                <figcaption>
                                   
                                    <p style="color: white">By Mrs. J. C. Odirichukwu</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 galsses-grid-right mt-5">

                        <h5>
                           
                        <h4 class="post my-3">Automation of workload</h4>
                        <p>With the quick reminder option, students adviser can relate better with their most pressing need. This system sofar is active only for students of Computer Science Department, Federal University of Technology, Owerri</p>
                        <!-- <div class="read inner mt-4">
						<a href="about.html" class="btn btn-sm animated-button victoria-two">Read More</a>
					</div> -->

                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--//events-->
   		
  

<!-- copyright -->
<div class="copy_right_w3ls py-4 text-center">
    <p>© 2020. All rights reserved | <a href="http://jacomentoring.com/">Jacomentoring</a></p>
	
</div>
<!-- //copyright -->


    <!--model-forms-->
    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Login Now</h5>
                        <form  method="post">
                                <p style="text-align:center">Enter your login details. Please check the box if you are an Adviser</p>
                            <div class="form-group">
                                   
                                <label class="mb-2">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">Use your Registration Number as Username (For Students)</small>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input  type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            <div class="form-check mb-2">
                                <!-- <input type="checkbox" class="form-check-input" id="register-agree" name="adviser"  value="yes" />
                                <label class="form-check-label" for="exampleCheck1">I am an Adviser</label> -->
                                <!-- jquerry -->
                                <span class="button-checkbox">
                                        <button type="button" class="btn" data-color="primary">I am an Adviser</button>
                                        <input type="checkbox" name="adviser" value="yes" class="hidden" />
                                    </span>
                            </div>

                           
                            <button type="submit" name="login" class="btn btn-primary submit mb-4">
                                Sign In</button> 
                           
                            <p class="text-center pb-4">
                                <a href="#" data-toggle="modal2" data-target="#exampleModalCenter"> Don't have an account...</a>
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
                                    <i class="far fa-user"></i> Register</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Login-->


    <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-center mb-4">Register Now</h5>
                        <form method="post">
                            <div class="form-group">
                                <label>Last Name</label>

                                <input type="text" name="surname" class="form-control" id="validationDefault01" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Other Names</label>
                                <input type="text" name="othernames" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label>Registration Number</label>
                                 <input name="reg_no" class="form-control" 
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    type = "number"
                                    maxlength = "11" required=""
                                />
                                </div>

                            <div class="form-group">
                                <label>Year of Admission</label>
                                <?php 
          $op;
          for($t=11;$t<=50;$t++){
            $u = $t+1;
         $op.="<option value='20$t'>20$t/20$u</option>";
          
          }
          ?>
                                <select id="session"  name="admission_year" class="form-control" id="validationDefault02" placeholder="" required="">
                  <option value="">-select-</option>
                 <?php  echo $op; ?>
               </select>
                            </div>

                            <div class="form-group">
                                <label>Mode of Admission</label>
                                  <!-- Default unchecked -->
                            <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" value="DE" id="defaultUnchecked" name="admissionMode">
                            <label class="custom-control-label" for="defaultUnchecked">Direct Entry</label>
                            </div>

                            <!-- Default checked -->
                            <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="defaultChecked" name="admissionMode" value="UTME" checked>
                            <label class="custom-control-label" for="defaultChecked">Post UTME</label>
                            </div>
                                </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input name="phone" class="form-control" 
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    type = "number"
                                    maxlength = "11" required=""
                                />
                            </div>
                                       
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="validationDefault02" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="password2" class="form-control" id="password2" placeholder="" required="">
                            </div>
                            

                            <button type="submit" class="btn btn-primary submit mb-4" name="register_student">Register</button>
                            <p class="text-center pb-4">
                                <a href="#">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->

     
    <!--//model-form-->

    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- menu -->
    <script src="js/index.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <!-- //menu -->
    <!--slider-->
    <script src="js/jquery.sliderPro.min.js"></script>
    <script>
        $(document).ready(function ($) {
            $('#example1').sliderPro({
                width: 1980,
                height: 800,
                arrows: true,
                buttons: false,
                waitForLayers: true,
                thumbnailWidth: 270,
                thumbnailHeight: 100,
                thumbnailPointer: true,
                autoplay: false,
                autoScaleLayers: false,
                breakpoints: {
                    500: {
                        thumbnailWidth: 120,
                        thumbnailHeight: 50
                    }
                }
            });
        });
    </script>
    <!--//slider-->
    <!-- stats -->
		<script src="js/jquery.waypoints.min.js"></script>
		<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
    <!-- //stats -->

    <!-- carousel -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    900: {
                        items: 3,
                        nav: false
                    },
                    1000: {
                        items: 4,
                        nav: true,
                        loop: false,
                        margin: 20
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->
    <!-- //js -->
    <script src="js/bootstrap.js"></script>
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            /*
            						var defaults = {
            							  containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            						 };
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->
</body>
<script>
$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
            }
        }
        init();
    });
});
</script>
</html>