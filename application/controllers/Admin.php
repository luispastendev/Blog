<?php 
class Admin extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model("madmin");
		if(!isset($this->session->email)):
			redirect(base_url()."Login");
		endif;

	}
	public function index(){
		$admin = $this->madmin->get_data_of_admin($this->session->email);
		$admin = $admin->row();
		$data= array('title'=>'Panel de Administracion','administrator'=>$admin);
		$this->load->view('admin-panel/index',$data);
	}
	public function configurations(){

		$nameofblog=$this->madmin->get_data_of_blog();
		$nameofblog = $nameofblog->row();
		$data =array(
			'title'=>$nameofblog,
			'nameblog' => $nameofblog
			);
		$this->load->view("admin-panel/config.php",$data);

	}
	public function config_base_of_blog(){
		$this->madmin->edit_base_name_of_blog($this->input->post('title'));
	}
}