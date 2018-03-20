<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$user =  $this->session->userdata('user');

		if( empty($user) )
			redirect('aboutusvisit','refresh');
		}
		public function index()
		{
			$this->load->view('Multitenant/Aboutus');
		}
}
