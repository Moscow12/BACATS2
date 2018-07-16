<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>	
	
		<div class="row"><div class="col-sm-2"></div>
			<div class="col-sm-8">
				<div class="card m-3 border-danger">
					<div class="card-header  text-center"><?php echo $title; ?></div>
						<div class="card-body">
							<?php echo validation_errors(); ?>
							<?php echo form_open('index.php/Student/profile'); ?>
                            <?php foreach($profile as $stprofile_view){?>
                            <div class="form-group">
								<label>Email Address &nbsp&nbsp</label><strong><?php echo $stprofile_view['email']; ?></strong>
								<input type="email" name="email" class="form-control" value="<?php echo $stprofile_view['email']; ?>">
							</div>
							<div class="form-group">
								<label>Phone Number</label>
								<input type="tel" name="phoneno" class="form-control" value="<?php echo $stprofile_view['phoneno']; ?>">
							</div>
						
							<div class="form-group">
								<label>Gendar</label>
								<select name="gender" class="form-control">
									<option>--select field--</option>
									<option>Female</option>
									<option>Male</option>
								</select>
							</div>
							<div class="form-group">
								<label>Date of Birth</label>
								<input type="date" name="dob" value="<?php echo $stprofile_view['dob'];?>" class="form-control">
							</div>
							
							<div class="form-group">
								<label>Location</label>
								<input type="text" name="location" class="form-control" value="<?php echo $stprofile_view['location'];?>">
							</div>
                            <?php }?>
							<div class="form-group">
										<label>Program</label>
											<select name="program_id" class="form-control">
												<?php foreach ($Program as $program): ?>
												<option value="<?php echo $program['id']; ?>"><?php echo $program['program_name']; ?> </option>
												<?php endforeach; ?>  
											</select>
										</div>				
							<button class="btn btn-primary" type="submit">Update profile</button>
						</div>	
					<div class="card-footer border-danger text-danger text-center">Bepunctual attend classes</div>
				</div>
			</div><div class="col-sm-2"></idv>
		</div>