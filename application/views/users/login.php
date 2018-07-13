
<?php echo form_open('index.php/users/login'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>BACATS</title>
       
        
        <link href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template-->
        <link href="<?=base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <link href="<?=base_url();?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="<?=base_url();?>assets/css/sb-admin.css" rel="stylesheet">
        <link href="<?=base_url();?>assets/css/main.css" rel="stylesheet">
    </head>
  <body>
      <div class="row">
        
        <div class="card mesha">
          <div class="card-header text-center">Enter Your Creadentials to login</div>
            <div class="card-title text-center"><h4 class="alert alert-danger"><?php echo $title; ?> </h4></div>
              <div class="card-body">
              <div class="form-group">
                  <?php if($this->session->flashdata('login_fail')):  ?>    
                        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_fail'). '</p>'; ?>
                    <?php endif; ?>
              </div>
              <div class="form-group">
              <center><?php echo validation_errors(); ?></center>
                </div>
              
                <div class="form-group">
                
                    <label>User name</label>
                  <input type="text" class="form-control" name="reg_no" placeholder="User name" required>
                </div>
                
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember Password</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit">login</button> 
                
              </div>
          </div>
        </div>
    </div>
  </body>
</html>
<?php echo form_close(); ?>

