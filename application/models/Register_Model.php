<?php 
	class Register_model extends CI_Model{

		public function __Construct(){
			$this->load->database();
		}

		public function get_regestered(){ 
			
			$this->db->order_by('id');
			$query = $this->db->get('users');
			return $query->result_array();
		}
		public function register($data){
			return $this->db->insert('users', $data);
		}

		// public function get_students(){
			
		// 	$this->db->select('reg_no, CONCAT(firstname , ' .', mname , ' .', lastname) as name', 'program_name');
		// 	$this->db->from('users', 'program', 'student');
		// 	$this->db->join('student', 'student.user_id= users.id', 'student.program_id = program.id ', 'inner');
		// 	$this->db->where('role_id = 2');
		// 	$query = $this->db->get();
		// 	return $query->result_array();
		// }
		public function get_teachers(){
			
			$this->db->select('reg_no,id, CONCAT(firstname , ' . ', mname , ' . ', lastname) as name', 'program_name');
			$this->db->from('users');
			#$this->db->join('student', 'student.user_id= users.id', 'student.program_id = program.id ', 'inner');
			$this->db->where('role_id = 1');
			$query = $this->db->get();
			return $query->result_array();
		}
		
		public function getRole() {
			$query = $this->db->get('role');
			return $query->result_array();
		}
		public function get_details(){
			
			$this->db->select('*');
			$this->db->from('student');
			$query = $this->db->get('student');
			return $query->result_array();
		}
 

		//function for collage in model		
 		public function get_collage(){
			// $this->db->order_by('collage_name');
			$query = $this->db->get('collage');
			return $query->result_array();
		}

		public function create_collage(){
 			$data = array(
 				'collage_name' => $this->input->post('collage_name')
 				);
 			return $this->db->insert('collage', $data);
 		}


 		//function for depertment in model

 		public function get_dept(){
			$this->db->order_by('dept_name');
			$query = $this->db->get('department');
			return $query->result_array();
		}

		public function getcollage() {
			$query = $this->db->get('collage');
			return $query->result_array();
		}
		public function create_dept(){
 			$data = array(
 				'collage_id' => $this->input->post('collage_id'),
 				'dept_name' => $this->input->post('dept_name')
 				);
 			return $this->db->insert('department', $data);
		 }
		 

 		//function for program in model
 		public function get_program(){
			$this->db->order_by('program_name');
			$query = $this->db->get('program');
			return $query->result_array();
		}

		public function getdepartment() {
			$query = $this->db->get('department');
			return $query->result_array();
		}

		public function create_program(){
 			$data = array(
 				'dept_id' => $this->input->post('dept_id'),
 				'program_name' => $this->input->post('program_name')
 				);
 			return $this->db->insert('program', $data);
 		}

 		//function for course in model

 		public function get_course(){
			
		
			$this->db->select('course_code, course_name, CONCAT(firstname, mname, lastname) as byname');
			$this->db->from('course_view');
			$this->db->join('users', 'users.id= course_view.teacher_id', 'inner');
						
			$this->db->order_by('course_code');
			$query = $this->db->get();
			return $query->result_array();
		}

		//function to get course for the reacter to enroll course
		public function reg_course(){
			$this->db->select('*');
			$this->db->from('course');

			$this->db->order_by('course_code');
			$query = $this->db->get();
			return $query->result_array();
		}

		//course byteacher
		public function course_teach(){
		
			$this->db->query("SELECT course_name, course_code,
			 CONCAT(firstname, mname, lastname) as byname 
			FROM course_view inner JOIN users WHERE users.id = course_view.id");
		} 

		public function getdepartments() {
			$query = $this->db->get('department');
			return $query->result_array();
		}

		public function create_course(){
 			$data = array(
 				'course_code' => $this->input->post('course_code'),
 				'course_name' => $this->input->post('course_name'),
 				'dept_id' => $this->input->post('dept_id')
 				);
 			return $this->db->insert('course', $data);
		 }

		//getting attendances 
		public function get_attendance(){
			$this->db->select('*');
			$this->db->from('attendance');
			$this->db->where('id=2'); 
		}

		//trail
		public function get_student(){
			$this->db->select('CONCAT(user_view.firstname, '.',user_view.mname,'.', user_view.lastname) as name, user_view.reg_no, program.program_name');
			$this->db->FROM ('user_view');
			$this->db-> join ('program','user_view.program_id = program.id', 'inner');
			#$this->db->where('user_view.program_id = program.id');
			
			// $this->db->select('reg_no, CONCAT(firstname , ' .', mname , ' .', lastname) as name', 'program_name');
			// $this->db->from('users');
			// #$this->db->join('student', 'student.user_id= users.id', 'student.program_id = program.id ', 'inner');
			// $this->db->where('role_id = 2');
			$query = $this->db->get();
			return $query->result_array();
		}

		public function get_students(){
			
			$this->db->select('program_name');
			$this->db->from('program');
			#$this->db->join('student', 'student.program_id = program.id ','student.program_id = student.user_id', 'inner');
			#$this->db->where('student.program_id = student.user_id');
			$query = $this->db->get();
			return $query->result_array();
		}

		//function model to enroll finger prints in the database
		public function enroll_finger(){
			$data = array(
				'reg_no' =>$this->input->post('id'),
				'number' =>$this->input->post('number')
			);
			return $this->db->insert('student', $data);
		}
	}