<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clinic_home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$tenant =  $this->session->userdata('UserEmail');

		if( empty($tenant) )
			redirect('user/login_user','refresh');
			$this->load->model('user_model', 'get_user');
	}

	public function index()
	{
		$this->load->view('Tenant/tenant_headersession');
		$this->load->view('Tenant/TenantHomepage');
		$this->load->view('Tenant/tenant_footer');
	}
}
