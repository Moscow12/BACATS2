
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
              <?php foreach($attendances as $course_attendance){?>
                <tr>
                  <td><?php echo $course_attendance['names']; ?></td>
                  <td><?php echo $course_attendance['reg']; ?></td>
                  <td><?php echo $course_attendance['programs']; ?></td>
                  <td><?php echo $course_attendance['totals']; ?></td>
                  
                  <td> <?php $otea = rand(00, 100); echo $otea."%" ; ?></td>
                </tr>
              <?php }?>
                
                <!-- <tr>
                  <td>Semen Mak Ilan</td>
                  <td>2015-04-08000</td>
                  <td>Bachelor of Science with computer Science</td>
                  <td>12</td>
                  
                  <td> <?php #$otea = rand(00, 100); echo $otea."%" ; ?></td>
                </tr>
                <tr>
                  <td>Hemmed Ally</td>
                  <td>2015-04-08111</td>
                  <td>Bachelor of Science in computer Science</td>
                  <td>27</td>
                  
                  <td> <?php #$otea = rand(00, 100); echo $otea."%" ; ?></td>
                </tr> -->
              </tbody>
            </table><a href="dayattandance" class="btn btn-primary " title="Click here to view today attendances">Today attendance</a>
            </table><a href="download" class="btn btn-primary "><i class="fa fa-download" title="Click to download the report of attendances for the time"></i>Download Total attendance</a>

          </div>
        </div>
        <div class="card-footer small text-muted">Updated at <?php echo date('y/m/d'); ?></div>
      </div>
    </div>