<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TenantController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$user =  $this->session->userdata('user');
		$this->load->model('tenant_model');
		$this->load->model('user_model');
		if( empty($user) )
			redirect('login','refresh');

	}
		public function dashboard()
		{
			$this->load->view('Multitenancy/TenantDash/Dashboard');
		}

		public function profile()
		{
			$data=$this->get_Info();
			$data1=$this->get_Web($data['TenantID']);
			$data2 = array(
				'user1'=>$data,
				'company'=>$data1);
			$this->load->view('Multitenancy/TenantDash/header');
			$this->load->view('Multitenancy/TenantDash/Myprofile',$data2);
		}

		public function get_Info(){
			$data=$this->tenant_model->getInfo($_SESSION['user']);
			return $data;
		}
		public function get_Web($id){
			$data=$this->tenant_model->getWebName($id);
			return $data;
		}
}
