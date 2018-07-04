
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
    <style>.table {
    border-radius: 5px;
    width: 50%;
    margin: 0px auto;
    float: none;
}</style>
	
<?php echo form_open('index.php/Student/one'); ?>
<div class="col-sm-10">
    <div class="card">
        <div class="card-header">
            <h2><?php echo $title; ?></h2>
        </div>
        <div class="card-body">
        <?php echo validation_errors(); ?>
            <div class="justfie"></div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <th>Course Code</th>
                    <th>Course name</th>
                   
                    <th><button class="btn btn-primary"><i class="fa fa-check"></i></button ><span>Register</span></th>
                </tr>
                
                    <?php foreach ($courses as $course){ ?>
                        <tr>
                            <td><?php echo $course['course_code']; ?></td>
                            <td><?php echo $course['course_name']; ?></td>
                            <td ></td>
                            <td align="center">
                                <div class="form-check">
                                    <input type="checkbox" name="course[]" value="<?php echo $course['id']; ?>" class="form-check-input" id="exampleCheck1" align="center">
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                
            </table>
            <button type="submit" class="btn btn-primary"> <i>UNCONFIRM</i> </div>
    </div>
</div>
