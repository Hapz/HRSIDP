<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();

class Home_ctrl extends MY_Controller{
	
	function _construct(){
		parent::_construct();
		$this->load->library('session');
	}
		
	function index(){
		if($this->session->userdata("logged_in")){
			$session_data = $this->session->userdata('logged_in');
			$data['username']=$session_data['username'];
			$data['family_name']=$session_data['family_name'];
			$data['given_name']=$session_data['given_name'];
			$data['role_name']= $session_data['role_name'];
			//Temporary hard code
			//$data['role']="Administrator";
			$this->load->view('home', $data);
		}else{
			//If no session, redirect to login page
			redirect('login_ctrl', 'refresh');
		}
    }
	
	function logout(){
	
	$this->session->unset_userdata('logged_in');
	session_destroy();
	redirect('home_ctrl','refresh');
	}
}

?>