
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
<div class="card">
	<div class="card-header text-center">
		<h3><?php echo $title; ?></h3>
	</div>
	<div class="card-body">
		<table class="table table-bordered" id="mytable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th rowspan="2">#</th>
					<th rowspan="2">Name</th>
					<th rowspan="2">Registration No.</th>
					<th colspan="3" width="20%" align="center"><span class="btn-block text-center">Modify</span> </th>
				
				</tr>
				<tr>
					<th> <button class="btn btn-success"><i class = "fa fa-eye"></button></i></th>
					<th> <button class="btn btn-primary"> <i class = "fa fa-edit"></button></i></th>
					<th> <button class="btn btn-danger"> <i class = "fa fa-trash"></button></i></th>
				</tr>
			</thead>
			
			<?php foreach($teachers as $users){?>
				<tr>
					<td scope="row"><?php echo $users['id']; ?></td>
					<td><?php echo $users['name']; ?> </td>
					<td><?php echo $users['reg_no']; ?> </td>
					<td ><button class="btn btn-success">View</button></td>
					<td><button class="btn btn-primary"> Edit</button></td>
					<td><button class="btn btn-danger"> Delete</button></td>
				
			   	<tr><br/>
			<?php }?>
		</table>
		<div class="card-footer small text-muted">Updated at <?php echo date('Y/m/d'); ?></div>
	</div>
</div>

	
	<script src="<?=base_url();?>assets/vendor/datatables/jquery.dataTables.js"></script>


