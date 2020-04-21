<?php
class ArtikelModel extends CI_Model
{
	public function get() {
		return $this->db->get("toko")->result();
	}

	public function detail($id) {
		$this->db->where('id', $id);
		return $this->db->get("toko")->result();
	}

	public function tambah($data = array()) {
		return $this->db->insert("toko", $data);
	}

	public function ubah($data = array(), $id) {
		$this->db->where('id', $id);
		return $this->db->update("toko", $data);
	}

	public function hapus($id) {
		$this->db->where('id', $id);
		return $this->db->delete("toko");
	}

}
?>
