<?php 
class Madmin extends CI_model
{
	public function get_data_of_admin($email){
		$this->db->select("*");
		$this->db->from("users");
		$this->db->where("email",$email);
		return $this->db->get();
	}
	public function get_data_of_blog(){
		$this->db->select("*");
		$this->db->from("blog_info");
		$this->db->where("type","title");
		return $this->db->get();
	}
	public function edit_base_name_of_blog($title){
		$this->db->where("type",'title');
		$titlearray=array(
				'data'=>$title
			);
		
		if($this->db->update("blog_info",$titlearray));
			echo "<script>alert('Datos modificados correctamente..');</script>";
			echo"<script>
						function recargar(){
					  		window.location='".base_url()."Admin/configurations';
						}
						setTimeout ('recargar()', 10);
					</script>";
	}
}