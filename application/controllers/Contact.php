<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'core/MY_FrontController.php';
class Contact extends MY_FrontController {

    public $data=[];
	public function index()
	{
        $this->data['site_title']="Contact Us";
        $view = 'contact/contact_view';
		$this->load_view($view,$this->data);
		
	}
}
