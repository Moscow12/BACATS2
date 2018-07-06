
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
<?php echo form_open('index.php/Teacher/submitcourse'); ?>
<?php if($this->session->flashdata('course_register')):  ?>    
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('course_register'). '</p>'; ?>
            <?php endif; ?>
<div class="row"><div class="col-md-2"></div>
    <div class="col-sm-8">
        <div class="card">
            <div class="card card-header"><?php echo $title; ?></div>
            <div class="card card-body">
                <?php echo validation_errors(); ?>
                
                <div class="form-group">
                    <label for="">Select Course</label>
                    <select name="course_id"  class="form-control">
                        <option value=""></option>
                        <?php foreach($Courses as $course) {?>
                        <option value="<?php echo $course['id']; ?>"><?php echo $course['course_name']; ?> </option>
                        <?php }?>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
               
            </div>
        </div>
    </div><div class="col-md-2"></div>
</div>
<?php echo form_close(); ?>