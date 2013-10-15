<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verify_login_ctrl extends MY_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('login_dao','',TRUE);
	}
	
	function index(){
		//This method will have the credentials validation
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
		$username = $this->input->post('username');
		if($username !=null){
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		}
		
		if($this->form_validation->run() == FALSE){
			//Field validation failed.  User redirected to login page
			$this->load->view('login');	
		}else{
			redirect('home_ctrl', 'refresh');
		}
	}
	
	function check_database($password){
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');
		//query the database
		$result = $this->login_dao->login($username, $password);
		if($result){
			$result_name = $this->login_dao->get_name($username);
			//$result_name1 = $result_name[0];
			//$sess_array = array('username' =>$username, 'family_name'=>$result_name1->FamilyName, 'given_name'=>$result_name1->GivenName, 'role_name'=>$result_name1->RoleName);		
			$sess_array = array('username' =>$username, 'family_name'=>$result_name[0], 'given_name'=>$result_name[1], 'role_name'=>$result_name[2], 'no'=>$result_name[3]);
			$this->session->set_userdata("logged_in", $sess_array);
			return TRUE;
		}else{
				$this->form_validation->set_message('check_database', '<font color=red><b>Invalid username or password!</b></font>');
			return FALSE;
		}
	}
}

?>