   <?php
 require_once 'php/a_assets.php';
   require_once 'php/a_header.php';
  ?>
 

 <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Reminder      </li>
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Tables            </h1>
          </header>
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>General Info Reminder</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th>Reminder Date</th>
                          <th>Title</th>
                          <th>Message</th>
                           <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         <?php
                      $grem = fetch("SELECT f.*, r.* FROM general_feed AS f LEFT JOIN general_feed_reminder AS r ON f.feed_id=r.feed_id $w r.rem_status='1' AND r.std_id='".$_SESSION['id']."' AND r.std_rem_status ='1' AND f.feed_status='1' ORDER BY r.rem_id DESC");
                      if ($grem<=0){
                        echo "<tr ><td colspan='5' style='text-align:center;'>No Reminder in your General Box yet!</td></tr>";
                      }else{
                        $i=0;
                        foreach($grem as $r){
                          $i++;
                          echo "
                        <tr>
                          <th>$i</th>
                          <td>$r->std_rem_date</td>
                          <td>$r->feed_title</td>
                          <td>$r->feed_message</td>
                          <form method='post' action='dash.php'>
                           <td><button class='btn btn-danger' name='delete1'><i class='fa fa-trash'></i><input type='hidden' value='$r->rem_id' name='rem_id'></button></td></form>
                        </tr>
                        ";
                        }
                      }
                      ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Personal Info Reminder</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th>Remider Date</th>
                          <th>Rating</th>
                          <th>Message</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $prem = fetch("$s personal_feed $w msg_status='1' AND std_id='".$_SESSION['id']."' AND std_rem_date !='' AND std_reply_id ='0' ORDER BY msg_id DESC");
                      if ($prem<=0){
                        echo "<tr ><td colspan='5' style='text-align:center;'>No Message in your reminder yet!</td></tr>";
                      }else{
                        $i=0;
                        foreach($prem as $r){
                          $i++;
                          echo "
                           <tr>
                          <th>$i</th>
                          <td>$r->std_rem_date</td>
                          <td>$r->adviser_rate</td>
                          <td>$r->message</td>
                          <form method='post' action='dash.php'>
                          <input type='hidden' value='$r->msg_id' name='msg_id'>
                          <td><button class='btn btn-danger' name='delete' ><i class='fa fa-trash'></i></button></td></form>
                        </tr>
                          ";
                        }
                      }
                      ?>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </section>
       <?php require_once('php/a_footer.php');?>