  <?php
 require_once 'php/a_assets.php';
   require_once 'php/a_header.php';
  ?>
 
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Profiles      </li>
          </ul>
        </div>
      </div>
      <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display"> Profile Details</h1>
          </header>
          <div class="row">
            <div class="col-lg-6" id="logindetails">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Login Details</h4>
                </div>
                <div class="card-body">
                  <p>Here are your Login Details</p>
                  <form method="post" action="profile.php">

                      <!-- success sms -->
                  <?php
                   if(isset($_POST['update_login_details'])){ 
                   if($success !==""){?>
                  <div class="alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert"> &nbsp; x</button>
                      <strong><?php echo @has($success); ?></strong>
                       </div>
                       <?php
                   }elseif ($error1 !==""){?>
                        <!-- Unsuccessful sms -->
                     <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                      <strong><?php echo @has($error1); ?></strong>
                    </div>
                    <?php
                   }
                   }
                    ?>


                    <div class="form-group">
                      <label>Rank</label>
                      <input type="text" value=" <?php echo get("rank","$s adviser $w adviser_id='".$_SESSION['id']."'"); ?>" name="rank" class="form-control">
                    </div>
                    
                    <input type="hidden" value="<?php echo get("adviser_id","$s adviser $w adviser_id='".$_SESSION['id']."'"); ?>" name="adviser_id" class="form-control">

                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" value=" <?php echo get("name","$s  adviser $w adviser_id='".$_SESSION['id']."'"); ?>" name="name" class="form-control">
                    </div>


                    <div class="form-group">
                      <label>Department</label>
                      <input type="text" value=" <?php echo get("dept","$s  adviser $w adviser_id='".$_SESSION['id']."'"); ?>" name="dept" class="form-control">
                    </div>
 
                    <div class="form-group">
                      <label>Interest</label>
                      <input type="text" value=" <?php echo get("interest","$s  adviser $w adviser_id='".$_SESSION['id']."'"); ?>" name="interest" class="form-control">
                    </div>
                       <div class="form-group">       
                      <input type="submit" value="Update" name="update_login_details" class="btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>
                
            
 <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Access Form</h4>
                </div>
                <div class="card-body">
                  <p style="font-weight:bold; font-size:16px;">Update any missing info. All fields are necessary</p>
                  <form method="post">

                    <!-- success sms -->
                  <?php
                   if(isset($_POST['update_ad_data'])){ 
                   if($success !==""){?>
                  <div class="alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert"> &nbsp; x</button>
                      <strong><?php echo @has($success); ?></strong>
                       </div>
                       <?php
                   }elseif ($error1 !==""){?>
                        <!-- Unsuccessful sms -->
                     <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                      <strong><?php echo @has($error1); ?></strong>
                    </div>
                    <?php
                   }
                   }
                    ?>


                    <div class="form-group">
                       <input type="hidden" value="<?php echo get("adviser_id","$s adviser $w adviser_id='".$_SESSION['id']."'"); ?>" name="adviser_id" class="form-control">
                      <label>Picture</label>
                      <input type="file"  name="" class="form-control" />
                    </div>

                  
                    <input type="hidden" value="<?php echo get("adviser_id","$s adviser $w adviser_id='".$_SESSION['id']."'"); ?>" name="adviser_id" class="form-control">

                     <div class="form-group">
                      <label>Email</label>
                      <input type="text" value="<?php echo get("email","$s adviser $w adviser_id='".$_SESSION['id']."'"); ?>" name="email" class="form-control" required >
                    </div>


                    <div class="form-group">
                      <label>Username</label>
                      <input type="text" value="<?php echo get("username","$s adviser $w adviser_id='".$_SESSION['id']."'"); ?>" name="username" class="form-control" required />
                    </div>

                    <div class="form-group">
                      <label>Phone</label>
                      <input type="number" value="<?php echo get("phone","$s adviser $w adviser_id='".$_SESSION['id']."'"); ?>" name="phone" class="form-control" required />
                    </div>
                       <div class="form-group">       
                      <label style="color: green; font-weight: bold;">To change your password, you must logout, and go to <i>'forget password'</i></label>
                     </div>

                    <div class="form-group">       
                      <input type="submit" value="Save" name="update_ad_data" class="btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>               


            
          


          </div>
        </div>
      </section>
   <?php require_once('php/a_footer.php');?>