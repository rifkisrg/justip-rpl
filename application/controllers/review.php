<?php class review extends CI_Controller {
	public function index() {
		$this->load->model('review_model');
		$posts = $this->review_model->get_posts();
		$data['posts'] = $posts;
		$this->load->view('read', $data);
	}

	public function create() {
		$this->load->helper('url');
		$this->load->view('comment_create');
	}

	public function create_process() {
		$nama = $this->input->post('nama_user');
		$isi = $this->input->post('teks_komen');
		$rating = $this->input->post('rating');

		$this->load->helper('url');
		$this->load->model('review_model');

		$this->review_model->insert_post($nama, $isi, $rating);
		redirect(base_url('review'), 'refresh');
	}
}