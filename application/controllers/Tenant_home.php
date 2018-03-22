<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TenantDash_Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$user =  $this->session->userdata('user');

		if( empty($user) )
			redirect('login','refresh');
			$this->load->model('user_model', 'get_user');
	}

	public function index()
	{
		$this->load->view('Tenant/tenant_header');
		$this->load->view('Tenant/TenantHomepage');
		$this->load->view('Tenant/tenant_footer');
	}
}
