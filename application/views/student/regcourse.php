
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
    <style>.table {
    border-radius: 5px;
    width: 99%;
    margin: 0px auto;
    float: none;
}</style>
	
<?php echo form_open('index.php/Student/one'); ?>
    <div class="row"><div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="card">
                <div class="card-header" align="center">
                    <h3><?php echo $title; ?></h3>
                </div>
                <div class="card-body">
                <?php echo validation_errors(); ?>
                    <div class=""></div>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr align="center">
                            <th>Course Code</th>
                            <th>Course name</th>
                            <th>Instructed By</th>
                            <th ><button class="btn btn-primary"><i class="fa fa-check"></i>Register</button ></th>
                        </tr>
                        
                            <?php foreach ($courses as $users){ ?>
                                <tr>
                                    <td><?php echo $users['course_code']; ?></td>
                                    <td><?php echo $users['course_name']; ?></td>
                                    <td ><?php echo $users['Byname']; ?></td>
                                    <td align="center">
                                        <div class="form-check">
                                            <input type="checkbox" name="course[]" value="<?php #echo $course['id']; ?>" class="form-check-input" id="exampleCheck1" align="center">
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        
                    </table>
                    <button type="submit" class="btn btn-primary">Confirm registration</button>
                </div>
            </div>
        </div><div class="col-sm-1"></div>
    </div>    
