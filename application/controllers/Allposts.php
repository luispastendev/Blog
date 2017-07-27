<?php 

class Allposts extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("posts");

	}
	public function index(){
		$resultado = $this->posts->get_posts();
		$data = array(
				'title'=>'Blog Lautaro Umpierrez',
				'consulta'=>$resultado
			);
		$this->load->view("vallposts",$data);
	}
}