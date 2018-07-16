<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Student | Attendances</title>
      <script type="text/javascript">

          function PrintElem(elem)
          {
              var mywindow = window.open('', 'PRINT', 'height=700,width=900');

              mywindow.document.write('<html><head><title>' + document.title  + '</title>');
            
              mywindow.document.write(document.getElementById(elem).innerHTML);
            
              mywindow.document.close(); // necessary for IE >= 10
              mywindow.focus(); // necessary for IE >= 10*/

              mywindow.print();
              mywindow.close();

              return true;
          }
        </script>
  </head>
  <body>
  <?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
<?php echo $title; ?>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Attendance details table</div>
        <div class="card-body">
          <div class="table-responsive" id="attendance">
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
                  <td><?php echo $course_attendance['firstname'].' '.$course_attendance['mname'].' '.$course_attendance['lastname']; ?></td>
                  <td><?php echo $course_attendance['reg']; ?></td>
                  <td><?php echo $course_attendance['programs']; ?></td>
                  <td><?php echo $course_attendance['totals']; ?></td>
                  
                  <td> <?php 
                      $pass = 15;
                      $times =  $course_attendance['totals'];
                      $percentage = $times/$pass*100;
                      echo (round($percentage,2)). "%";
                  ?></td>
                </tr>
              <?php }?>
              </tbody>
            </table><a href="dayattandance" class="btn btn-primary " title="Click here to view today attendances">Today attendance</a>
            </table><button id="print" onclick="PrintElem('attendance')" class="btn btn-primary "><i class="fa fa-download" title="Click to download the report of attendances for the time"></i>Print attendance</a>

          </div>
        </div>
        <div class="card-footer small text-muted">Updated at <?php echo date('y/m/d'); ?></div>
      </div>
    </div>
  </body>
</html>


