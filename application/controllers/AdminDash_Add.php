<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDash_Add extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$user =  $this->session->userdata('user');

		if( empty($user) )
			redirect('login','refresh');
			$this->load->model('user_model');
	}

	public function index()
	{

    $this->load->view('Multitenancy/AdminDash/add');
  }
	public function insert_users()
	{
		$this->form_validation->set_rules('UserFirstName','UserFirstName','required');
		$this->form_validation->set_rules('UserLastName','UserLastName','required');
		$this->form_validation->set_rules('UserEmail','Email','required');
		$this->form_validation->set_rules('UserPass','Password','required|min_length[6]');
		if($this->form_validation->run()===FALSE){
			$this->session->set_flashdata('error_msg', 'Your Password is too weak!');
			redirect('AdminDash_Add');
		}
		$this->form_validation->set_rules('confirmpassword','Confirm Password','matches[UserPass]');
		if($this->form_validation->run()===FALSE){
			$this->session->set_flashdata('error_msg', 'Password and Confirm Password do not match');
			redirect('AdminDash_Add');
		}else{
			$user=array(
			'UserFirstName'=>$this->input->post('UserFirstName'),
			'UserLastName'=>$this->input->post('UserLastName'),
			'UserEmail'=>$this->input->post('UserEmail'),
			'UserPass'=>sha1($this->input->post('UserPass')),
			);
			print_r($user);
			$email_check=$this->user_model->email_check($user['UserEmail']);
			if($email_check){
			$this->user_model->insert_user($user);
			$this->session->set_flashdata('success_msg', 'Registered successfully, Dashboard under construction.');
			redirect('AdminDash_Users');
	}
	else{
			$this->session->set_flashdata('error_msg', 'Email already used, Please try again.');
			redirect('AdminDash_Add');
		}
	}
}
}
