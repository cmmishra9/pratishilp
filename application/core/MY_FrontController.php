<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_FrontController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model("Global_Model", "gm");
		$this->load->language('frontend','english');
	}

	public function load_view($view, $data=[]){
		$data['settings']= $this->gm->get(1);
		$this->load->view('common/header',$data);
		$this->load->view($view, $data);
		$this->load->view('common/footer',$data);

	}

}
