<?php 
class Posts extends CI_model{
	public function get_posts(){
		$this->db->select("*");
		$this->db->from("posts");
		$this->db->order_by("id","desc");
		return $this->db->get();
	}
}