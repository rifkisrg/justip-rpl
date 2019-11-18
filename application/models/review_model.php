<?php class review_model extends CI_Model {

	public function get_posts() {
		$this->load->database();
		$query = $this->db->query('SELECT * FROM comment');
		return $query->result();
	}
	public function insert_post($nama, $isi, $rating) {
		$this->load->database();
		$this->db->query("INSERT INTO comment (nama_user, teks_komen, rating) VALUES ('$nama', '$isi', '$rating')");
	}
	public function view($table){
		return $this->db->get($table);
	}
	public function update($table, $data, $where){
		return $this->db->update($table, $data, $where);
	}
}
