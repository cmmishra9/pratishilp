<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Global_Model extends CI_Model
{
    protected $_table_name='settings';

	protected $_primary_key='id';

	public function __construct() {
		parent:: __construct();
	}
} 