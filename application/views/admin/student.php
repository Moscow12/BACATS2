
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
	
      <!-- student registered data DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i><?php echo $title; ?></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
					<th rowspan="2">#</th>
					<th rowspan="2">Name</th>
					<th rowspan="2">Registration No.</th>
					<th rowspan="2">Program</th>
					<th rowspan="2">Status</th>
					<th colspan="3" width="20%">Modify</th>
                </tr>
				<tr>
					<th ><button class="btn btn-success"><i class = "fa fa-eye"></button></i></th>
					<th><button class="btn btn-primary"> <i class = "fa fa-edit"></button></i></th>
					<th><button class="btn btn-danger"> <i class = "fa fa-trash"></button></i></th>
				</tr>
              </thead>
              <tfoot>
			  	<tr>
                	<th rowspan="2">#</th>
					<th rowspan="2">Name</th>
					<th rowspan="2">Registration No.</th>
					<th rowspan="2">Program</th>
					<th rowspan="2">Status</th>
					<th colspan="3" width="20%">Modify</th>
                </tr>
              </tfoot>
              <tbody>
			  <?php $numb =1; foreach($students as $user_view){?>
					<tr>
					<th scope="row"><?php echo $numb++; ?></th>
					<td><?php echo $user_view['firstname'].' '.$user_view['mname'].' '.$user_view['lastname']; ?> </td>
					<td><?php echo $user_view['reg_no']; ?> </td>
					<td><?php echo $user_view['program_name']; ?></td>
					<td><button class="btn btn-success">Active</button></td>
					<form action="profile">
							<td><input type="submit" class="btn btn-success" Value="View"></td>
							<input type="hidden" value="<?php echo $user_view['reg_no']; ?>" name="reg_no">

					</form>
					<form action="enrollfinger">
						<td><input type="submit" class="btn btn-info"value="Enroll finger"></td>
						<input type="hidden" value="<?php echo $user_view['reg_no']; ?>" name="reg_no">

					</form>
					<td><a class="btn btn-danger disabled">Deactivate</a></td>
				
				<?php }?>
				
              </tbody>
            </table>
       

          </div>
        </div>
        <div class="card-footer small text-muted">Updated at <?php echo date('y/m/d'); ?></div>
      </div>
    </div>
	

