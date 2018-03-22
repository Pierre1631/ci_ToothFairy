<?php
defined('BASEPATH') OR exti('No direct access script allowed');

class appointment extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('appointment_model','appointment');
	}
	public function index(){
		$result = $this->appointment->read_appoint();
		$appoint = array();
		foreach ($result as $res) {
			$info = array();
			$info['id'] = $res['appointment_id'];
			$info['adate'] = $res['appointment_date'];
			$info['atime'] = $res['appointment_time'];
			$appoint[] = $info;
		}
		$data['appoint'] = $appoint;
		$this->load->view('Tenant/tenant_header');
		$this->load->view('Tenant/appointment',$data);
		$this->load->view('Tenant/tenant_footer');
	}
}