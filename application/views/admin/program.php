

<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
<?php echo validation_errors(); ?>

<?php echo form_open('index.php/registered/program'); ?>
<?php if($this->session->flashdata('program_added')):  ?>    
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('program_added'). '</p>'; ?>
            <?php endif; ?>
<div class="row"><div class="col-sm-2"></div>
    <div class="col-sm-8">
            <div class="card">
                <div class="card-header"><h3><?php echo $title; ?></h3></div>
                    <div class="card-body">
                        <div class="form-group">
                    <label>Department name</label>
                        <select name="dept_id" class="form-control">
                            <?php foreach ($departments as $department){ ?>
                                <option value="<?php echo $department['id']; ?>"><?php echo $department['dept_name']; ?> </option>
                            <?php }  ?>
                        </select>
                    </div>
                        <div class="form-group">
                            <label>Name of Program</label>
                            <input type="text" class="form-control" name="program_name" placeholder="Program name" required outofocus>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
            </div>
    </div></div>
</div>
<?php echo form_close(); ?>
