<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_FrontController extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function load_view($view, $data=[]){
		$this->load->view('common/header',$data);
		$this->load->view($view, $data);
		$this->load->view('common/footer',$data);

	}

}
