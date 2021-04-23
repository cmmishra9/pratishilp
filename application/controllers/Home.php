<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'core/MY_FrontController.php';
class Home extends MY_FrontController {

    public $data=[];
	public function index()
	{
        $this->data['site_title']="Pratishilp-An Architecture Firm";
		$this->load->view('common/header', $this->data);
		$this->load->view('home/home_view');
		$this->load->view('common/footer');
	}

    public function main_view(){
        $this->data['site_title']="Pratishilp-An Architecture Firm";
        $this->data["page"]="home/home_view";
        $this->load->view('main_view',$this->data);
    }
}
