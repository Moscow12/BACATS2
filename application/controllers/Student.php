<?php 
class Student extends CI_Controller{
    public  function __construct()
    {
        parent::__construct();
        $this->load->model('student_model');
    }

    public function home(){
        $data['title'] = 'Read BACATS Terms';

        $data['rules'] = $this->student_model->content();
        $this->load->view('student/header');
        $this->load->view('student/home', $data);
        $this->load->view('student/footer');
    }

    public function profile(){
        $data['title'] = 'Update you profile';
        #$data['profiles'] = $this->student_model->set_stprofile();
        $data['Program'] = $this->register_model->get_program();
        

        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('phoneno', 'Phone number', 'required|numeric');
        $this->form_validation->set_rules('location', 'Location', 'required');
      
      if($this->form_validation->run() ===FALSE){
          $this->load->view('student/header');
          $this->load->view('student/stprofile', $data);
          $this->load->view('student/footer');
      } else{
          #Encrept password
          // $enc_password = md5($this->input->post('BACATS@2018'));
          $data = array(
            
            'gender' => $this->input->post('gender'), 
            'dob' => $this->input->post('dob'),
            'email' => $this->input->post('email'),
            'phoneno' => $this->input->post('phoneno'),
            'user_id' =>$this->session->userdata('user_id'),
            'location' => $this->input->post('location'),
            'program_id' => $this->input->post('program_id')
            
        
        );
      
      //insert user
         //insert user

			if($this->session->userdata('user_id')===NULL){
				redirect('index.php/users/login');
			}else{
				$this->student_model->set_stprofile($data);
				$this->session->set_flashdata('student_register', 'Your profile has been updated');
				
				redirect('index.php/Student/Myprofile');
			}
      }	 	
    }
    public function Myprofile(){
        $data['title'] = 'My Profile';
        $data['profile'] = $this->student_model->get_profile();

        $this->load->view('student/header');
        $this->load->view('student/stvprofile', $data);
        $this->load->view('student/footer');
    }
    

    // public function enroll(){

    //     $data['title'] = 'Enroll the Course';
    //     $data['courses'] = $this->register_model->get_course();

    //     $this->load->library('form_validation');


    //     $this->load->view('student/header');
    //     $this->load->view('student/regcourse', $data);
    //     $this->load->view('student/footer');

    // }
    public function enroll(){

        $data['title'] = 'Enroll the Course';
        $data['courses'] = $this->student_model->tought_by();


        $this->load->library('form_validation');


            $this->load->view('student/header');
            $this->load->view('student/regcourse', $data);
            $this->load->view('student/footer');
    

    }

   
    //function to view user logged in
    public function user_loggedin($page = 'student'){
        
        $data['view'] = $this->user_model->get_loggedin();

        $this->load->view('student/header', $data);
       # $this->load->view('student/'.$page, $data);
        $this->load->view('student/footer');
    }

    public function viewattendance(){
        $data['title'] = 'Attendances Record for all courses';
        
        $data['attended'] = $this->student_model->getattendance();

        $this->load->view('student/header');
        $this->load->view('student/attendance', $data);
        $this->load->view('student/footer');
    }

    public function one(){
        
        $this->student_model->two();

       

        redirect('index.php/teacher/viewcourse');
   
    }

    public function viewcourse(){

        $data['title'] = 'Confirmed course';

        $this->student_model->course_confirmed();

        $this->load->view('student/header');
        $this->load->view('student/unconfireg', $data);
        $this->load->view('student/footer');
    }

    
    

   
}