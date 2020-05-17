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
            <h1 class="h3 display">Update your Profile</h1>
          </header>
          <div class="row">
            <div class="col-lg-6" id="logindetails">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Login Details</h4>
                </div>
                <div class="card-body">
                  <p>Here are your Login Details</p>
                  <form method="post" action="profile.php#logindetails">

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
                      <label>Surname</label>
                      <input type="text" value=" <?php echo get("surname","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" name="surname" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Other Names</label>
                      <input type="text" value=" <?php echo get("other_names","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" name="other_names" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Registration Number:</label>
                      <input type="text" value=" <?php echo get("reg_no","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" name="reg_no"  maxlength="11" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Year of Admission:</label>
                      <input type="text" value=" <?php echo get("admission_year","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" name="section" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Phone Number</label>
                      <input type="text" value=" <?php echo get("phone","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" name="phone" maxlength="11" class="form-control">
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" value=" <?php echo get("email","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" name="email" class="form-control">
                    </div>

                    <div class="form-group">       
                      <label style="color: green; font-weight: bold;">To change your password, you must logout, and go to <i>'forget password'</i></label>
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
                  <h4>Bio-Data Form</h4>
                </div>
                <div class="card-body">
                  <p style="font-weight:bold; font-size:16px;">Update any missing info. All fields are necessary</p>
                  <form method="post">

                    <!-- success sms -->
                  <?php
                   if(isset($_POST['update_bio_data'])){ 
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
                       <input type="hidden" value="<?php echo get("std_id","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" name="std_id" class="form-control">
                      <label>Picture</label>
                      <input type="file"  name="img" class="form-control" required />
                    </div>

                  <div class="form-group">
                      <label>Department</label>
                        <select name="dept" class="form-control" required>
                          <option value="dept" ><?php echo get("dept","$s students_data $w std_id='".$_SESSION['id']."'"); ?></option>
                          <option value="Computer Science" >Computer Science</option>
                          <option  value="Cyber Security">Cyber Security</option>
                          <option value="Software Engineering" >Software Engineering</option>
                        </select>
                      </div>

                       <div class="form-group">
                      <label>State of Origin</label>
                      <select name="state" class="form-control" required >
                        <option value="<?php echo get("state","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" ><?php echo get("state","$s students_data $w std_id='".$_SESSION['id']."'"); ?></option>
                          <option  value="Abia" >Abia</option>
                          <option value="Imo" >Imo</option>
                          <option value="Anambra">Anambra</option>
                          <option value="Enugu">Enugu</option>
                          <option value="" ></option>
                        </select>
                    </div>

                      <div class="form-group">
                      <label>Local Govt. Area</label>
                      <input type="text" value="<?php echo get("lga","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" name="lga" class="form-control" required />
                    </div>

                    <div class="form-group">
                      <label>Permenent Address</label>
                      <textarea rows="2" name="per_address" class="form-control" required><?php echo get("per_address","$s students_data $w std_id='".$_SESSION['id']."'"); ?></textarea>
                    </div>

                       <div class="form-group">
                      <label>Date of Birth</label>
                      <input type="date" value="<?php echo get("dob","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" name="dob" class="form-control" required />
                    </div>

                    <div class="i-checks">
                      <label>Gender:</label>
                          <input id="radioCustom1" type="radio" value="Male" name="gender" class="form-control-custom radio-custom">
                          <label for="radioCustom1" style="color: black; font-weight: bold;">Male</label>
                      
                          <input id="radioCustom2" type="radio" checked="" value="Female" name="gender" class="form-control-custom radio-custom" >
                          <label for="radioCustom2" style="color: black; font-weight: bold;">Female</label>
                        </div>


                     <div class="form-group">
                      <label>Name of Parents</label>
                      <input type="text" value="<?php echo get("parents_name","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" name="pname" class="form-control" required >
                    </div>


                    <div class="form-group">
                      <label>Parent Contact</label>
                      <input type="number" value="<?php echo get("parents_contact","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" name="pcontact" class="form-control" required />
                    </div>

                    
                    <div class="form-group">       
                      <input type="submit" value="Save" name="update_bio_data" class="btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>               
            
            
            <div class="col-lg-8">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Green File Update</h4>
                </div>

                <div class="card-body" id="greenfile">
                  <form class="form-inline" method="post" action="profile.php#greenfile">

                    <!-- success sms -->
                    <?php
                   if(isset($_POST['green_file_update'])){ ?>
                  <div class="alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert"> &nbsp; x</button>
                      <strong><?php echo @has($success); ?></strong>
                       </div>
                   <?php }?>


                    <div class="form-group">

                    <input type="hidden" value="<?php echo get("std_id","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" name="std_id" class="form-control">
                      <label>Have you submitted your Green File? </label>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                      <select name="file" class="form-control" required >
                          <option  value="" >--Select--</option>
                          <option  value="Yes" >Submitted</option>
                          <option value="No" >Not Submitted</option>
                        
                          
                        </select>
                    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="form-group">
                      <input type="submit" value="Submit" name="green_file_update" class="mr-3 btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>


          </div>
        </div>
      </section>
   <?php require_once('php/a_footer.php');?>