<?php 

class Viewpost extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("posts");

	}
	public function index(){
		$resultado = $this->posts->view_post($this->input->get('id'));
		$resultado = $resultado->row(); 
		$data = array(
				'title'=>'Blog Lautaro Umpierrez',
				'consulta'=>$resultado
			);
		$this->load->view("viewpost",$data);
	}
}