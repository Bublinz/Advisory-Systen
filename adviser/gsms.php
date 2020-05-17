    <?php
    require_once ('php/a_assets.php'); 
       require_once ('php/a_header.php'); 
?>

<?php
//Immidiate trash departmental activities
if(isset($_POST['act_trash'])){ 
	$act_id = filters('act_id');
	      
  if(udi("$u actiivities set act_status='0'where act_id='$act_id'")){
   	$success="Activity Deleted";
   }
   else{$error1 = "Sorry, Something went wrong!!!";}
}
?>
 

      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">General Broadcast  </li>
          </ul>
        </div>
      </div>
  
          <?php
    require_once ('php/a_assets.php'); 
        require_once ('php/a_header.php'); 
?>


      
      <!-- Updates Section -->
      <section class="mt-30px mb-30px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <!-- Recent Updates Widget          -->
              <div id="new-updates" class="card updates recent-updated">
                <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box">INFORMATION FOR ALL STUDENTS YOU ARE ADVISING</a></h2><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box"><i class="fa fa-angle-down"></i></a>
                </div>
                <div id="updates-box" role="tabpanel" class="collapse show">
                  <ul class="news list-unstyled">
                    <!-- Item-->
                    <form method="post" class="form">

                   <!-- success sms -->
                  <?php
                   if(isset($_POST['send_gsms'])){ 
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

                    <li class="d-flex justify-content-between"> 
                      <div class="left-col d-flex">
                        <div class="icon"><i class="icon-rss-feed"></i></div>
                        <div class="title"><strong>
                          <input class="form-control" type="text" placeholder="Message Title" name="msg_title">
                        </strong><br>
                          <p><input type="hidden" value="<?php echo get("adviser_id","$s adviser $w adviser_id='".$_SESSION['id']."'"); ?>" name="adviser_id">
                            <textarea placeholder="Type in a general message" name="gsms" class="form-control" rows="3" style="width:400px"></textarea>
                          </p><button class="btn btn-primary" name="send_gsms" value="Send_"><i class="fa fa-send">SEND</i></button>
                        </div>
                      </div>
                      
                    </li>
                      </form>
                   

                      <?php 

                      // need a querry for particular sms sent by it
                    $genfeed =fetch("$s general_feed $w feed_status='1' order by feed_id desc");
                    if($genfeed<=0){
                       echo" <div  class='card-header d-flex justify-content-between align-items-center'>
                  <center><h2 class='h5 display'>No Feed yet !</h2></center>
                  </div>"; }
                  else{
                    foreach ($genfeed as $g) {
                      echo "

                      <li class='d-flex justify-content-between'> 
                      <div class='left-col d-flex'>
                        <div class='icon'><i class='icon-rss-feed'></i></div>
                        <div class='title'><strong>$g->feed_title</strong>
                          <p>$g->feed_message</p>
                         
                        </div>

                      </div>
                      <div class='right-col text-right' style='width:45px; font-size:10px;'>
                        <div class='update-date'>$g->feed_date</div>

                      </div>

                    </li>

                      ";
                    }
                  }
                    
                    ?>
                  </ul>
                </div>
              </div>
              <!-- Recent Updates Widget End-->
            </div>
           
           
            <div class="col-lg-6 col-md-6">
              <!-- Recent Activities Widget      -->
              <div id="recent-activities-wrapper" class="card updates activities">
                <div id="activites-header" class="card-header d-flex justify-content-between align-items-center">
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#recent-activities-wrapper" href="#activities-box" aria-expanded="true" aria-controls="activities-box">TELL YOUR STUDENTS ABOUT DEPARTMENTAL ACTIVITIES</a></h2><a data-toggle="collapse" data-parent="#recent-activities-wrapper" href="#activities-box" aria-expanded="true" aria-controls="activities-box"><i class="fa fa-angle-down"></i></a>
                </div>
                <div id="activities-box" role="tabpanel" class="collapse show">
                  <ul class="activities list-unstyled">
                    <!-- Item-->

                    <form method="POST">
                    <?php
                    // for adding/update activities

                    // success sms
                        if(isset($_POST['activities'])){ 
                   if($success !==""){?>
                  <div class="alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert"> &nbsp; x</button>
                      <strong><?php echo @has($success); ?></strong>
                       </div>
                       <?php
                   }elseif ($error1 !==""){ ?>
                        <!-- Unsuccessful sms -->
                     <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                      <strong><?php echo @has($error1); ?></strong>
                    </div>
                    <?php
                   }
                   }

                  //  for deleting activity
                       if(isset($_POST['act_trash'])){ 
                   if($success !==""){?>
                  <div class="alert alert-success alert-block">
                     <button type="button" class="close" data-dismiss="alert"> &nbsp; x</button>
                      <strong><?php echo @has($success); ?></strong>
                       </div>
                       <?php
                   }elseif ($error1 !==""){ ?>
                        <!-- Unsuccessful sms -->
                     <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert">x</button>
                      <strong><?php echo @has($error1); ?></strong>
                    </div>
                    <?php
                   }
                   }
                    ?>

                    <li>
                      <div class="row">
                        <div class="col-4 date-holder text-right">
                          <div class="icon"><i class="icon-clock"></i></div>
                          <div class="date"> 
                            <span><input type="text" name="act_time" class="form-control" placeholder="Time eg 10:30am"></span>
                       <span><input type="date" name="act_date" class="form-control"></span><span class="text-info">Activity Date</span>
                          
                        </div>
                        </div>
                        <div class="col-8 content"><strong>Title: 
                          <input type="text" class="form-control" placeholder="NUC Update" name="act_title"></strong><br>
                          <p>
                            <input type="hidden" value="<?php echo get("adviser_id","$s adviser $w adviser_id='".$_SESSION['id']."'"); ?>" name="adviser_id">

                          <textarea class="form-control" placeholder="Update/Add an activity" name="act_message"></textarea>
                          </p>
                          <input type="submit" value="Add" class="btn btn-primary" name="activities">
                        </div>
                      </div>
                    </li>
                    </form>


                  <?php 
                  $act = fetch("$s actiivities $w act_status='1' order by act_id DESC");

                  if ($act<=0) {
                   echo" <div  class='card-header d-flex justify-content-between align-items-center'>
                  <center><h2 class='h5 display'>No Activity Record Yet</h2></center>
                  </div>"; }
                  else{
                    foreach ($act as $a ) {
                      echo "

                    <!-- Item-->
                     <li>
                      <div class='row'  style='max-height: 500px;  overflow-y: auto;' >
                        <div class='col-4 date-holder text-right' >
                          <div class='icon'><i class='icon-clock'></i></div>
                          <div class='date'> <span>$a->act_time</span><span class='text-info'>$a->act_date</span></div>
                        </div>

                        <div class='col-8 content'><strong style='color:green;'>$a->act_title</strong>
                          <p>$a->act_message <br><b>
                          <form method='post'>
                          <input type='hidden' name='act_id' value='$a->act_id'>
                          <a href='' name='act_trash'>Delete<i class='fa fa-trash'>
                          </form>
                          </i></a></b></p>
                          
                        </div>
                      </div>
                    </li>

                    
                      ";
                    }
                  }
                 ?>
               
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php
         require_once ('php/a_footer.php'); ?>



     <?php
         require_once ('php/a_footer.php'); ?>
