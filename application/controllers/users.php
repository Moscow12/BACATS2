<?php 
	 class Users extends CI_Controller {

		public function construct(){
			parent::__construct();
			$this->load->model("user_model");//Load model in my controller
		}

		public function index(){
			$data['title'] = 'Sign in';
			$this->load->view('users/login',$data);
			$this->load->view('templates/footer');

		}

	 	public function login(){
	 		$data['title'] = 'Sign in';
	 		$this->load->library('form_validation');

	 		
	 		$this->form_validation->set_rules('reg_no', 'User Name', 'required');
	 		$this->form_validation->set_rules('password', 'Password', 'required');
	 		
			
			if($this->form_validation->run() ===FALSE){
				$this->load->view('users/login',$data);
				$this->load->view('templates/footer');
			} else{


					//Get reg_no
				$reg_no = $this->input->post('reg_no');
				//Get and encript the password
				$password = $this->input->post('password');

					//Query to check info from db
				$chekikamayupo = $this->user_model->chekiyupo($reg_no, $password);
				if($chekikamayupo == 1){
					$user_info = $this->user_model->getmyinfo($reg_no);

						foreach($user_info as $info){
							$myuser_id = $info->id;
							$myrole_id = $info->role_id;
								//create session
								$user_data = array(
									 'user_id' => $myuser_id,
									 'reg_no' => $reg_no,
									 'logged_in' => true
								);
						if($user_info){		
						$this->session->set_userdata($user_data);
						switch($myrole_id){

							case '1':
							redirect("index.php/Teacher/homep");
							break;

							case '2':
							redirect("index.php/Student/home");
							break;

							case '3':
							redirect("index.php/Registered/index");
							$this->session->set_flashdata('success_login', 'You are now logged in as admin');
							break;

							default:
							redirect("index.php/users");
							break;
						}
					}
							
					}
				}
				else{
					echo "Failed to login, Plz enter valid data";
				}
			}	 	
	 	}

	 	public function failed(){
				 $data['title'] = 'Sign in failed | try again';
				 
	 			$this->load->view('templates/header');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');	
	 	}
	 	//logout function
	 	public function logout(){
	 		//Unset user data
			 $this->session->sess_destroy();
			 redirect('index.php/users/index');


	 		$this->session->set_flashdata('user_loggedout', 'You are now loged out login again');

						redirect('index.php/users/login');
	 	}
	}