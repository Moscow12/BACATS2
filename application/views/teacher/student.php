
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
    
<div class="card">
	<div class="card-header text-center">
		<h3><?php echo $title; ?></h3>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th rowspan="1">#</th>
					<th rowspan="1">Name</th>
					<th rowspan="1">Registration No.</th>
					<th rowspan="1">Program</th>
					<th colspan="1"><i class = "fa fa-eye"></th>
					
				</tr>
			</thead>
			<!-- Here the the table should query from table student course -->
				<?php $numb = 1; foreach($students as $user_view){?>
					<tr>
					<th scope="row"><?php echo $numb++; ?></th>
					<td><?php echo $user_view['firstname'].' '.$user_view['mname'].' '.$user_view['lastname']; ?> </td>
					<td><?php echo $user_view['reg_no']; ?> </td>
					<td><?php echo $user_view['program_name'];?></td>
					<form action="attend">
                    	<td><input type="submit" class="btn btn-success" value=" View attendances"></td>
						<input type="hidden" value="<?php echo $user_view['reg_no']; ?>" name="reg_no">
					</form>
					<tr><br/>
				<?php }?>
		</table>
	</div>
</div>
	

			<?php if($this->session->flashdata('course_register')):  ?>    
                <?php echo '<p class="class="alert alert-success">'.$this->session->flashdata('course_register'). '</p>'; ?>
            <?php endif; ?>