<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TenantDash_records extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	public function index()
	{

    $this->load->view('Multitenancy/TenantDash/records');
  }
}
