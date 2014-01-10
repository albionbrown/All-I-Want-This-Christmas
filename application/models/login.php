<?php 
	class Login extends CI_Model{

		function checkdb($email, $password){

			$this->load->database();
			
			$query = $this->db->query("SELECT * FROM users WHERE email='$email' and password='$password'");

			if ($query->num_rows() == 1)
			{
			  return TRUE;
			}

		}

		function check_email($email){
			$char = "@";
			$check = strpos($email, $char);
			if($check){
				return TRUE;
			}else{
				return FALSE;
			}
		}

	}
