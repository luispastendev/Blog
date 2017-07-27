<?php 
class Persona extends CI_model
{
	public function logear($email,$password){
		$this->db->select("*");
		$this->db->from("users");
		$this->db->where("email",$email);
		$this->db->where("password",$password);
		$query=$this->db->get();
		if($query->result()){
			$this->session->set_userdata("email",$email);
			redirect(base_url()."Admin");
		}else{
			echo "<script>alert('Los datos ingresados son incorrectos');</script>";
			echo"<script>
						function recargar(){
					  		window.location='".base_url()."Login';
						}
						setTimeout ('recargar()', 10);
					</script>";
		}
	}
}