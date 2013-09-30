<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class My_Controller extends CI_Controller {
	
	public function __construct()	{
		parent::__construct();
		//echo "Test";
		//echo "The current controller class is " . $this->router->class;
		//$this->check_isvalidated();		
	}
	
	
	// Error code
	private function check_isvalidated(){
		if(! $this->session->userdata('logged_in')){
			redirect('login');
		}
		
		// insert correct authentication codes
	}
	
}