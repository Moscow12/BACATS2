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
			
			$this->db->select('reg_no,id, firstname , mname , lastname ', 'program_name');
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
			
		
			$this->db->select('course_code, course_name, firstname, mname, lastname');
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
		
			$this->db->query("SELECT course_name, course_code, firstname, mname, lastname
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
		public function get_attendance($course_id){

				$this->db->select('course_attendance.firstname, course_attendance.mname, course_attendance.lastname,
				course_attendance.reg_no as reg, COUNT(course_attendance.attendance_date) as totals, program.program_name as programs');
			$this->db->from('course_attendance');
			$this->db->join('program', 'course_attendance.program_id = program.id', 'inner');
			$this->db->where('course_attendance.course_id', $course_id);
			$this->db->group_by('reg');

			$query = $this->db->get();
			return $query->result_array();
		}
		public function ids($course_code){

			$this->db->select('id, teacher_id, course_name');
			$this->db->from('course_view');
			$this->db->where('course_view.course_code', $course_code);

			$query = $this->db->get();
			return $query->result_array();
		}

		//getting an id of the student clicked
		public function prof($reg_no){

			$this->db->select('id');
			$this->db->from('user_view');
			$this->db->where('user_view.reg_no', $reg_no);

			$query = $this->db->get();
			return $query->result_array();
		}

		//trail
		public function get_student(){
			$this->db->select('user_view.firstname, user_view.mname, user_view.lastname, user_view.reg_no, program.program_name');
			$this->db->FROM ('user_view');
			$this->db-> join ('program','user_view.program_id = program.id', 'inner');
			
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


		// function to view the profile of the individual student
		public function student_profile($id){
            $this->db->select('reg_no, firstname, mname, lastname, email, phoneno, location, dob, gender, d.program_name' );
            $this->db->from( 'sprofile_view s');
            $this->db->join('program d', 'd.id = s.program_id', 'inner');
            $this->db->where('s.reg_no', $id);
            
            $query = $this->db->get();
            return $query->result_array();
		}

		public function teacher_profile($id){

			//$this->db->select('reg_no, CONCAT( firstname, '.', mname, '.',lastname) as name, email, phoneno, office_no, dob, gender, d.dept_name');
			$this->db->select('reg_no, firstname, mname, lastname, email, phoneno, office_no, dob, gender, d.dept_name');
			$this->db->from( 'tprofile_view p');
			$this->db->join('department d', 'd.id = p.dept_id', 'inner');
			$this->db->where('p.id', $id);
			
			$query = $this->db->get();
			return $query->result_array();
		}
	}