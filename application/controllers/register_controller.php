<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function index()
	{
		$data = array();
		if( $_SERVER['REQUEST_METHOD']=='POST' )
		{
			//do some form validation
			$validate = array(
							array('field'=>'user','label'=>'Username','rules'=>'trim|required',array('required' => 'You must provide a %s.')),
							array('field'=>'pwd','label'=>'Password','rules'=>'trim|required'),
			);

			// $this->form_validation->set_message('required', 'Please enter values for required fields.');

			$this->form_validation->set_rules($validate);
			 // $this->form_validation->set_rules('user', 'Username', 'required',
                        // array('required' => 'You must provide a %s.')
                // );
			if ($this->form_validation->run()===FALSE){

				 $this->form_validation->set_message('user', 'The {user} field is required');
				 // echo validation_errors();
				 // echo form_error('user','<div class="error">','</div>');
				 $data['errors'] = validation_errors();
			}else{
				// echo "Ok set the session";

				//check in the user table and match username and password
				// $this->load->model();
				//$login = $this->model_name->check_login($user,$pass);
				//if( count($login)>0 ){
					$this->session->set_userdata('user', $_POST['user']);
					redirect('dashboard');
				//}
				//else{
				//}

			}
		}
		$this->load->view('Multitenancy/register',$data);
		$this->load->view('Multitenancy/footer');
	}

}
