<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$user =  $this->session->userdata('user');

		if( !empty($user) )
			redirect('index','refresh');
    $this->load->model('user_model');
		}
		public function index()
		{
			$this->load->view('Multitenant/signup');
		}
    public function register_user()
    {
      $this->form_validation->set_rules('UserEmail','Email','required');
      $this->form_validation->set_rules('UserPass','Password','required');
      $this->form_validation->set_rules('confirmpassword','Confirm Password','matches[UserPass]');
      if($this->form_validation->run()===FALSE){
        $this->session->set_flashdata('error_msg', 'Everything is required');
        redirect('signup');
      }else{
        $user=array(
        'UserFirstName'=>$this->input->post('UserFirstName'),
        'UserMiddleName'=>$this->input->post('UserMiddleName'),
        'UserLastName'=>$this->input->post('UserLastName'),
        'UserEmail'=>$this->input->post('UserEmail'),
        'UserPass'=>sha1($this->input->post('UserPass')),
        );
        print_r($user);
    $email_check=$this->user_model->email_check($user['UserEmail']);
    if($email_check){
        $this->user_model->register_user($user);
        $this->session->set_flashdata('success_msg', 'Registered successfully, Dashboard under construction.');
        redirect('signup');
    }
    else{
        $this->session->set_flashdata('error_msg', 'Email already used, Please try again.');
        redirect('signup');
      }
    }
  }
}
