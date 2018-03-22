<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

  public function __construct(){
		parent::__construct();
		$user =  $this->session->userdata('user');

		if( !empty($user) )
			redirect('index','refresh');
    $this->load->model('tenant_model');
		}
		public function index()
		{
			$this->load->view('Multitenant/signup');
		}
    public function register_user()
    {

      $user=array(
        'tenant_email'=>$this->input->post('Email'),
        'tenant_pass'=>sha1($this->input->post('Pass')),
      );
        print_r($user);
        $email_check=$this->tenant_model->email_check($user['tenant_email']);
        if($email_check){
          $this->tenant_model->register_user($user);
          $this->session->set_flashdata('success_msg', 'Registered successfully.');
          redirect('signup');
        }
        else{
          $this->session->set_flashdata('error_msg', 'Email already used, Please try again.');
          redirect('signup');
        }
    }
}
