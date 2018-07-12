
<?php #foreach($idss as $course_viewtretre){?>
   <?php #echo $course_viewtretre['id']; ?>
   <?php #echo $course_viewtretre['teacher_id']; ?>
   <?php  #}?>



<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
    <div class="alert alert-success">
        <button class="close" data-dismis="alert" aria-hidden="true">x</button>
        <?php echo $title;?> 
        <b><?php echo $course_name; ?></b>
    </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Attendance details table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Reg: No.</th>
                  <th>program</th>
                  <th>Total times Attended</th>
                  
                  <th>Total Percentage</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Reg: No.</th>
                  <th>Program</th>
                  <th>Total times Attended</th>
                  
                  <th>Total Percentage</th>
                </tr>
              </tfoot>
              <tbody>
              <?php foreach($courses as $course_attendance){?>
                <tr>
                  <td><?php echo $course_attendance['firstname'].' '.$course_attendance['mname'].' '.$course_attendance['lastname']; ?></td>
                  <td><?php echo $course_attendance['reg']; ?></td>
                  <td><?php echo $course_attendance['programs']; ?></td>
                  <td><?php echo $course_attendance['totals']; ?></td>
                  
                  <td> <?php $otea = rand(00, 100); echo $otea."%" ; ?></td>
                </tr>
              <?php }?>
                
                </tbody>
            </table><a href="download" class="btn btn-primary "><i class="fa fa-download" title="Click to download the report of attendances for the time"></i>Download Total attendance</a>

          </div>
        </div>
        <div class="card-footer small text-muted">Updated at <?php echo date('y/m/d'); ?></div>
      </div>
    </div>