<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>

	<div class="row"><div class="col-sm-2"></div>
    <div class="col-md-8">
			<div class="card border-success">
				<div class="card card-header border-success"><h4 class="text-center"><?php echo $title;  ?></h4></div>
					<div class="card body">
					<table class="table" border="0"> 
							
							<tbody>
								<?php foreach($profile as $stprofile_view){?>
									<tr> 
										<th>Name</th>
										<td><?php echo $stprofile_view['firstname'].' '.$stprofile_view['mname'].' '.$stprofile_view['lastname']; ?></td>
									</tr>	
									<tr>	
										<th>Reg. No.</th>
										<td><?php echo $stprofile_view['reg_no']; ?></td>
									</tr>
									<tr>	
										<th>Location</th>
										<td><?php echo $stprofile_view['location']; ?></td>
									</tr>
									<tr>	
										<th>Date of Birth</th>
										<td><?php echo $stprofile_view['dob'];?></td>
									</tr>
									<tr>	
										<th>Gender</th>
										<td><?php echo $stprofile_view['gender']; ?></td>
									</tr>
									<tr>	
										<th>Phone Number</th>
										<td><?php echo $stprofile_view['phoneno']; ?></td>
									</tr>
									<tr>	
										<th>Email Address</th>
										<td><?php echo $stprofile_view['email']; ?></td>
									</tr> 
									<tr> 
										<th>Program</th> 
										<td><?php echo $stprofile_view['program_name']; ?></td>
									<tr> 
								<?php }?>
						
							</tbody> 
						</table>
					</div>	<div class="card card-footer border-success"></div>
				</div>		
			</div><div class="col-sm-2"></div>
    </div>