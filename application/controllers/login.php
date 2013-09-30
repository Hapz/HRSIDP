<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('model_login');
	}
	public function index($msg = NULL)
	{
		$this->load->helper('form');
		 $data['msg'] = $msg;
        $this->load->view('view_login', $data);
	}
	
	public function login_user(){
		$this->load->library('form_validation');
		
		//can find out incorrect logins without querying the database
		$this->form_validation->set_rules('email', 'email', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[3]|max_length[20]');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('view_login');
		}else{
 			$result =$this->model_login->login_user();
			
				switch($result){
					//successful authtenication
					case 'logged_in':
					redirect('home');
					break;
						
				//incorrect password
				case 'incorrect_password':
					$msg = '<font color=red>Invalid Password.</font><br />';
		            $this->index($msg);
					break;
							
				//inactive user account
// 				case 'not_activated':
// 					$this->load->view('view_login');
// 					break;
					
				//no such user account
				case 'email_not_found':
				$msg = '<font color=red>No such email exists.</font><br />';
		            $this->index($msg);
					break;
						
			}
		}
	}
}

/* End of file login.php */