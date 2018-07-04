

<!--
<div class="card">
	<div class="card-header text-center">
		<h3></h3>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th rowspan="2">#</th>
					<th rowspan="2">Name</th>
					<th rowspan="2">Registration No.</th>
					<th rowspan="2">Program</th>
					<th colspan="3" width="20%">Modify</th>
					
				</tr>
				<tr>
					<th ><button class="btn btn-success"><i class = "fa fa-eye"></button></i></th>
					<th><button class="btn btn-primary"> <i class = "fa fa-edit"></button></i></th>
					<th><button class="btn btn-danger"> <i class = "fa fa-trash"></button></i></th>
				</tr>
			</thead>
			
				<?php foreach($students as $user_view){?>
					<tr>
					<th scope="row">1<?php #$count = $row; ?></th>
					<td><?php echo $user_view['name']; ?> </td>
					<td><?php echo $user_view['reg_no']; ?> </td>
					<td><?php echo $user_view['program_name']; ?></td>
					<td><button class="btn btn-success">View</button></td>
					<td><button class="btn btn-info">Edit</button></td>
					<td><button class="btn btn-danger">Delete</button></td>
				
				<?php }?>
				
		</table>
	</div>
</div>-->


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
					<td><?php echo $user_view['name']; ?> </td>
					<td><?php echo $user_view['reg_no']; ?> </td>
					<td><?php echo $user_view['program_name']; ?></td>
					<td><button class="btn btn-success">Active</button></td>
					<td><a href="#profile" class="btn btn-success">View</a></td>
					<td><a href="enrollfinger" class="btn btn-info">Enroll finger</a></td>
					<td><a class="btn btn-danger disabled">Deactivate</a></td>
				
				<?php }?>
				
              </tbody>
            </table>
       

          </div>
        </div>
        <div class="card-footer small text-muted">Updated at <?php echo date('y/m/d'); ?></div>
      </div>
    </div>
	

