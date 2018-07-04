
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>

	<div class="row"><div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="card">
				<div class="card card-header"><h1 class="text-center"><?php echo $title; ?></h1></div>
					<div class="card body">
						<?php echo form_open('index.php/Teacher/profile'); ?>
							<?php echo validation_errors(); ?>
								<div class="form-group">
								<label>Email address</label>
									<input type="email" name="email" placeholder="Enter Email" class="form-control">
								</div>
								<div class="form-group">
									<label>Gendar</label>
									<select name="gender" class="form-control">
									<option>Female</option>
									<option>Male</option>
									</select>
								</div>
								<div class="form-group">
									<label>Date of Birth</label>
									<input type="date" name="dob" placeholder="Enter Date of Birth" class="form-control">
								</div>
								<div class="form-group">
									<label>Office no</label>
									<input type="text" name="office_no" placeholder="Enter Office No" class="form-control">
								</div>
							<div class="form-group">
								<label>Phone Number</label>
								<input type="number" name="phoneno" class="form-control" placeholder="Enter your Phone number">
							</div>
							<div class="form-group">
								<label>Depertment</label>
								<select name="dept_id" class="form-control">
									<?php foreach ($Depertment as $depertment): ?>
									<option value="<?php echo $depertment['id']; ?>"><?php echo $depertment['dept_name']; ?> </option>
									<?php endforeach; ?>  
								</select>
							</div>
							<button class="btn btn-primary" type="submit">Submit</button><a href="view_profile">View profile</a>
							<?php echo form_close(); ?>
					</div>	
				</div>			
			</div><div class="col-md-3"></div>
			
	</div>				
	