<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class user extends CI_Controller {
	public function __construct() {
		parent:: __construct();
		$this->load->model('user_model');
	}
	public function index()	{
		$this->load->view('Tenant/tenant_header');
		$this->load->view('Tenant/TenantHomepage');
		$this->load->view('Tenant/tenant_footer');
	}
	public function register_user() {
        $this->form_validation->set_rules('UserFirstName','UFN','required');
        $this->form_validation->set_rules('UserMiddleName','UMN','required');
        $this->form_validation->set_rules('UserLastName','ULN','required');
        $this->form_validation->set_rules('UserEmail','Email','required');
        $this->form_validation->set_rules('UserPass','Password','required');
        $this->form_validation->set_rules('confirmpassword','Confirm Password','matches[UserPass]');
        if($this->form_validation->run()===FALSE){
            $this->load->view('Tenant/tenant_header');
			$this->load->view('Tenant/register_form');
			$this->load->view('Tenant/tenant_footer');
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
		  		redirect('user/register_view');
			}
			else{
		  		$this->session->set_flashdata('error_msg', 'Email already used, Please try again.');
		  		redirect('user/register_view');
			}
        }

	}
	public function login_user(){
  		$user_login=array(
	  		'UserEmail'=>$this->input->post('UserEmail'),
	  		'UserPass'=>sha1($this->input->post('UserPass'))
    	);
    	$data=$this->user_model->login_user($user_login['UserEmail'],$user_login['UserPass']);
  		if($data){
	        $this->session->set_userdata('UserID',$data['UserID']);
	        $this->session->set_userdata('UserFirstName',$data['UserFirstName']);
	        $this->session->set_userdata('UserMiddleName',$data['UserMiddleName']);
	        $this->session->set_userdata('UserLastName',$data['UserLastName']);
	        $this->session->set_userdata('UserEmail',$data['UserEmail']);
	       	$this->session->set_userdata('UserBirthdate',$data['UserBirthdate']);
	        $this->session->set_userdata('UserContact',$data['UserContact']);
	        $this->session->set_userdata('UserGender',$data['UserGender']);
    		redirect('tenant_home');
  		}
  		else{
	        $this->session->set_flashdata('error_msg', 'Invalid Username or Password. Please try again.');
					$this->load->view('Tenant/tenant_header');
					$this->load->view('Tenant/TenantHomepage');
					$this->load->view('Tenant/tenant_footer');
	    }
	}
	public function register_view() {
		$this->load->view('Tenant/tenant_header');
		$this->load->view('Tenant/register_form');
		$this->load->view('Tenant/tenant_footer');
	}
	public function login_view() {
		$this->load->view("Tenant/login_modal");
	}
}
