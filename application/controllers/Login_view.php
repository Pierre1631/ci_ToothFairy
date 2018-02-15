<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_view extends CI_Controller {
	public function __construct() {
		parent:: __construct();
}
  public function index() {

		$data['title'] = 'Tooth Fairy Log in';
		$this->load->view('home/head_tenant1',$data);
		$this->load->view('home/login_view');
  }
}
