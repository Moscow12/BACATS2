
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
<?php echo form_open('index.php/registered/dept'); ?>
<?php if($this->session->flashdata('dept_added')):  ?>    
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('dept_added'). '</p>'; ?>
            <?php endif; ?>
    <div class="row"><div class="col-sm-2"></div> 
        <div class="col-sm-8">     
            <div class="card ">
                <div class="card-header small text-muted"><h3><?php echo $title; ?></h3></div>
                    <div class="card-body">
                        <div>
                            <?php echo validation_errors(); ?>
                        </div>
                        <div class="form-group">
                            <label>select Collage</label>
                                <select name="collage_id" class="form-control">
                                    <option value="" required outofocus>--Select field--</option>
                                    <?php foreach ($collages as $collage){ ?>
                                        <option value="<?php echo $collage['id']; ?>"><?php echo $collage['collage_name']; ?> </option>
                                    <?php }  ?>
                                </select>
                        </div>
                        <div class="form-group">
                            <label>Name of Depertment</label>
                            <input type="text" class="form-control" name="dept_name" placeholder="Depertment name" required outofocus>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </div>
        </div><div class="col-sm-2"></div>
    </div> 
<?php echo form_close(); ?>

