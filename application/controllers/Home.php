<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'core/MY_FrontController.php';
class Home extends MY_FrontController {

    public $data=[];
	public function index()
	{
        $this->data['site_title']="Pratishilp-An Architecture Firm";
        $view = 'home/home_view';
		$this->load_view($view,$this->data);
		
	}
}
