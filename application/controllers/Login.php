<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$user =  $this->session->userdata('user');

		if( !empty($user) )
			redirect('index','refresh');
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->view('Multitenant/login');
	}
	public function login_user()
	{
		$user_login=array(
			'UserEmail'=>$this->input->post('user'),
			'UserPass'=>sha1($this->input->post('pwd'))
		);
		$data=$this->user_model->login_user($user_login['UserEmail'],$user_login['UserPass']);
		if($data){
			$this->session->set_userdata('user', $_POST['user']);
			redirect('Index');
		}
		else{
				$this->session->set_flashdata('error_msg', 'Invalid Username or Password. Please try again.');
				redirect("login");
		}
	}
}
