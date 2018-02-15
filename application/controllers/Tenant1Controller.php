<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tenant1Controller extends CI_Controller {
	public function __construct() {
		parent:: __construct();
		$this->load->model('users_model');
	}
	public function register_user() {
		$user=array(
	    	'UserFirstName'=>$this->input->post('UserFirstName'),
      		'UserMiddleName'=>$this->input->post('UserMiddleName'),
	      	'UserLastName'=>$this->input->post('UserLastName'),
		    'UserEmail'=>$this->input->post('UserEmail'),
	     	'UserPass'=>sha1($this->input->post('UserPass')),
	     	'UserBirthdate'=>$this->input->post('UserBirthdate'),
	     	'UserContact'=>$this->input->post('UserContact'),
	     	'UserGender'=>$this->input->post('UserGender'),
        );
        print_r($user);
		$email_check=$this->users_model->email_check($user['UserEmail']);
		if($email_check){
	  		$this->users_model->register_user($user);
	  		$this->session->set_flashdata('success_msg', 'Registered successfully. Now login to your account.');
	  		redirect('Tenant1Controller/login_view');
		}
		else{
	  		$this->session->set_flashdata('error_msg', 'Error occured, Try again.');
	  		redirect('Tenant1Controller');
		}
	}
	public function login_view() {
		$data['title'] = 'Tooth Fairy Log In';
		$this->load->view('home/head_tenant1', $data);
		$this->load->view("home/login_view");
		$this->load->view('home/footer_tenant1');
	}
	public function register_view() {
		$this->load->view("register_view");
	}
	function login_user(){
  		$user_login=array(
	  		'UserEmail'=>$this->input->post('UserEmail'),
	  		'UserPass'=>sha1($this->input->post('UserPass'))
    	);
    	$data=$this->users_model->login_user($user_login['UserEmail'],$user_login['UserPass']);
  		if($data){
	        $this->session->set_userdata('UserID',$data['UserID']);
	        $this->session->set_userdata('UserFirstName',$data['UserFirstName']);
	        $this->session->set_userdata('UserMiddleName',$data['UserMiddleName']);
	        $this->session->set_userdata('UserLastName',$data['UserLastName']);
	        $this->session->set_userdata('UserEmail',$data['UserEmail']);
	       	$this->session->set_userdata('UserBirthdate',$data['UserBirthdate']);
	        $this->session->set_userdata('UserContact',$data['UserContact']);
	        $this->session->set_userdata('UserGender',$data['UserGender']);
    		echo "Login Successfully! ";
  		}
  		else{
	        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
	        $this->load->view("login_view");
	    }
	}
}
