<?php 
class Admin extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		if(!isset($this->session->email)):
			redirect(base_url()."Login");
		endif;
	}
	public function index(){
		$this->load->view('admin-panel/index');
	}
}