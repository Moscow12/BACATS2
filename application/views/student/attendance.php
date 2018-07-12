
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
<div class="col-sm-12">
    <div class="card">
        <div class="card-header text-center"><h4><?php echo $title; ?></h4></div>
            <div class="card-body">
                
            <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
                <tr><thead>
                    <th rowspan="1">#</th>
                    <th>Attandance Date course1</th>
                    <th>Attandance Date course2</th>
                    </thead>
                </tr>
                
                    <?php $idadi = 1; foreach($attended as $attendance){ ?>
                     <tr>
                        <th scope="row"><?php echo $idadi++; ?></th>
                        <td><?php echo $attendance['attendance_date'];?></td>
                    </tr>
                    <?php }?>
               
               
                <tfoot>
                    <td></td>
                    <td>Percentage  <?php $otea = rand(00, 100); echo $otea."%" ; ?></td>
                    <td>Percentage2  <?php $otea = rand(00, 100); echo $otea."%" ; ?></td>
                </tfoot>                          
            </table>
            
            <div class="card-footer border-danger"><h4>Be Punctual attend Classes</h4></div>
        </div>
    </div>
</div>

<!-- to be used in future-->
 <!-- <tr>
                    <td><?php echo date('Y/m/d'); ?></td>
                    <td>2 <?php echo date('Y/m/d'); ?></td>
                </tr>
                <tr>
                    <td><?php echo date('Y/m/d'); ?></td>
                    <td>2 <?php echo date('Y/m/d'); ?></td>
                </tr>
                <tr>
                    <td><?php echo date('Y/m/d'); ?></td></tr><tr>
                    <td><?php echo date('Y/m/d'); ?></td></tr>-->
                

                <!-- <nav class="nav nav-tabs nav-justified">
                    <a class="nav-item nav-link active" href="#">Course 1</a>
                    <a class="nav-item nav-link" href="#">Course 2</a>
                    <a class="nav-item nav-link" href="#">Course 3</a>
                    <a class="nav-item nav-link" href="#">Course 4</a>
                    <a class="nav-item nav-link" href="#">Course 5</a>
                    <a class="nav-item nav-link disabled" href="#">Course 6</a>
                </nav> -->
