
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
<div class="mb-0 mt-4">    
  <div class="card-columns">
      <div class="card mb-3">
          <div class="card-header small text-muted"> 
              <h2><?php echo $title; ?></h2>
          </div>
           
          <ul class="list-group">
              <?php foreach ($depertments as $depertment){ ?>
              <li class="list-group-item"><?php echo $depertment['dept_name']; ?>
                 
              </li>
              <?php } ?>
          </ul> 
      </div>
    </div>
  </div>
</div>