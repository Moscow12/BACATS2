<?php 
	class Student_model extends CI_Model{

		public function __Construct(){
			$this->load->database();
        }
        
        // public function get_content($id = null){
        //     $this->db->select('*');
        //     $this->db->from('users');
        //     $this->db->join('role', "role.id = '2', ");
        //     $this->db->join('users', "users.reg_no = '2015-04-08524', ");
        //     $this->db->join('users', "users.password = 'BACATS@2018'");
        //     $query = $this->db->get();
        //     return $query->result_array();

        //     // if (!is_null($id)) $this->db->where('id', $id);
        //     // $this->db->order_by('id', 'desc');
        //     // return $this->db->get()->result();
       
            
        // }

        public function get_content($id = null){
            $this->db->select('*');
            $this->db->from('users, role');
            $this->db->where("'users.role_id' = role.id AND users.reg_no = '2015-04-00000' AND users.password = '00000000'");
            
            // return $this->db;
            $query = $this->db->get();
            return $query->result_array();

            // if (!is_null($id)) $this->db->where('id', $id);
            // $this->db->order_by('id', 'desc');
            // return $this->db->get()->result();
       
            
        }

        public function set_stprofile(){
            $data = array(
				
				'gender' => $this->input->post('gender'), 
				'dob' => $this->input->post('dob'),
				'email' => $this->input->post('email'),
				'phoneno' => $this->input->post('phoneno'),
                'location' => $this->input->post('location'),
                'program_id' => $this->input->post('program_id'),          
                'user_id' =>$this->session->userdata('user_id'),
                
			
			);
			
			return $this->db->insert('student', $data);
            
        }

        public function get_profile(){
            $user = $this->session->userdata('user_id');		
            $this->db->select('reg_no, CONCAT( firstname, '.', mname, '.', lastname) as name, email, phoneno, location, dob, gender, d.program_name' );
            $this->db->from( 'sprofile_view s');
            $this->db->join('program d', 'd.id = s.program_id', 'inner');
            $this->db->where('s.id', $user);
            
            $query = $this->db->get();
            return $query->result_array();
        }
        
        public function content(){
            
        }

        public function enrolls(){

            $this->db->select('*');
            $this->db->from('course');
            $this->db->join('student', 'course.id=student.course_id');
            $this->db->join('student_course', 'course');
            $this->db->where('student.user_id = course.student_id');

        }

       
        public function tought_by(){
            $this->db->select('CONCAT( users.firstname, users.mname, users.lastname) as Byname,
             course.course_name, course.course_code');
             $this->db->from('users');
             $this->db->join('teacher', 'users.id = teacher.user_id', 'inner');
             $this->db->join('teacher_course', 'teacher.id = teacher_course.teacher_id', 'inner');
             $this->db->join('course', 'teacher_course.course_id = course.id', 'inner');
             $this->db->where('role_id= 1');

             $query = $this->db->get();
            return $query->result_array();

        }


        public function two(){
            foreach($_POST['course'] as $selected){
                $selected;
            
                 $id = $this->session->userdata('user_id');
            $this->db->query("insert into student_course (student_id,course_id)
            values('$id','$selected')");   

            }

        }


        //here
        public function course_confirmed(){
            $this->db->select('course_name, course_code');
            
        }



        public function getattendance(){

        $this->db->select('attendance_date, course_id, student_id');
        $this->db->from('attendance');
        $this->db->join('course', 'attendance.course_id = course.id', 'inner');
        $this->db->join('student', 'attendance.student_id = student.id', 'inner');
        $this->db->where('course_id = course_code');

        #return $this->db-get('attendance')->result();

        }
}