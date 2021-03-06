<?php 
	class Teacher extends CI_Controller{
		
		public  function __construct()
		{
			parent::__construct();
			$this->load->model('teacher_model');
			$this->load->library('session');
		}
		public function index(){
			
		}

		public function homep(){
			$data['title'] = 'Registered students';

			$data['registers'] = $this->register_model->get_regestered();
			
			$this->load->view('teacher/header2');
			 $this->load->view('admin/index', $data); //>>it will be changed/removed
			$this->load->view('teacher/footer');
		}

		//function tocheck if the user arleady exixt
		// public function check_profile(){

		// 	$checkeamail;
		// 	$checkeamail = $this->register_model->email_exist($email);
		// 	if ($checkeamail == 1){
		// 		return view_profile();
		// }
		// 	else {
		// 		return profile();
		// 	}
		// }

		//
		public function profile(){
			$data['title'] = 'Update Profile';

			 $data['Depertment'] = $this->register_model->get_dept();
			$this->load->library('form_validation');

	 		$this->form_validation->set_rules('gender', 'Gender', 'required');
	 		$this->form_validation->set_rules('dob', 'Date of Birth', 'required');
	 		$this->form_validation->set_rules('email', 'email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('phoneno', 'Phone number', 'required');
			$this->form_validation->set_rules('office_no', 'Office number', 'required');
	 		$this->form_validation->set_rules('dept_id', 'Depertment', 'required');
			
			if($this->form_validation->run() ===FALSE){
				$this->load->view('teacher/header2');
				$this->load->view('teacher/profile', $data);
				$this->load->view('teacher/footer');
			} else{

				
				$data = array(
				'gender' => $this->input->post('gender'),
				'dob' => $this->input->post('dob'),
				'email' => $this->input->post('email'),
				'phoneno' => $this->input->post('phoneno'),
				'office_no' => $this->input->post('office_no'),
				'dept_id' => $this->input->post('dept_id')
			);

			//insert user

			if($this->session->userdata('user_id')===NULL){
				redirect('index.php/users/login');
			}else{
				$this->teacher_model->register($data);
				$this->session->set_flashdata('teacher_profile', 'Your profile has been updated');
				
				redirect('index.php/Teacher/view_profile');
			}
				// $this->teacher_model->register($data);

				// //set messege
				// $this->session->set_flashdata('teacher_register', 'Your profile has been updated');

				// redirect('index.php/Teacher/profile');
			}	 	
		 }
		 public function check_email_exists(){
			if($this->teacher_model->check_email_exists($email, $user_id)){
				//return true;
				redirect('index.php/Teacher/view_profile');

			} else{
				//return false; 
				redirect('index.php/Teacher/profile');

			}
		}
		 
		 //function to view profile
		public function view_profile(){
			$data['title'] = 'My Profile';
			$data['profile'] = $this->teacher_model->get_profile();

			$this->load->view('teacher/header2');
			$this->load->view('teacher/vprofile', $data);
			$this->load->view('teacher/footer');
		}

		//function to update profile
		public function update(){
			$data['title'] = 'Update your profile';
			$data['profile'] = $this->teacher_model->get_profile();
			$data['Depertment'] = $this->register_model->get_dept();


			$this->load->view('teacher/header2');
			$this->load->view('teacher/editprofile', $data);
			$this->load->view('teacher/footer');
		}
	 
		 #teacher course registration
		public function course(){
			$data['title'] = 'Register Course You Instruct';
			$data['Courses'] = $this->register_model->reg_course();

			$this->load->view('teacher/header2');
			$this->load->view('teacher/course', $data);
			$this->load->view('teacher/footer');
		}
		
		public function submitcourse(){

			$this->load->library('form_validation');
			$data['title'] = 'Register Course You Instruct';
			
			$data['Courses'] = $this->register_model->get_course();
			
			$this->form_validation->set_rules('course_id', 'Course name', 'required');

			if($this->form_validation->run() ===FALSE){
				$this->load->view('teacher/header2');
				$this->load->view('teacher/course', $data);
				$this->load->view('teacher/footer');
			}else{
				$this->teacher_model->create_course();

				$this->session->set_flashdata('course_register', 'Your course has been registered successful');

				#redirect('index.php/teacher/student');
				$this->load->view('teacher/header2');
				$this->load->view('teacher/course', $data);
				$this->load->view('teacher/footer');
			}
		}
		

		//view student enrolled the course
		public function student(){
			$data['title'] = 'Enrolled Student';

			$data['students'] = $this->teacher_model->studentcourse();
						
			$this->load->view('teacher/header2');
			$this->load->view('teacher/student', $data);
			$this->load->view('teacher/footer');
		}

		//function to view the attendance of individual student
		public function attend(){

			$data['title'] = 'Student prifile';
			
			$reg_no = $_GET['reg_no'];
			
			$data['profile'] = $this->teacher_model->student_profile($reg_no);

			$this->load->view('teacher/header2');
			$this->load->view('teacher/mmoja', $data);
			$this->load->view('teacher/footer');


		}


		//Attendance function  
		public function attendance(){
		   $data['title'] = 'Attendance Table';


		   $data['attendances'] = $this->teacher_model->attendance();

			$this->load->view('teacher/header2');
		    $this->load->view('teacher/attendance', $data);
		    $this->load->view('teacher/footer');
		}

		public function dayattandance(){
			$data['title'] = 'Attendance Table';


		   $data['day_attendance'] = $this->teacher_model->day_attendance();

			$this->load->view('teacher/header2');
		   $this->load->view('teacher/dayattendance', $data);
		   $this->load->view('teacher/footer');
		}

		
	}
	