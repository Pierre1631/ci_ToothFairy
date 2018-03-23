<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TenantDash_records extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('TenantDash_records_model','Tenant_rec');
		// $this->load->model('user_model','TenantDash_records');
		// $user =  $this->session->userdata('user');

		// if( empty($user) )
		// 	redirect('login','refresh');
	}

	public function index(){

		$result = $this->Tenant_rec->read();

		// $result2 = $this->TenantDash_records->readu();
		$info = array();
		$var = array();
		foreach ($result as $r) {
			
			$info['id'] = $r['record_id'];
			$info['userid']=$this->Tenant_rec->getUserInfo($r['user_id']);
			$info['date'] = $r['record_date'];
			$info['time'] = $r['record_time'];

			$var[] = $info;
		}
		$data['result'] = $var;
		$this->load->view('Multitenancy/TenantDash/records',$data);
	}
}
