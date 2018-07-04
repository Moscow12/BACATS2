
<?php echo validation_errors(); ?>

<?php echo form_open('index.php/users/login'); ?>


  <div class="container">
    <div id="header" >
      <h3 align="center" style="margin: 5px 0 5px 0;">Class Attendance Tracking System</h3>
    </div>
    <hr>
    <div class="card card-login mx-auto mt-5">
      <h1 class="text-center"><?php echo $title; ?></h1>
      <div class="card-header" align="center">Login</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <label>User name</label>
            <input type="text" class="form-control" name="username" placeholder="User name" required outofocus>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password" required autofocus>
        </div>

          <!--<div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>-->
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div><button class="btn btn-primary" type="submit">login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div><br/><br/><hr>
</div>
  <!-- Bootstrap core JavaScript--
  <script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript--
  <script src="<?=base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>-->
 