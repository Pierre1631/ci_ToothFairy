<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$user =  $this->session->userdata('user');

		if( !empty($user) )
			redirect('index','refresh');
		$this->load->model('tenant_model');
	}

	public function index()
	{
		$this->load->view('Multitenant/login');
	}
	public function login_user()
	{
		$tenant_login=array(
			'TenantEmail'=>$this->input->post('user'),
			'TenantPass'=>$this->input->post('pwd')
		);
		$data=$this->tenant_model->getTenantProfile($tenant_login['TenantEmail'],$tenant_login['TenantPass']);
		if($data){
			$this->session->set_userdata('user', $_POST['user']);
			print_r($_SESSION);
			redirect('TenantDash_Dashboard');
		}
		else{
			$this->session->set_flashdata('error_msg', 'Invalid Username or Password. Please try again.');
			redirect("login");
		}
	}
}
