<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<title>SB Admin - Start Bootstrap Template</title>-->
  <!-- Bootstrap core CSS-->
  <link href="<?=base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?=base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?=base_url();?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?=base_url();?>assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-light " id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-warning bg-light  fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">BACATS</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="homep">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Admin Dashboard</span>
          </a>
        </li>
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="addstudent">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Add Student </span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="addteacher">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Add Teacher</span>
          </a>
        </li> -->
        <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Add course</span>
          </a>
        </li>
        
        <!--
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Components</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Navbar</a>
            </li>
            <li>
              <a href="cards.html">Cards</a>
            </li>
          </ul>
        </li>-->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseduser" data-parent="#exampleAccordion">
                <i class="fa fa-fw fa-users"></i>
                <span class="nav-link-text">Users</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseduser">
                <li>
                  <a href="#" data-toggle="modal" data-target="#addusers" >
                    <i class="fa fa-fw fa-plus"></i>
                    <span class="nav-link-text">Add users</span>
                  </a>
                </li>
                <li>
                 
                  <a href="student">
                    <i class="fa fa-fw fa-eye"></i>
                    <span class="nav-link-text">Student registered</span>
                  </a>
                </li>
                <li>
                  <a href="teacher">
                    <i class="fa fa-fw fa-eye"></i>
                    <span class="nav-link-text">Teacher registered</span>
                  </a>
                </li>
            </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Collage">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsedcollage" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-check"></i>
            <span class="nav-link-text">Collage</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsedcollage">
            <li>
              <a href="collage">
                  <i class="fa fa-fw fa-plus"></i>
                  <span class="nav-link-text">  Add Collage</span>
              </a>
            </li>
            <li>
              <a href="Collagies">
                  <i class="fa fa-fw fa-eye"></i>
                  <span class="nav-link-text">Collage</span>
              </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Depertament">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseddept" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-check"></i>
            <span class="nav-link-text">Depertament</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseddept">
            <li>
              <a href="dept">
                  <i class="fa fa-fw fa-plus"></i>
                  <span class="nav-link-text">  Add Depertament</span>
              </a>
            </li>
            <li>
              <a href="depertment">
                  <i class="fa fa-fw fa-eye"></i>
                  <span class="nav-link-text">Depertament</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Program">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsedprogram" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-check"></i>
            <span class="nav-link-text">Program</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsedprogram">
            <li>
              <a href="program">
                  <i class="fa fa-fw fa-plus"></i>
                  <span class="nav-link-text">  Add program</span>
              </a>
            </li>
            <li>
              <a href="programe">
                  <i class="fa fa-fw fa-eye"></i>
                  <span class="nav-link-text">Program</span>
              </a>
            </li>
          </ul>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Course">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapsedcourse" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-check"></i>
            <span class="nav-link-text">Course</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapsedcourse">
            <li>
              <a href="course" >
                  <i class="fa fa-fw fa-plus"></i>
                  <span class="nav-link-text">  Add Course</span>
              </a>
            </li>
            <li>
              <a href="Courses">
                  <i class="fa fa-fw fa-eye"></i>
                  <span class="nav-link-text">Course</span>
              </a>
            </li>
          </ul>
        </li>
        
        <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Attendance">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Attendance</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="#" data-toggle="modal" data-target="#addcodllage" >Collage</a>
            </li>
            <li>
              <a href="dept">Depertment</a>
            </li>
            <li>
              <a href="program">Program</a>
            </li>
            <li>
              <a href="course">Course</a>
            </li>
           
          </ul>
        </li> -->
       
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link other website</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-user-secret"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">Profile</h6>
         
            <div class="dropdown-divider"></div>
            <div align="center"><?php if($this->session->userdata('logged_in')) : ?>
            <?php echo $this->session->userdata('reg_no');?>
            <?php endif; ?>
          </div>
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" type="btn btn-info" href="profile">Update profile</a>
          </div>
        </li>
       
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="logout">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>



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
            <a class="btn btn-primary" href="<?=base_url('index.php/users/logout')?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <?php if($this->session->flashdata('login_failed')):  ?>    
                <?php echo '<p class="class="alert alert-danger">'.$this->session->flashdata('login_failed'). '</p>'; ?>
            <?php endif; ?>
             <?php if($this->session->flashdata('user_loggedin')):  ?>    
                <?php echo '<p class="class="alert alert-success">'.$this->session->flashdata('user_loggedin'). '</p>'; ?>
            <?php endif; ?>
             <?php if($this->session->flashdata('user_loggedout')):  ?>    
                <?php echo '<p class="class="alert alert-info">'.$this->session->flashdata('user_loggedout'). '</p>'; ?>
            <?php endif; ?>