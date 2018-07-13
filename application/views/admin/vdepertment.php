
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
    <div class="row"><div class="col-sm-2"></div>
        <div class="col-sm-8">   
            <div class="card">
                <div class="card mb-3">
                    <div class="card-header small text-muted"> 
                        <h2><?php echo $title; ?></h2>
                    </div>
                    <div class="card-body"
                        <ul class="list-group">
                            <?php foreach ($depertments as $depertment){ ?>
                            <li class="list-group-item"><?php echo $depertment['dept_name']; ?>
                                
                            </li>
                            <?php } ?>
                        </ul> 
                    </div>
                </div>
            </div>
        </div><div class="col-sm-2"></div>
    </div>