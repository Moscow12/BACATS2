
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
<?php echo $title; ?>
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
                  <th>Program</th>
                  <th>Time in</th>
                  <!-- <th>Attendance</th>
                  
                  <th>Total Percentage</th> -->
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Reg: No.</th>
                  <th>Program</th>
                  <th>Time in</th>
                  <!-- <th>Attendance</th>
                  
                  <th>Total Percentage</th> -->
                </tr>
              </tfoot>
              <tbody>
              <?php foreach($day_attendance as $course_attendance){?>
                  <tr>
                      <td><?php echo $course_attendance['names']; ?></td>
                      <td><?php echo $course_attendance['reg'];?></td>
                      <td><?php echo $course_attendance['et']; ?></td>
                      <td><?php echo $course_attendance['pname']; ?></td>
                     
                    </tr>
              <?php }?>
                
                <!-- <tr>
                  <td>Hemmed Ally</td>
                  <td>2015-04-08111</td>
                  <td>Bachelor of Science in computer Science</td>
                   <td>12:09</td>
                  
                  <!--<td> </td> -
                </tr> -->
              </tbody>
            </table><a href="attendance" class="btn btn-primary block" title="Click to View General attendances"> <i class="fa fa-eye"></i> whole Attendance</a>      

          </div>
        </div>
        <div class="card-footer small text-muted">Updated at <?php echo date('y/m/d'); ?></div>
      </div>
    </div>