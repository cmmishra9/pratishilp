<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/MY_AdminController.php';

class Dashboard extends MY_AdminController{
	
	public function __construct()
	{
	   parent::__construct();
	}
	
	public function index()
	{
		$view = 'admin/dashboard/index_view';
		$this->load_view($view, []);
	}
}
