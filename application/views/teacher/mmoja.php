
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
<div class="col-sm-12">
    <div class="card">
        <div class="card-header text-center"><h4><?php echo $title; ?></h4></div>
            <div class="card-body">
              
            <table class="table table-bordered table-responsive" id="dataTable" width="100%" cellspacing="0">
                <!-- <tr><thead>
                    <th>Attandance Date course1</th>
                    <td><?php #echo date('Y/m/d'); ?></td>

                    </thead>
                </tr>
                <tr>
                    <td><?php #echo date('Y/m/d'); ?></td>
                    <td>2 <?php #echo date('Y/m/d'); ?></td>
                </tr>
                <tr>
                    <td><?php #echo date('Y/m/d'); ?></td>
                    <td>2 <?php #echo date('Y/m/d'); ?></td>
                </tr>
                <tr>
                    <td><?php #echo date('Y/m/d'); ?></td></tr><tr>
                    <td><?php #echo date('Y/m/d'); ?></td></tr>
                
                <tfoot>
                    <td>Percentage  <?php #$otea = rand(00, 100); echo $otea."%" ; ?></td>
                    <td>Percentage2  <?php #$otea = rand(00, 100); echo $otea."%" ; ?></td>
                </tfoot>         

            </table>-->
            
            <?php foreach($attended as $attendance){ ?>

                <?php echo $attendance['attendance_date'];?>

            <?php }?> 
            <div class="card-footer border-danger"><h4>Be Punctual attend Classes</h4></div>
        </div>
    </div>
</div>
<div>
	<table class="table" border="1"> 
		<caption>Registered Students Attandances</caption> 
			<thead> 
				<tr align="center"> 
					<th rowspan="2" align="right">Name</th>
					<th rowspan="2">Reg.No</th>	
					<th colspan="3" width="30%">Status</th>
					<th rowspan="2">percentage</th>
					
					
				</tr> 
				<tr>
					<th>normal</th>
					<th>late</th>
					<th>Absent</th>
					
				</tr>
				
			</thead> 
			<tbody>
				<tr> 
					<td>Beatrice Mahone</td> 
					<td>2015-04-00064</td>
					<td></td>
					<td></td>
					<td></td>
					<td><?php $otea = rand(10, 100); echo $otea."%" ; ?></td>
				</tr> 
				
			</tbody> 
		</table>
</div><!--End of table design-->