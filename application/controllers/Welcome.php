<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function adminRegister(){
		$this -> load -> model('queries');
		$roles = $this -> queries -> getRoles();
		$this -> load -> view('register' , ['roles' => $roles]);
	}

	public function adminSignup(){
		echo 'Singup';
		// $this -> form_vslidation -> set_rules('username' , 'Username' , 'Required');
		// $this -> form_vslidation -> set_rules('email' , 'Email' , 'Required');
		// $this -> form_vslidation -> set_rules('gender' , 'Gender' , 'Required');
		// $this -> form_vslidation -> set_rules('role_id' , 'Role' , 'Required');
		// $this -> form_vslidation -> set_rules('password' , 'Password' , 'Required');
		// $this -> form_vslidation -> set_rules('confpwd' , 'Password Again' , 'Required');
		// $this -> form_validation -> set_error_delimiters('<div class= "text-danger" >' , '</div>');

		// if($this -> form_validation -> run()) {
		// 	echo 'Validation passed';
		// }
		// else{
		// 	echo validation_errors();
		// }
	}
}
