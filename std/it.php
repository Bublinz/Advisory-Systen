  <?php
 require_once 'php/a_assets.php';
   require_once 'php/a_header.php';
  ?>
 
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Industrail Training</li>
          </ul>
        </div>
      </div>
      <section class="forms">
        <div class="container-fluid">
          <!-- Page Header-->
          
          <div class="row">

<div class="col-lg-12 col-md-12 col-sm-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>IT Monitoring Form, Only for Fourth Years</h4>

                    <!-- success sms -->
                  <?php
                   if(isset($_POST['it_monitoring'])){ 
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


                </div>
                <div class="card-body text-center">
                  <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Click here to begin</button>
                  <!-- Modal-->
                  <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                    <div role="document" class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 id="exampleModalLabel" class="modal-title">IT Tracking Report</h5>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                        <p> This form will capture the activities of students of Computer Science Department FUTO on their Industrail Training (IT). Students are required to complete all field to enable monitoring and records</p>
                          <form>
                            <div class="form-group">
                              <label>Email</label>
                              <input type="email" placeholder="Email Address" class="form-control" value="`<?php echo get("email","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" name="email" required>
                            </div>
                           <div class="form-group">
                      <label>Registration Number:</label>
          <input type="text" value="<?php echo get("reg_no","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" name="reg_no" class="form-control"  required>
                    </div>
                            <div class="form-group">       
                              <label>Acct. Name</label>
                              <input type="text" placeholder="Account Name" value="<?php echo get("acct_name","$s it_monitoring $w std_id='".$_SESSION['id']."'"); ?>"   class="form-control" name="acct_name" required>
                            </div>
                           <div class="form-group">       
                              <label>Acct. Number</label>
                              <input type="text" placeholder="Acct. No" value="<?php echo get("acct_number","$s it_monitoring $w std_id='".$_SESSION['id']."'"); ?>" class="form-control" maxlength="10" name="acct_number" required>
                            </div>
                             <div class="form-group">       
                              <label>Bank Name</label>
                              <input type="text" placeholder="Bank Name" value="<?php echo get("bank_name","$s it_monitoring $w std_id='".$_SESSION['id']."'"); ?>"  class="form-control" name="bank_name" required>
                            </div>
                            <div class="form-group">       
                              <label>Sort Code</label>
                              <input type="text" placeholder="Bank Sort Code" value="<?php echo get("sort_code","$s it_monitoring $w std_id='".$_SESSION['id']."'"); ?>"  class="form-control" name="sort_code" required>
                            </div>

                               <div class="form-group">
                      <label>Surname</label>
                      <input type="text" value="<?php echo get("surname","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" name="surname" class="form-control"   required>
                    </div>

                    <div class="form-group">
                      <label>Other Names</label>
                      <input type="text" value="<?php echo get("other_names","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" name="other_names" class="form-control" required>
                    </div>
                            <div class="form-group">       
                              <label>IT Placement</label>
                              <input type="text" placeholder="Where are you working?" value="<?php echo get("placement","$s it_monitoring $w std_id='".$_SESSION['id']."'"); ?>" class="form-control" name="placement" required>
                            </div>

                            <div class="form-group">       
                              <label>Department/Unit of IT</label>
                              <input type="text" value="<?php echo get("unit","$s it_monitoring $w std_id='".$_SESSION['id']."'"); ?>"  placeholder="Unit you were posted to" class="form-control" name="unit" required>
                            </div>
                            <div class="form-group">       
                              <label>State of IT</label>
                              <input type="text" placeholder="State of IT" value="<?php echo get("state","$s it_monitoring $w std_id='".$_SESSION['id']."'"); ?>"  class="form-control" name="state" required>
                            </div>
                            <div class="form-group">       
                              <label>Start Date</label>
                              <input type="date" placeholder="Date" value="<?php echo get("start_date","$s it_monitoring $w std_id='".$_SESSION['id']."'"); ?>" class="form-control" name="start_date" required>
                            </div>
                            <div class="form-group">       
                              <label>Responsibility</label>
                              <input type="text" placeholder="What are you doing there" value="<?php echo get("responsibility","$s it_monitoring $w std_id='".$_SESSION['id']."'"); ?>" class="form-control" name="responsibility" required>
                            </div>
                             
                            <div class="form-group">       
                              <label>Name of Supervisor</label>
                              <input type="text" placeholder="Supervisor's Name" value="<?php echo get("supervisor_name","$s it_monitoring $w std_id='".$_SESSION['id']."'"); ?>"  class="form-control" name="supervisor_name" required>
                            </div>
                            <div class="form-group">       
                              <label>IT Sup. Contact</label>
                              <input type="number" placeholder="Supervisor's Number" value="<?php echo get("supervisor_number","$s it_monitoring $w std_id='".$_SESSION['id']."'"); ?>" class="form-control" name="supervisor_number" required>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                          <button type="button" class="btn btn-primary" name="it_monitoring">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Basic Form</h4>
                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur.</p>
                  <form>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" placeholder="Email Address" class="form-control">
                    </div>
                    <div class="form-group">       
                      <label>Password</label>
                      <input type="password" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">       
                      <input type="submit" value="Signin" class="btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div> -->


            <!-- <div class="col-lg-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Horizontal Form</h4>
                </div>
                <div class="card-body">
                  <p>Lorem ipsum dolor sit amet consectetur.</p>
                  <form class="form-horizontal">
                    <div class="form-group row">
                      <label class="col-sm-2">Email</label>
                      <div class="col-sm-10">
                        <input id="inputHorizontalSuccess" type="email" placeholder="Email Address" class="form-control form-control-success"><small class="form-text">Example help text that remains unchanged.</small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Password</label>
                      <div class="col-sm-10">
                        <input id="inputHorizontalWarning" type="password" placeholder="Pasword" class="form-control form-control-warning"><small class="form-text">Example help text that remains unchanged.</small>
                      </div>
                    </div>
                    <div class="form-group row">       
                      <div class="col-sm-10 offset-sm-2">
                        <input type="submit" value="Signin" class="btn btn-primary">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div> -->


            <!-- <div class="col-lg-8">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Inline Form</h4>
                </div>
                <div class="card-body">
                  <form class="form-inline">
                    <div class="form-group">
                      <label for="inlineFormInput" class="sr-only">Name</label>
                      <input id="inlineFormInput" type="text" placeholder="Jane Doe" class="mr-3 form-control">
                    </div>
                    <div class="form-group">
                      <label for="inlineFormInputGroup" class="sr-only">Username</label>
                      <input id="inlineFormInputGroup" type="text" placeholder="Username" class="mr-3 form-control form-control">
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Submit" class="mr-3 btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div> -->



            



<!-- 
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>All form elements</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal">
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Normal</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Help text</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"><span class="text-small text-gray help-block-none">A block of help text that breaks onto a new line and may extend beyond one line.</span>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" name="password" class="form-control">
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Placeholder</label>
                      <div class="col-sm-10">
                        <input type="text" placeholder="placeholder" class="form-control">
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-lg-2 form-control-label">Disabled</label>
                      <div class="col-lg-10">
                        <input type="text" disabled="" placeholder="Disabled input here..." class="form-control">
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Checkboxes and radios <br><small class="text-primary">Normal Bootstrap elements</small></label>
                      <div class="col-sm-10">
                        <div>
                          <input id="option" type="checkbox" value="">
                          <label for="option">Option one is this and that—be sure to include why it's great</label>
                        </div>
                        <div>
                          <input id="optionsRadios1" type="radio" checked="" value="option1" name="optionsRadios">
                          <label for="optionsRadios1">Option one is this and that be sure to include why it's great</label>
                        </div>
                        <div>
                          <input id="optionsRadios2" type="radio" value="option2" name="optionsRadios">
                          <label for="optionsRadios2">Option two can be something else and selecting it will deselect option one</label>
                        </div>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Inline checkboxes</label>
                      <div class="col-sm-10">
                        <label class="checkbox-inline">
                          <input id="inlineCheckbox1" type="checkbox" value="option1"> a
                        </label>
                        <label class="checkbox-inline">
                          <input id="inlineCheckbox2" type="checkbox" value="option2"> b
                        </label>
                        <label class="checkbox-inline">
                          <input id="inlineCheckbox3" type="checkbox" value="option3"> c
                        </label>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Checkboxes &amp; radios <br><small class="text-primary">Custom elements</small></label>
                      <div class="col-sm-10">
                        <div class="i-checks">
                          <input id="checkboxCustom1" type="checkbox" value="" class="form-control-custom">
                          <label for="checkboxCustom1">Option one</label>
                        </div>
                        <div class="i-checks">
                          <input id="checkboxCustom2" type="checkbox" value="" checked="" class="form-control-custom">
                          <label for="checkboxCustom2">Option two checked</label>
                        </div>
                        <div class="i-checks">
                          <input id="checkboxCustom" type="checkbox" value="" disabled="" checked="" class="form-control-custom">
                          <label for="checkboxCustom">Option three checked and disabled</label>
                        </div>
                        <div class="i-checks">
                          <input id="checkboxCustom3" type="checkbox" value="" disabled="" class="form-control-custom">
                          <label for="checkboxCustom3">Option four disabled</label>
                        </div>
                        <div class="i-checks">
                          <input id="radioCustom1" type="radio" value="option1" name="a" class="form-control-custom radio-custom">
                          <label for="radioCustom1">Option one</label>
                        </div>
                        <div class="i-checks">
                          <input id="radioCustom2" type="radio" checked="" value="option2" name="a" class="form-control-custom radio-custom">
                          <label for="radioCustom2">Option two checked</label>
                        </div>
                        <div class="i-checks">
                          <input id="radioCustom3" type="radio" disabled="" checked="" value="option2" class="form-control-custom radio-custom">
                          <label for="radioCustom3">Option three checked and disabled</label>
                        </div>
                        <div class="i-checks">
                          <input id="radioCustom4" type="radio" disabled="" name="a" class="form-control-custom radio-custom">
                          <label for="radioCustom4">Option four disabled</label>
                        </div>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Select</label>
                      <div class="col-sm-10 mb-3">
                        <select name="account" class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                        </select>
                      </div>
                      <div class="col-sm-10 offset-sm-2">
                        <select multiple="" class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                        </select>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Input with success</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control is-valid">
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row has-danger">
                      <label class="col-sm-2 form-control-label">Input with error</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control is-invalid">
                        <div class="invalid-feedback">Please provide your name.</div>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Control sizing</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <input type="text" placeholder=".input-lg" class="form-control form-control-lg">
                        </div>
                        <div class="form-group">
                          <input type="text" placeholder="Default input" class="form-control">
                        </div>
                        <div class="form-group">
                          <input type="text" placeholder=".input-sm" class="form-control form-control-sm">
                        </div>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Column sizing</label>
                      <div class="col-sm-10">
                        <div class="row">
                          <div class="col-md-2">
                            <input type="text" placeholder=".col-md-2" class="form-control">
                          </div>
                          <div class="col-md-3">
                            <input type="text" placeholder=".col-md-3" class="form-control">
                          </div>
                          <div class="col-md-4">
                            <input type="text" placeholder=".col-md-4" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="line"> </div>
                    <div class="row">
                      <label class="col-sm-2 form-control-label">Material Inputs</label>
                      <div class="col-sm-10">
                        <div class="form-group-material">
                          <input id="register-username" type="text" name="registerUsername" required class="input-material">
                          <label for="register-username" class="label-material">Username</label>
                        </div>
                        <div class="form-group-material">
                          <input id="register-email" type="email" name="registerEmail" required class="input-material">
                          <label for="register-email" class="label-material">Email Address      </label>
                        </div>
                        <div class="form-group-material">
                          <input id="register-password" type="password" name="registerPassword" required class="input-material">
                          <label for="register-password" class="label-material">Password                                                      </label>
                        </div>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Input groups</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">@</span></div>
                            <input type="text" placeholder="Username" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control">
                            <div class="input-group-append"><span class="input-group-text">.00</span></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">$</span></div>
                            <input type="text" class="form-control">
                            <div class="input-group-append"><span class="input-group-text">.00</span></div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <input type="checkbox">
                              </div>
                            </div>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <input type="radio">
                              </div>
                            </div>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Button addons</label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <button type="button" class="btn btn-primary">Go!</button>
                            </div>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                              <button type="button" class="btn btn-primary">Go!</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">With dropdowns</label>
                      <div class="col-sm-10">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <button data-toggle="dropdown" type="button" class="btn btn-outline-secondary dropdown-toggle">Action <span class="caret"></span></button>
                            <div class="dropdown-menu"><a href="#" class="dropdown-item">Action</a><a href="#" class="dropdown-item">Another action</a><a href="#" class="dropdown-item">Something else here</a>
                              <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Separated link</a>
                            </div>
                          </div>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                        <button type="submit" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div> 
            </div>
          </div>-->
        </div>
      </section>
   <?php require_once('php/a_footer.php');?>