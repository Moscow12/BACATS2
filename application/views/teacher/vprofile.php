<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>

	<?php if($this->session->flashdata('teacher_profile')):  ?>    
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('teacher_profile'). '</p>'; ?>
            <?php endif; ?>
	<div class="row"><div class="col-md-2"></div>
    <div class="col-md-6">
			<div class="card">
				<div class="card card-header"><h1 class="text-center"><?php echo $title; ?></h1></div>
					<div class="card body">
					<table class="table" border="0"> 
						<caption>Registered as</caption> 
							
							<tbody>
							<?php foreach($profile as $tprofile_view){?>
								<tr> 
									<th>Name</th>
									<td><?php echo $tprofile_view['firstname'].' '.$tprofile_view['mname'].' '.$tprofile_view['lastname']; ?></td>
								</tr>	<?php }?>
								<tr>	
									<th>Reg. No.</th>
									<td><?php echo $tprofile_view['reg_no']; ?></td>
								</tr>
								<tr>	
									<th>Office Number</th>
									<td><?php echo $tprofile_view['office_no']; ?></td>
								</tr>
								<tr>	
									<th>DOB</th>
									<td><?php echo $tprofile_view['dob'];?></td>
								</tr>
								<tr>	
									<th>Gender</th>
									<td><?php echo $tprofile_view['gender']; ?></td>
								</tr>
								<tr>	
									<th>Phone Number</th>
									<td><?php echo $tprofile_view['phoneno']; ?></td>
								</tr>
								<tr>	
									<th>Email Address</th>
									<td><?php echo $tprofile_view['email']; ?></td>
								</tr> 
								<tr> 
									<th>Department</th> 
									<td><?php echo $tprofile_view['dept_name']; ?></td>
								<tr> 
						
							</tbody> 
						</table>
					</div>	
				</div>			
			</div><div class="col-md-2"></div>
    </div>