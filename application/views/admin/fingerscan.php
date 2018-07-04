<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
    <div class="row"><div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card"><div class="card card-header"><?php echo $title; ?></div>
                <div class="card card-body"><?php foreach($students as $user_view){?>
                    <div class="form-group">
                        <label for="">Student Reg. No.</label>  <?php echo $user_view['reg_no']; ?>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" >Enroll FingerPrint</button>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div><div class="col-sm-3"></div>
    </div>