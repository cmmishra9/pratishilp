<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_AdminController extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function load_view($view, $data=[])
	{
		$this->load->view('admin/common/header_admin');
		$this->load->view('admin/common/sidebar_admin');
		$this->load->view($view, $data);
		$this->load->view('admin/common/footer_admin');
	}
}
