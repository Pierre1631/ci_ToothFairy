<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TenantDash_Profile extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$user =  $this->session->userdata('user');

		if( empty($user) )
			redirect('login','refresh');
		$this->load->model('user_model');
	}

	public function index()
	{
    $this->load->view('Multitenancy/TenantDash/Myprofile');
  }
}
