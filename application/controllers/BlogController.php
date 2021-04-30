<?php
defined('BASEPATH') OR exit("Not Allowed");

require_once APPPATH.'core/MY_FrontController.php';

class BlogController extends MY_FrontController{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->data['site_title']="Pratishilp-An Architecture Firm";
        $view = 'blog/blog_view';
        $this->load_view($view, $this->data);
    }
}