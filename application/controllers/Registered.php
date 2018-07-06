<?php 
	class Registered extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('register_model');
		}
		public function index(){
			$data['title'] = 'Registered students';

			$data['registers'] = $this->register_model->get_regestered();
			
			$this->load->view('admin/header1');
			$this->load->view('admin/index', $data);
			$this->load->view('admin/footer');
		}

		public function details(){
			$data['title'] = 'Student details';

			$data['details'] = $this->register_model->get_details();

			$this->load->view('admin/header1');
			$this->load->view('admin/view', $data);
			$this->load->view('admin/footer');
		}

		public function homep(){
			$data['title'] = 'Add users';
			 
			$data['roles'] = $this->register_model->getRole();
	 		$this->load->library('form_validation');
			  $this->form_validation->set_rules('firstname', 'First Name', 'required');
			  $this->form_validation->set_rules('mname', 'Middle Name', 'required');
			  $this->form_validation->set_rules('lastname', 'Last Name', 'required');
	 		  $this->form_validation->set_rules('reg_no', 'User Name', 'required|callback_check_reg_no_exists');
	 		//   $this->form_validation->set_rules('password', 'Password', 'required');
	 		//   $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
			
			if($this->form_validation->run() ===FALSE){
				$this->load->view('admin/header1');
				$this->load->view('admin/homep', $data);
				$this->load->view('admin/footer');
			} else{
				#Encrept password
				// $enc_password = md5($this->input->post('BACATS@2018'));
				$data = array( 
				'firstname' => $this->input->post('firstname'),
				'mname' => $this->input->post('mname'),
				'lastname' => $this->input->post('lastname'),
				'reg_no' => $this->input->post('reg_no'),
				// 'password' => $this->input->post('password'),
				'role_id' => $this->input->post('role_id')				
			
			);
			
			//insert user
				$this->user_model->register($data);
			
				//set messege
				$this->session->set_flashdata('user_register', 'User successful registered');
				redirect('index.php/registered/homep');
			}	 	
		 }
		 
		 public function check_reg_no_exists($email){
			$this->form_validation->set_message('check_reg_no_exists', 'That registration no. already registered.');
			if($this->user_model->check_reg_no_exists($email)){
				return true;
			} else{
				return false; 
			}
		}

		public function student(){
			
				$data['title'] = 'Registered as Students ';

				$data['students'] = $this->register_model->get_student();

				$data['programes'] = $this->register_model->get_students();
				
				$this->load->view('admin/header1');
				$this->load->view('admin/student', $data);
				$this->load->view('admin/footer');
		}

		public function teacher(){
			
				$data['title'] = 'Registered as Instructer ';

				$data['teachers'] = $this->register_model->get_teachers();
				
				$this->load->view('admin/header1');
				$this->load->view('admin/teacher', $data);
				$this->load->view('admin/footer');
		}
	
	// public function addteacher(){
	// 	$data['title'] = 'Add teacher to database';

	// 			$this->load->library('form_validation');

	//  			$this->form_validation->set_rules('name', 'Name', 'required');
	//  			$this->form_validation->set_rules('reg_no', 'User Name', 'required');
	 		
			
	// 		if($this->form_validation->run() ===FALSE){
	// 			$this->load->view('admin/header1');
	// 			$this->load->view('admin/addteachers', $data);
	// 			$this->load->view('admin/footer');
	// 		} else{

	// 			#Encrept password
	// 			$enc_password = md5($this->input->post('password'));
	// 			$data = array(
	// 			'name' => $this->input->post('name'),
				
	// 			'reg_no' => $this->input->post('reg_no'),
	// 			'password' => $enc_password,
	// 			);

	// 		//insert user

	// 			$this->register_model->register_teacher($data);

	// 			$this->load->view('admin/header1');
	// 			$this->load->view('admin/view', $data);
	// 			$this->load->view('admin/footer');
	// 	}
	// }

	public function Collagies(){
				$data['title'] = 'Collagies registered';

				$data['Collagies'] = $this->register_model->get_collage();
			
				$this->load->view('admin/header1');
				$this->load->view('admin/Collage', $data);
				$this->load->view('admin/footer');

			}

	public function collage(){
		 //check login
          		// if(!$this->session->userdata('logged_in')){
          		//   redirect('index.php/registered/collage');
         		//  } 

				$data['title'] = 'Create collage';
				$data['collages'] = $this->register_model->get_collage();
				$this->load->library('form_validation');
				$this->form_validation->set_rules('collage_name', 'collage name', 'required');

				if($this->form_validation->run() ===FALSE){
					//$this->category_model->create_category();
					$data['Collagies'] = $this->register_model->get_collage();
					$this->load->view('admin/header1');
					$this->load->view('admin/Collage', $data);
					$this->load->view('admin/footer');
				}else{
					$this->register_model->create_collage();

					//set message
					  $this->session->set_flashdata('collage_added', 'Your collage has been added successful');
					redirect('index.php/registered/collage');
				}
			}
		//login
	 	public function login(){
	 		$data['title'] = 'Sign in';
	 		  $this->load->library('form_validation');

	 		
	 		$this->form_validation->set_rules('reg_no', 'User Name', 'required');
	 		$this->form_validation->set_rules('password', 'Password', 'required');
	 		
			
			if($this->form_validation->run() ===FALSE){
				#$this->load->view('users/login' $data);
				$this->load->view('users/login', $data);
				$this->load->view('admin/footer');
			} else{


					//Get reg_no
				$reg_no = $this->input->post('reg_no');
				//Get and encript the password
				$password = md5($this->input->post('password'));

				//login user
				$user_id = $this->user_model->login($reg_no, $password);

				if($user_id){
					//create session
					$user_data = array(
						 'user_id' => $user_id,
						 'reg_no' => $reg_no,
						 'logged_in' => true
					);

					$this->session->set_userdata($user_data);
						//set messege
						$this->session->set_flashdata('user_loggedin', 'You are now loged in view content');

						redirect('index.php/registered/homep');
				}else{
						//set messege
						$this->session->set_flashdata('login_failed', 'Invalid user login');

						redirect('index.php/users/failed');
				}		
			}	 	
	 	}
//create controller for adding deprtment 

	 	public function depertment(){
				$data['title'] = 'Depertment registered';

				$data['depertments'] = $this->register_model->get_dept();

				$this->load->view('admin/header1');
				$this->load->view('admin/vdepertment', $data);
				$this->load->view('admin/footer');

			}


	 	public function dept(){
		 //check login
          		// if(!$this->session->userdata('logged_in')){
          		//   redirect('index.php/registered/collage');
         		//  } 

				$data['title'] = 'Create deprtment';
				$data['collages'] = $this->register_model->getcollage();

				$this->load->library('form_validation');
				$this->form_validation->set_rules('dept_name', 'Depertment Name', 'required');
				$this->form_validation->set_rules('collage_id', 'Name', 'required');

				if($this->form_validation->run() ===FALSE){
					//$this->category_model->create_category();
					$data['depertments'] = $this->register_model->get_dept();
					$this->load->view('admin/header1');
					$this->load->view('admin/depertment', $data);
					$this->load->view('admin/footer');
				}else{
					$this->register_model->create_dept();

					//set message
					  $this->session->set_flashdata('dept_added', 'The depertment has been added successful');
					#redirect('index.php/registered/vdepertment');
					$this->load->view('admin/header1');
					$this->load->view('admin/depertment', $data);
					$this->load->view('admin/footer');
				}
			}

			//create controller for adding program 

	 	public function programe(){
				$data['title'] = 'Program registered';

				$data['programs'] = $this->register_model->get_program();

				$this->load->view('admin/header1');
				$this->load->view('admin/vprogram', $data);
				$this->load->view('admin/footer');

			}


	 	public function program(){
		 //check login
          		// if(!$this->session->userdata('logged_in')){
          		//   redirect('index.php/registered/program');
         		//  } 

				$data['title'] = 'Create Program';
				$data['departments'] = $this->register_model->getdepartment();

				$this->load->library('form_validation');
				$this->form_validation->set_rules('program_name', 'Program Name', 'required');
				$this->form_validation->set_rules('dept_id', 'Depertment name', 'required');

				if($this->form_validation->run() ===FALSE){
					//$this->category_model->create_category();
					$data['programs'] = $this->register_model->get_program();
					$this->load->view('admin/header1');
					$this->load->view('admin/program', $data);
					$this->load->view('admin/footer');
				}else{
					$this->register_model->create_program();

					// //set message
					  $this->session->set_flashdata('program_added', 'Your program has been created successful');
					// redirect('index.php/registered/program');
					$this->load->view('admin/header1');
					$this->load->view('admin/program', $data);
					$this->load->view('admin/footer');
				}
			}

				public function Courses(){
				$data['title'] = 'Course registered';

				$data['courses'] = $this->register_model->get_course();

				$this->load->view('admin/header1');
				$this->load->view('admin/vcourse', $data);
				$this->load->view('admin/footer');

			}


	 	public function course(){
		 
				$data['title'] = 'Create Course';
				$data['departments'] = $this->register_model->getdepartments();

				$this->load->library('form_validation');
				$this->form_validation->set_rules('course_name', 'Course name', 'required');
				$this->form_validation->set_rules('dept_id', 'Depertment name', 'required');
				$this->form_validation->set_rules('course_code', 'Course code', 'required');

				if($this->form_validation->run() ===FALSE){
					//$this->category_model->create_category();
					$data['courses'] = $this->register_model->get_course();
					$this->load->view('admin/header1');
					$this->load->view('admin/course', $data);
					$this->load->view('admin/footer');
				}else{
					$this->register_model->create_course();

					//set message
					 $this->session->set_flashdata('course_added', 'Your Course has been Added successful');
					//redirect('index.php/registered/Courses'); this shows the course registered  

					$this->load->view('admin/header1');
					$this->load->view('admin/course', $data);
					$this->load->view('admin/footer');
				}
			}

			//function to call attendances
		public function attendance(){
			$data['title'] = 'Students Attendences'; 

			$data['attend'] = $this->register_model->get_attendance();

			$this->load->view('admin/header1');
			$this->load->view('admin/attendance', $data);
			$this->load->view('admin/footer');
		}

		//function for enrolling fingerprint first
		// showing the registration number of the student to be enrolled and Name of the student
		//after successful enrolled will diplay the name of the student
		public function enrollfinger(){
			$data['title'] = 'Enroll FingerPrints';

			#$data['enrolls'] = $this->register_model->enroll_finger();
			$data['students'] = $this->register_model->get_student();


			$this->load->view('admin/header1');
			$this->load->view('admin/fingerscan', $data);
			$this->load->view('admin/footer');
		}
}