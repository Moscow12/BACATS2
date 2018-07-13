<?php 
	class Teacher_model extends CI_Model{
		public function __Construct(){
			$this->load->database();
	}

	public function get_regestered(){
			
		$this->db->select('role_name');
		$this->db->from('role');
		$this->db->join('users', 'users.role_id = role.id');
		$this->db->where('role_name=student');
		$query = $this->db->get('users');
		return $query->result_array();
		}
	public function register($data){
			//User data array
			$data = array(
				
				'gender' => $this->input->post('gender'),
				'dob' => $this->input->post('dob'),
				'email' => $this->input->post('email'),
				'phoneno' => $this->input->post('phoneno'),
				'office_no' => $this->input->post('office_no'),
				'user_id' =>$this->session->userdata('user_id'),
				
				'dept_id' => $this->input->post('dept_id')
				
			
			);
			
			return $this->db->insert('teacher', $data);
			
		}
	
#function should insert data to the table teacher course
	public function create_course(){
			$data = array(
				'course_id' => $this->input->post('course_id'),
				'teacher_id' => $this->session->userdata('user_id')				
			);
			return $this->db->insert('teacher_course', $data);
	}

	public function studentcourse(){
		$this->db->select('reg_no, firstname, mname, lastname, p.program_name' );
		$this->db->from('user_view');
		$this->db->join('program p', 'p.id = user_view.program_id', 'inner');

		$query = $this->db->get();
		return $query->result_array();
	}
	public function get_profile(){

		$user = $this->session->userdata('user_id');		
		$this->db->select('reg_no, firstname,  mname, lastname, email, phoneno, office_no, dob, gender, d.dept_name');
		$this->db->from( 'tprofile_view p');
		$this->db->join('department d', 'd.id = p.dept_id', 'inner');
		$this->db->where('p.id', $user);
		
		$query = $this->db->get();
		return $query->result_array();
	}
 
	//modal attendance
	public function attendance(){
		 
		$this->db->select('course_attendance.firstname, course_attendance.mname, course_attendance.lastname,
		course_attendance.reg_no as reg, COUNT(course_attendance.attendance_date) as totals, program.program_name as programs');
		$this->db->from('course_attendance');
		$this->db->join('program', 'course_attendance.program_id = program.id', 'inner');
		$this->db->where('course_attendance.course_id = 3 ');
		$this->db->group_by('reg');

		$query = $this->db->get();
		return $query->result_array();
	}

	public function day_attendance(){
		$this->db->select('CONCAT(course_attendance.firstname, course_attendance.mname, course_attendance.lastname) as names, 
		course_attendance.reg_no as reg, course_attendance.attendance_date as et, program.program_name as pname');
		$this->db->from('course_attendance');
		$this->db->join('program', 'course_attendance.program_id = program.id', 'inner');
		$this->db->where('course_id = 9' );
		$this->db->where(' DATE(`attendance_date`) = CURDATE()');
		$this->db->group_by('names');

		
		
	}
	
	
	//function function to check if the user email exists
	public function email_exist($email){

		$user_id = $this->session->userdata('user_id');
		$this->db->where('email',$email); 
		$this->db->where('user_id', $user_id);
		return $this->db->get('teacher')->num_rows();

	}

	//function to featch for individual attendances
	public function individual_attend($id){
		$this->db->select('course_attendance.firstname, course_attendance.mname, course_attendance.lastname, course_attendance.id,
		course_attendance.reg_no as reg, COUNT(course_attendance.attendance_date) as totals, program.program_name as programs');
		$this->db->from('course_attendance');
		$this->db->join('program', 'course_attendance.program_id = program.id', 'inner');
		$this->db->where('course_attendance.reg_no', $id);

		$query = $this->db->get();
		if($query->num_rows() > 0) {
			$results = $query->result();
		}
		return $results;
	}
}