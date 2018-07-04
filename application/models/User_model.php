<?php
	class User_model extends CI_Model{

		public function register($data){
			return $this->db->insert('users', $data);
		}

		

		//login user
		public function login($reg_no, $password){

			//validate
			$this->db->where('reg_no', $reg_no);
			$this->db->where('password', $password);

			$return = $this->db->get('users');

			if($return->num_rows() ==1){
				return $return->row(0)->id;

			} else {
				return false;
			}
		}

		//check the reg_no exist
		public function check_reg_no_exists($reg_no){


			$query = $this->db->get_where('users', array('reg_no'=> $reg_no));

			if(empty($query->row_array())){
				
				return true;
			} else{
				false;
			} 
		}

		//check the email exist
		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('users'=> $email));
			if(empty($query->row_array())){
				return true;
			} else{
				false;
			} 
		}

//New functions
public function chekiyupo($reg_no, $password){
	$this->db->where('reg_no',$reg_no);
	$this->db->where('password',$password);
	return $this->db->get('users')->num_rows();

}

public function getmyinfo($reg_no){
	$this->db->where('reg_no', $reg_no);
	return $this->db->get('users')->result();
}


	}