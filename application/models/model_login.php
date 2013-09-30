<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_login extends CI_Model{
	public function login_user(){
		//load phpass libary, have to pass in an array
		$this->load->library('passwordhash', array('iteration_count_log2' => 8, 'portable_hashes' => FALSE ));
		
		//grab email and password from global post array
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		
		//password hashing
		$hasher = new PasswordHash(8, false);
		$hash = $hasher->HashPassword($password);
		
		//SQL statements for future use?
// 		$sql = "SELECT user_id, firstname, lastname, email, password, activated FROM users where email = ($email)' LIMIT 1";
// 		$result = $this->db->query($sql);
// 		$row=$result->row();
		
// 		if($result->num_rows()===1){
// 			if($row->activated){
//SHA encryption probably no longer required
// 				if($row->password = sha1($this->config->item('salt').$password)){
					
// 				}
// 			}
// 		}
		
		//these values are hardcoded -> need to change 
		if($email=='admin'){
			if($password=='password'){
				if ($hasher->CheckPassword($password, $hash)){
					$session_data = array(
							//needs to be modified for SQL
							'user_id'=>"admin",
							'firstname'=>"Admin",
							'lastname'=>"User",
							'email'=>"racheltan"
					);
					$this->set_session($session_data);
				}
				return 'logged_in';
			}else{
				return 'incorrect_password';
			}
		}else{
			return 'email_not_found';
		}


	}
	private function set_session($session_data){
		$sess_data = array(
				
						'user_id'=>"admin",
						'firstname'=>"Admin",
						'lastname'=>"User",
						'email'=>"racheltan",
						'validated'=>true
		);
		$this->session->set_userdata('logged_in',$sess_data);
	}
}
?>
