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
		$result = $this->get_user->getuser();
		if(!empty($result)){
			$data['get_user']=$result;
			$this->load->view('Multitenancy/TenantDash/users', $data);
		}
	}
	public function delete($id){
		$this->db->where('user_id',$id);
		$this->db->delete('user');
		$this->load->view('Multitenancy/TenantDash/');
	}
}
