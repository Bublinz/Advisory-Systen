   <?php
 require_once 'php/a_assets.php';
   require_once 'php/a_header.php';
  ?>
 

 <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">IT Track</li>
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
       
          <div class="row">
          
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Here is the list of the IT tracking info</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>S/N</th>
                          <th> Name</th>
                          <th>Placement</th>
                          <th>Unit</th>
                          <th>State</th>
                           <th>Responsibility</th>
                            <th>Superv. Name</th>
                             <th>Superv. No</th>
                             <th>Start Date</th>
                              <th>More</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      // check that sessioning for lecturer and student and correst the year and level to display it monitoring
                      $mit = fetch("SELECT s.*, m.* FROM it_monitoring as m LEFT JOIN students_data as s ON s.std_id = m.std_id $w s.reg_no like '%2012%' ORDER BY s.std_id DESC");
                      if ($mit<=0){
                        echo "<tr ><td colspan='10' style='text-align:center;'> No Records from your students yet </td></tr>";
                      }else{
                         $i=0;
                        foreach($mit as $m){
                         $i++;
                          echo "
                           <tr>
                          <th>$i</th>
                          <td>$m->surname, $m->other_names</td>
                          <td>$m->placement</td>
                          <td>$m->unit</td>
                          <td>$m->state</td>
                          <td>$m->responsibility</td>
                          <td>$m->supervisor_name</td>
                          <td>$m->supervisor_phone</td>
                          <td>$m->start_date</td>
                          <td>$m->message</td>
                          <td><button class='btn btn-danger'><i class='fa fa-book'></i><input type='hidden' value='$m->it_id'></button></td>
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