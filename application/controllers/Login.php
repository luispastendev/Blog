<?php 
class Login extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model("persona");
	}
	public function index(){
		$data =  array('title'=>'Blog lautaro umpierrez');
		$this->load->view("admin-panel/vlogin",$data);
	}
	public function logear(){
		$this->persona->logear($this->input->post("email"),$this->input->post("password"));
	}
	
}