
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
<?php echo form_close(); ?>
<?php if($this->session->flashdata('course_added')):  ?>    
                <?php echo '<p class="alert alert-success" align="center">'.$this->session->flashdata('course_added'). '</p>'; ?>
            <?php endif; ?>
        <div class="row"><div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header" align="center">
                        <h3><?php echo $title; ?></h3>
                    </div>
                    <div class="card-body">
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('index.php/registered/course'); ?>
                        <div class="form-group">
                            <label>Department name</label>
                            <select name="dept_id" class="form-control">
                                <?php foreach ($departments as $department){ ?>
                                    <option value="<?php echo $department['id']; ?>"><?php echo $department['dept_name']; ?> </option>
                                <?php }  ?>
                            </select>
                        </div>
                        <div class="form-group">
                                <label>Course Code</label>
                                <input type="text" class="form-control" name="course_code" placeholder="Course name" required outofocus>
                        </div>
                        <div class="form-group">
                                <label>Name of Course</label>
                                <input type="text" class="form-control" name="course_name" placeholder="Course name" required outofocus>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                        <?php echo form_close(); ?>
                    </div>
                 </div>
            </div><div class="col-sm-2"></div>
        
        </div>