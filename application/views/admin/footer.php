
	<!--		<div class="footer"  align="center" >
    	Copyright @2018, Final year project BACATS 
  </div>
   <script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript--
  <script src="<?=base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>-->
 <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright @2018, Final year project BACATS </small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Logout Modal-->
<div class="modal fade" id="addusers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color:yellow; border-radius:7px">
            <h5 class="modal-title" id="exampleModalLabel"><span class="fa fa-plus"></span> Assign New user</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
          <form method="post" action="<?=base_url('index.php/registered/homep');?>">
          <!-- <?php #echo form_open('index.php/registered/homep'); ?> -->
          
                    
              <div class="card">
                <div class="card-body"><div class="card-header text-center"><?php #echo $title; ?></div>
                
                  <?php echo validation_errors(); ?>		
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" class="form-control" name="firstname" placeholder=" First Name">
                    </div>
                    <div class="form-group">
                      <label>Middle Name</label>
                      <input type="text" class="form-control" name="mname" placeholder="Middle name">
                    </div>
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                      <label>User name</label>
                      <input type="text" class="form-control" name="reg_no" placeholder="User name">
                    </div>
                    <div class="form-group">
                      <label>User Role</label>
                        <select name="role_id" class="form-control">
                          <?php foreach ($roles as $role){ ?>
                            <option value="<?php echo $role['id']; ?>"><?php echo $role['role_name']; ?> </option>
                          <?php }  ?>
                        </select>
                    </div>
          <div class="form-group col-md-12">
            <button class="btn btn-primary btn-block"  type="submit"><span class="fa fa-sign-in"></span> Submit</button>
          </div>
          <!--<div class="modal-footer">
            
            
          </div>-->
        </div>
      </div>
    </div>


<!-- Logout Modal-->
<!-- <div class="modal fade" id="addcollage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLael" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background-color:yellow; border-radius:7px">
            <h5 class="modal-title" id="exampleModalLabel"><span class="fa fa-plus"></span> Add collage</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
          <form method="post" action="<?=base_url('index.php/registered/collage');?>">
          <div class="form-group">
                            <label>Name of Collage</label>
                            <input type="text" class="form-control" name="collage_name" placeholder="Collage name" outofocus>
                        </div>
          
          </div>
          <div class="form-group col-md-12">
            <button class="btn btn-primary btn-block"  type="submit"><span class="fa fa-sign-in"></span> Submit</button>
          </div> -->
          <!--<div class="modal-footer">
            
            
          </div>-
        </div>
      </div>
    </div>-->

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?=base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?=base_url();?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?=base_url();?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?=base_url();?>assets/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?=base_url();?>assets/js/sb-admin-datatables.min.js"></script>
    <script src="<?=base_url();?>assets/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
