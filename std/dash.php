  <?php
 require_once 'php/a_assets.php';
   require_once 'php/a_header.php';
  ?>



  <?php
if(isset($_POST['delete'])){ 
	$msg_id = filters('msg_id'); 
  
if(udi("$u personal_feed set std_rem_date='' $w msg_id='$msg_id'")){
		$success="Reminder Trashed";
	} else { 
		$error1="Reminder not delected";
	} 
}
  ?>



  <?php
if(isset($_POST['delete1'])){ 
	$rem_id = filters('rem_id'); 
  
if(udi("$u general_feed_reminder set rem_id='' $w msg_id='$msg_id'")){
		$success="Reminder Trashed";
	} else { 
		$error1="Reminder not delected";
	} 
}
  ?>
    <!-- Adviser selection messages -->

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
  
 
      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
        <!--     <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">New Clients</strong><span>Last 7 days</span>
                  <div class="count-number">25</div>
                </div>
              </div>
            </div> -->

          
            <!-- Select Adviser -->

            <?php 
            $std_id = @$_SESSION['id'];
            $gdetails = counts("SELECT * FROM adviser_std WHERE as_std_id ='$std_id'");
            //echo $gdetails;
            if ($gdetails  < 1){
            echo '<center>
            <div class="col-xl-12 col-md-6 col-12" >
            <div class="wrapper count-title d-flex">
            <p>  <form method="post">
                            <div style="border: 2px solid green; margin: 10px; padding: 10px;">
                              <label>Welcome: Please select your class adviser from the list</label>';
                             
                            //  $level= get("level","$s students $w std_id='".$_SESSION['id']."'");
                            //             global $conn;
                                $query= "SELECT adviser_id, name FROM adviser WHERE status='1'AND role = '2' ";

                                    echo  "<select class=form-control name=adviser_id required>";
                                    echo "<option value=''></option>";
                                    foreach ($conn->query($query) as $row) {
                                       echo "<option value=$row[adviser_id]>$row[name] </option>";
                                    }                                   
                                            
                                       echo "</select>";
                                        
                                       echo '<div style="padding: 3px;">'; ?>

                         <input type="hidden" name="std_id" value="<?php echo get("std_id","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" >

                           <?php
                          echo '<button type="submit" name="confirm" class="btn btn-primary submit mb-4">
                                Confirm </button> </div></div></form>
                           </p>
            </div>
            </div></center>';
                                  }
                                  ?>



            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-padnote"></i></div>
                <div class="name"><strong class="text-uppercase">Total Personal</strong><span>Messages</span>
                  <?php 
                  $my_did =$_SESSION['id'];
                  
                  $percount=counts("$s personal_feed $w msg_status='1' && std_id ='$my_did' && std_reply_id='0' ");
                  // echo $my_did;
                  ?>
                  <div class="count-number"><?php echo "$percount";?></div>
                </div>
              </div>
            </div>
             <!-- Count item widget-->
             <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <div class="name"><strong class="text-uppercase">Total General </strong><span>Announcement</span>
                  <?php 
                  // $feedcount = counts("$s general_feed $w feed_status='1'");
                  $feedcount =counts("SELECT a.*, gf.* FROM adviser_std AS a LEFT JOIN general_feed AS gf ON a.as_adviser_id = gf.adviser_id WHERE a.as_std_id = '".$_SESSION['id']."' AND a.as_status = '1' ");
                  ?>
                  <div class="count-number"><?php echo "$feedcount";?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-check"></i></div>
                <div class="name"><strong class="text-uppercase">General Reminder</strong><span>Messages</span>
                <?php 
                  $grem = counts("SELECT f.*, r.* FROM general_feed AS f LEFT JOIN general_feed_reminder AS r ON f.feed_id=r.feed_id $w r.rem_status='1' AND r.std_id='".$_SESSION['id']."' AND r.std_rem_status ='1' AND f.feed_status='1' ");                
                  ?>
                  <div class="count-number"><?php echo "$grem";?> </div>
                </div>
              </div>
            </div>
           
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-list"></i></div>
                <div class="name"><strong class="text-uppercase">Personal Reminder</strong><span>Messages</span>
                <?php
                      $prem = counts("$s personal_feed $w msg_status='1' AND std_id='".$_SESSION['id']."' AND std_rem_date !='' AND std_reply_id='0' ");
                      ?>
                  <div class="count-number"><?php echo "$prem";?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <?php $act_count=counts("$s actiivities $w act_status='1'"); ?>
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-list-1"></i></div>
                <div class="name"><strong class="text-uppercase">Total Dept</strong><span>Activities</span>
                  <div class="count-number"><?php echo "$act_count";?></div>
                </div>
              </div>
            </div>

            <!-- Modal starts -->
      <div class="col-xl-2 col-md-4 col-6">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Chat Bot</h4>

                </div>
                <div class="card-body text-center">
                  <button type="button" data-toggle="modal" data-target="#myModal1" class="btn btn-primary">Connect with your Adviser</button>
                  <!-- Modal-->
                  <div id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                    <div role="document" class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 id="exampleModalLabel" class="modal-title">Chat/Respond to your Adviser</h5>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <form method="post">
                            <div class="form-group">
                              <label>To:</label>
                              <!-- get the mysql connection for three tables -->
                                    <!-- For now Only for two tables are working, Please review how to connect all adviser related logic to also point to adviser table -->
                              <input type="text"  class="form-control" value="<?php echo get("name","SELECT aa.*, a.* FROM adviser_std AS aa LEFT JOIN adviser AS a ON aa.as_adviser_id = a.adviser_id WHERE aa.as_std_id='".$_SESSION['id']."' and a.status='1'and aa.as_status='1'"); ?>" readonly/>

                              <input type="hidden" name="adviser_id" class="form-control" value="<?php echo get("adviser_id","SELECT aa.*, a.* FROM adviser_std AS aa LEFT JOIN adviser AS a ON aa.as_adviser_id = a.adviser_id WHERE aa.as_std_id='".$_SESSION['id']."' and a.status='1'and aa.as_status='1'"); ?>">
                            </div>
                            <input type="hidden" name="std_id" value="<?php echo get("std_id","$s students_data $w std_id='".$_SESSION['id']."'"); ?>" >
                           <div class="form-group">
                      <label>Message:</label>
        <textarea  name="chat_message" class="form-control" placeholder="Chat with your adviser" required> </textarea>
                    </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                          <button type="submit" name="send_message_to_adviser" class="btn btn-primary">Send</button></form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>






          </div>
        </div>
      </section>
     
      <!-- Updates Section -->
      <section class="mt-30px mb-30px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-12">
              <!-- General news feed widget         -->
              <div id="new-updates" class="card updates recent-updated">
                <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box">General Adviser's Note</a></h2><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box"><i class="fa fa-angle-down"></i></a>
                </div>
                <div id="updates-box" role="tabpanel" class="collapse show">
                  <ul class="news list-unstyled"  style="max-height: 500px;  overflow-y: auto;" >
                    <!-- Item-->

                    <?php 
 
                    // $genfeed =fetch("$s general_feed $w feed_status='1' AND feed_section='2015/2016' order by feed_id desc");
                                    // Logic that displays the general adviser feed on students feed box
                    $genfeed =fetch("SELECT a.*, gf.* FROM adviser_std AS a LEFT JOIN general_feed AS gf ON a.as_adviser_id = gf.adviser_id WHERE a.as_std_id = '".$_SESSION['id']."' AND a.as_status = '1' order by gf.feed_id desc ");
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
                           ";

                          // Feed reminder
                          $feed=$g->feed_id;
                          $std_id= $_SESSION['id'];
                         $check = fetch("$s general_feed_reminder where feed_id=$feed AND std_id='".$_SESSION['id']."' AND rem_status='1' AND std_rem_status='1' ");
                        if( $check==""){
                          echo"
                          
                          <div class='CTAs'> 
                          <button type='button' data-toggle='modal' data-target='#myModal2' class='btn btn-xs btn-dark' style='display:inline-block;'><i class='fa fa-thumbs-up'> </i>Remind Me later</button>
                          <!-- Modal2 -->
                          <div id='myModal2' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true' class='modal fade text-left'>
                    <div role='document' class='modal-dialog'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <h5 id='exampleModalLabel' class='modal-title'>Set Reminder date</h5>
                          <button type='button' data-dismiss='modal' aria-label='Close' class='close'><span aria-hidden='true'>×</span></button>
                        </div>
                        <div class='modal-body'>
                          <p>Select a date you may wish to be reminded.</p>
                          <form method='post' action='dash.php'>
                            <input type='hidden' value='$g->feed_id' name='feed_id'>
                             <input type='hidden' value='$std_id' name='std_id'>
                            <div class='form-group'>
                              <label>Remind me on:</label>
                              <input type='date' name='reminder_date' style='width:140px; font-size:14px;  border:1px solid green;' required>&nbsp;
                              <input type='submit' name='gremind' value='Remind Me' class='btn btn-xs btn-dark'>

                            </div>
                           
                          </form>
                        </div>
                        <div class='modal-footer'>
                          <button type='button' data-dismiss='modal' class='btn btn-secondary'>Close</button>
                          
                        </div>
                      </div>
                    </div>
                  </div>    
                    
                          &nbsp;&nbsp;  </div> 
                            ";}else{
                            echo"
                             
                       <div class='CTAs'> </div></ 
                              ";
                            }

                          echo "
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
              <!-- General News feed End-->
            </div>


            <div class="col-lg-4 col-md-6">
              <!-- Personal news feed Widget-->
              <div id="daily-feeds" class="card updates daily-feeds">
                <div id="feeds-header" class="card-header d-flex justify-content-between align-items-center">
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box">Personal Advice Feed </a></h2>
                  <div class="right-column">
                    <?php 
                    $my_did =$_SESSION['id'];
                    //  $percount1 = counts("$s personal_feed $w std_read_status='0' and msg_status='1' and std_id='$my_did' ");
                     $percount1 = counts("SELECT a.*, pf.* FROM adviser_std AS a LEFT JOIN personal_feed AS pf ON a.as_adviser_id = pf.adviser_id $w pf.std_read_status='0' and pf.msg_status='1' and pf.std_id='$my_did' and a.as_std_id='$my_did' order by pf.msg_id desc");
                     
                     ?>
                    <div class="badge badge-primary">  <?php echo"$percount1";?> Unread SMS</div><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box"><i class="fa fa-angle-down"></i></a>
                  </div>
                </div>
                <div id="feeds-box" role="tabpanel" class="collapse show">
                  <div class="feed-box">
                    <ul class="feed-elements list-unstyled" style="max-height: 500px;  overflow-y: auto;">
                      
                      <!-- List-->

                      <?php 

                      // Logic that Inputs the Personal feed to students personal feed
                      // $genfeed =fetch("SELECT a.*, gf.* FROM adviser_std AS a LEFT JOIN general_feed AS gf ON a.as_adviser_id = gf.adviser_id WHERE a.as_std_id = '".$_SESSION['id']."' AND a.as_status = '1' ");

                       $my_did =$_SESSION['id']; 
                      $perfeed = fetch("SELECT a.*, pf.* FROM adviser_std AS a LEFT JOIN personal_feed AS pf ON a.as_adviser_id = pf.adviser_id $w pf.std_read_status='0' and pf.msg_status='1' and pf.std_id='$my_did' and a.as_std_id='$my_did' order by pf.msg_id desc");
                      if($perfeed<=0){
                        echo" <div  class='card-header d-flex justify-content-between align-items-center'>
                  <center><h2 class='h5 display'>You Have no personal Message !</h2></center>
                  </div>";
                      }else{
                        foreach ($perfeed as $p) {
                         
                         echo "<li class='clearfix'>
                        <div class='feed d-flex justify-content-between'>
                          <div class='feed-body d-flex justify-content-between'><a href='#' class='feed-profile'><img src='img/avatar-1.jpg' alt='person' class='img-fluid rounded-circle'></a>
                            <div class='content'><strong>$p->adviser_rate</strong><small>Course Adviser </small>
                              <div class='full-date'><small>On $p->sent_date</small></div>
                            </div>
                          </div>
                          <div class='date'> <small>5min ago</small></div>
                        </div>

                        <div class='message-card'> <small>$p->message</small></div>";

                         $check = $p->std_rem_date;
                        if( $check==""){
                          echo"
                           <button type='button' data-toggle='modal' data-target='#myModal' class='btn btn-xs btn-dark' style='display:inline-block;'>Remind Me</button>
                  <!-- Modal-->
                  <div id='myModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true' class='modal fade text-left'>
                    <div role='document' class='modal-dialog'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <h5 id='exampleModalLabel' class='modal-title'>Set Reminder date</h5>
                          <button type='button' data-dismiss='modal' aria-label='Close' class='close'><span aria-hidden='true'>×</span></button>
                        </div>
                        <div class='modal-body'>
                          <p>Select a date you may wish to be reminded.</p>
                          <form method='post' action='dash.php'>
                            <input type='hidden' value='$p->msg_id' name='message_id'>
                            <div class='form-group'>
                              <label>Remind me on:</label>
                              <input type='date' name='reminder_date' style='width:140px; font-size:14px;  border:1px solid green;'>&nbsp;
                              <input type='submit' name='remind' value='Remind Me' class='btn btn-xs btn-dark'>

                            </div>
                           
                          </form>
                        </div>
                        <div class='modal-footer'>
                          <button type='button' data-dismiss='modal' class='btn btn-secondary'>Close</button>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                          ";
                         echo "<form method='post' action='dash.php'>
                        <input type='hidden' value='$p->msg_id' name='message_id'>
                        &nbsp;<button class='btn btn-xs btn-dark' name='read'><i class='fa fa-trash'> </i>Trash</button>
                        </form>";
                        }
                        else{
                          echo"
                          <form method='post' action='dash.php'>
                        <input type='hidden' value='$p->msg_id' name='message_id'>
                        &nbsp;<button class='btn btn-xs btn-dark' name='read'><i class='fa fa-trash'> </i>Trash</button>
                        </form>
                       </li>";
                        }
                      }
                        }
                      ?>



     <?php                 
//Persona Message reminder
if(isset($_POST['gremind'])){ 
  $rem_date = filters('reminder_date');
    $feed_id= filters('feed_id');
      $std_id= filters('std_id');
  if(udi("$i general_feed_reminder values('','$feed_id','$std_id','0','1','$rem_date','0','1','0') ")){

 }  
}

?>

     <?php                 
//Persona Message reminder
if(isset($_POST['remind'])){ 
  $rem_date = filters('reminder_date');
    $message_id= filters('message_id');
  if(udi("$u personal_feed set std_rem_date='$rem_date' where msg_id='$message_id'")){
 }  
}
if(isset($_POST['read'])){ 
   $message_id= filters('message_id');
  if(udi("$u personal_feed set std_read_status='1' where msg_id='$message_id'")){
   
  }   
}
?>
                       <?php?></span>
                     
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Daily Feed Widget End-->
            </div>

            <div class="col-lg-4 col-md-6" >
              <!-- Recent Activities Widget      -->
              <div id="recent-activities-wrapper" class="card updates activities" >
                <div id="activites-header" class="card-header d-flex justify-content-between align-items-center">
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#recent-activities-wrapper" href="#activities-box" aria-expanded="true" aria-controls="activities-box">Departmental Activities</a></h2><a data-toggle="collapse" data-parent="#recent-activities-wrapper" href="#activities-box" aria-expanded="true" aria-controls="activities-box"><i class="fa fa-angle-down"></i></a>
                </div>

                <?php 
                  $act = fetch("$s actiivities $w act_status='1' order by act_id DESC");

                  if ($act<=0) {
                   echo" <div  class='card-header d-flex justify-content-between align-items-center'>
                  <center><h2 class='h5 display'>No Activity Record Yet</h2></center>
                  </div>"; }
                  else{
                    foreach ($act as $a ) {
                      echo "
                       <div id='activities-box' role='tabpanel' class='collapse show'>
                  <ul class='activities list-unstyled'>
                   
                    <li>
                      <div class='row'  style='max-height: 500px;  overflow-y: auto;' >
                        <div class='col-4 date-holder text-right' >
                          <div class='icon'><i class='icon-clock'></i></div>
                          <div class='date'> <span>$a->act_time</span><span class='text-info'>$a->act_date</span></div>
                        </div>
                        <div class='col-8 content'><strong style='color:green;'>$a->act_title</strong>
                          <p>$a->act_message</p>
                        </div>
                      </div>
                    </li>                  
                  </ul>
                </div>

                      ";
                    }
                  }
                 ?>
               

              </div>
            </div>
          </div>
        </div>
      </section>
     <?php require_once('php/a_footer.php');?>