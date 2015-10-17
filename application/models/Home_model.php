<?php
class Home_model extends CI_Model {

	function getUser() {
		$this->db->select("Name, Email, Message");
		$this->db->order_by("Name", "desc");
		$this->db->from('contact');
		$query = $this->db->get();
		return $query->result();
	}

	function addUser($user=NULL) {
		$this->db->insert('contact', $user);
		return $this->db->insert_id();
	}

}