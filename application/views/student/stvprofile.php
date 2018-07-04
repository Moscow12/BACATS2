<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>

	<div class="row"><div class="col-sm-2"></div>
    <div class="col-md-8">
			<div class="card border-success">
				<div class="card card-header border-success"><h4 class="text-center"><?php echo $title; ?></h4></div>
					<div class="card body">
					<table class="table" border="0"> 
						<caption>Profile Update <div class="btn btn-info"><i>edit profile</i></div></caption> 
							
							<tbody>
							<?php foreach($profile as $stprofile_view){?>
								<tr> 
									<th>Name</th>
									<td><?php echo $stprofile_view['name']; ?></td>
								</tr>	<?php }?>
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
									<th>Department</th> 
									<td><?php echo $stprofile_view['program_name']; ?></td>
								<tr> 
						
							</tbody> 
						</table>
					</div>	<div class="card card-footer border-success"></div>
				</div>		
			</div><div class="col-sm-2"></div>
    </div>