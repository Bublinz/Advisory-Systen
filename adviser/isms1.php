    <?php
    require_once ('php/a_assets.php'); 
        require_once ('php/a_header.php'); 
?>

     <link rel="stylesheet" href="css/sms.css">

      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Smart Chat </li>
          </ul>
        </div>
      </div>
       <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<html>
<head>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css" rel="stylesheet"

</head>
<body>
<div class="container">
<h3 class=" text-center">Messaging</h3>
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search by name or Reg.No" >
                <span class="input-group-addon">
                
                </span> </div>
            </div>
          </div>
          <div class="inbox_chat">
             
 
              <?php 
              // display only students adviser is in charge of
                      //$gstd = fetch("SELECT *  FROM students_data  $w reg_no like '%2014%' ");
                      $gstd =fetch("SELECT a.*, sd.* FROM adviser_std AS a LEFT JOIN students_data AS sd ON a.as_std_id = sd.std_id WHERE a.as_adviser_id = '".$_SESSION['id']."' AND a.as_status = '1'  order by sd.surname");

                      if ($gstd<=0){
                        echo "<p>No Conversation Yet!</p>";
                      }else{
                         
                        foreach($gstd as $r){
                          
                          echo "
            <form method='post'>
            <div class='chat_list active_chat'>
              <div class='chat_people'>
                <div class='chat_img'> <img src='https://ptetutorials.com/images/user-profile.png' alt='sunil'> </div>
                <div class='chat_ib'>
                <input type='hidden' value='$r->std_id' name='std_id'>
                
                  <h5>$r->surname, $r->other_names</span></h5>
                  <span>$r->reg_no</span>
                    <button class='js-click' type='submit' name='next'><i class='fa fa-hand-pointer-o '></i> Open</button>
                </div>
              </div>
            </div>
            </form>";
                        }
                      }
                      ?>

 

          </div>
        </div>
        <div class="mesgs" id="sms">
          <div class="msg_history">




                 <?php
                   if(isset($_POST['next'])){ 
                    $std_id = filters('std_id');
                   $showcount = counts("SELECT s.*, f.* FROM students_data as s LEFT JOIN personal_feed as f ON f.std_id = s.std_id $w f.msg_status='1' AND s.std_id ='$std_id' AND f.adviser_id='".$_SESSION['id']."' ");
                  // $showsurname = fetch("surname","$s students_data $w std_id ='$std_id' status='1' ");
                   
                  // echo get("other_names","SELECT s.*, f.* FROM students_data as s LEFT JOIN personal_feed as f ON f.std_id = s.std_id $w f.msg_status='1' AND s.std_id ='$std_id' AND f.adviser_id='".$_SESSION['id']."' ");
                   
                    // logic to display empty when no sms
                   if($showcount < 1){?>
                      
                          <div class="incoming_msg">
            
              <div class="received_msg">
                <div class="received_withd_msg">
                  <small>No history yet with <b><?php echo get("surname","$s students_data $w std_id ='$std_id' and status='1' ");?>, <?php echo get("other_names","$s students_data $w std_id ='$std_id' and status='1' ");?> </b></small>
                  </div>
              </div>
            </div>
                    <?php 
                   }
                  //  logic to display all sms with std
                  else{
                    $show = counts("SELECT s.*, f.* FROM students_data as s LEFT JOIN personal_feed as f ON f.std_id = s.std_id $w f.msg_status='1' AND s.std_id ='$std_id' AND f.adviser_id='".$_SESSION['id']."' ORDER BY f.msg_id DESC");
                    // Iteration logic
                      foreach($show as $r){
                        // <img src='https://ptetutorials.com/images/user-profile.png' alt='sunil'>       
                          echo " 
                          <div class='incoming_msg'>
            <div class='incoming_msg_img'> 
            <i class='fa fa-check'></i>
            
            </div>
              <div class='received_msg'>
              <small> To: $r->surname, $r->other_names</small>
              <input type='hidden' value='$r->std_id' name='std_id'>
                <div class='received_withd_msg'>
                  <p>$r->message</p>
                  <span class='time_date'> $r->sent_date</span></div>
              </div>
            </div>
                      
                          ";
                      }
                    }



                      echo "
             <form method='post' action='isms.php#sms'>
          </div>

         
          <div class='type_msg'>
            <div class='input_msg_write'>
           <div class='input-group'>
             <div class='input-group-prepend'>
                <select class='form-control' name='rate_sms' >
              <option value='Information'>Please rate this message</option>
              <option value='Urgent'>Urgent</option>
              <option value='Optional'>Optional</option>
              </select>
            </div>
              <input type='text' class='form-control' name='sms' placeholder='Type a message here' required/>
             </div>   
             
 
              <input type='hidden'  name='std_id' value='$std_id' />
              <button class='btn btn-primary' name='new_sms' type='submit'><i class='fa fa-paper-plane-o' aria-hidden='true'></i> SEND</button>
            </div>
          </div>
        </div>
      </div>
      </form>
      ";
    }
  ?>
  
                <?php
                   if(isset($_POST['new_sms'])){ 
                    $std_id = filters('std_id');
                    $sms = filters('sms');
                     $rate_sms = filters('rate_sms');
                    $adviser_id =	$_SESSION['id'] ;
                    if(udi("$i personal_feed (msg_id, message, std_id, adviser_id, sent_date,adviser_rate, msg_status ) values('','$sms','$std_id','$adviser_id',CURDATE(),'$rate_sms','1')")){
	    
      }else{
        echo "something went wrong";
      }
    }
    ?>

    </div></div>
    </body>
    </html>

     <?php
         require_once ('php/a_footer.php'); ?>

  <script>
    	$(document).ready(function(){
$('#action_menu_btn').click(function(){
	$('.action_menu').toggle();
});
	});
  </script>