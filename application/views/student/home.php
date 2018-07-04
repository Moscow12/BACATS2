
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
<div class="card">
    <div class="card border-danger text-center">
        <div class="card-header"><?php echo $title; ?></div>
            <div class="card-body">
                <h5 class="card-title">Read terms and condition</h5>
                    <p class="card-text">This it the class system attendance tracking system.<br/> Students shall have the 
                    role to update/edit their profile and register course that undertake which are already registerd in the system.<br/> 
                    Also should register their finger prints
                    </p>
                <a href="enroll" class="btn btn-primary">Enroll Course</a>
            </div>
        <div class="card-footer border-danger text-danger">Bepunctual attend classes</div>
</div>

 