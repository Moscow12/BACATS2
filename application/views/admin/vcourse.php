
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
    <div class="row">  <div class="col-sm-1"></div>     
        <div class="col-sm-10">
            <div class="card">
                <div class="card-header" align="center">
                    <h3><?php echo $title; ?></h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <tr>
                            <th>Course Code</th>
                            <th>Course name</th>
                            <th>Instructed By</th>
                            <th><i class="fa fa-eye"></i><span>Attandance</span></th>
                        </tr>
                        
                            <?php foreach ($courses as $course_view){ ?>
                                <tr>
                                    <td><?php echo $course_view['course_code']; ?></td>
                                    <td><?php echo $course_view['course_name']; ?></td>
                                    <td ><?php echo $course_view['byname']?></td>
                                    <td><button class="btn btn-primary "> <i class = "fa fa-eye" title="View Attendance"></i> View Attendance</button></td>
                                </tr>
                            <?php } ?>
                        
                    </table>
                </div>
            </div>
        </div><div class="col-sm-1"></div>  
    </div> 