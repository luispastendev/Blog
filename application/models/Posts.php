<?php 
class Posts extends CI_model{
	public function get_posts(){
		$this->db->select("*");
		$this->db->from("posts");
		$this->db->order_by("id","desc");
		return $this->db->get();
	}
	public function view_post($id){
		$this->db->select("*");
		$this->db->from("posts");
		$this->db->where("id",$id);
		return $this->db->get();
	}
}