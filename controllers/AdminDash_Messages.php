<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDash_Messages extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$user =  $this->session->userdata('user');

		if( empty($user) )
			redirect('login','refresh');
	}

	public function index()
	{

    $this->load->view('Multitenancy/AdminDash/Messages');
  }
}