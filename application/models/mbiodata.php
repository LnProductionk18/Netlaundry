<?php 
class Mbiodata extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	function getBiodata() {
		return $query = $this->db->query("SELECT * FROM mahasiswa");
	}	
	function addBiodata($data) {
		$this->db->insert('mahasiswa',$data);
	}
}
?>