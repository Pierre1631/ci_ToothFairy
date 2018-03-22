<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TenantDash_Profile_Edit extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$user =  $this->session->userdata('user');
		$this->load->model('tenant_model');
		if( empty($user) )
			redirect('login','refresh');
	}

	public function index()
	{
		$data=$this->get_Info();
		$data1=$this->get_Web($data['tenant_id']);
		$data2 = array(
			'user1'=>$data,
			'company'=>$data1);
		$this->load->view('Multitenancy/TenantDash/Myprofile_edit',$data2);
	}
	
	public function get_Info(){
		$data=$this->tenant_model->getInfo($_SESSION['user']);
		return $data;
	}
	
	public function get_Web($id){
		$data=$this->tenant_model->getWebName($id);
		return $data;
	}
	public function edit(){
		if(isset($_SESSION['user'])){
			$data = array(
					'tenant_contact' => $_POST['Contact'],
				 	'Tenant_address' => $_POST['Address'],
				 	'tenant_city'   => $_POST['City'],
				 	'tenant_postal'   => $_POST['ZipCode']);
			$pr = $this->tenant_model->update_info($_SESSION['user'],$data);
		}
		else{
			echo 'No Update done';
		}
		redirect('TenantDash_Profile');
	}
	
}	
?>