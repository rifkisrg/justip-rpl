<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Berita extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_app');
	}

	public function index(){
		$data['record'] = $this->Model_app->view('berita');
		$this->load->view('view_berita',$data);
	}

	function tambah_rating(){
		if ($this->input->post('rating')!=''){
	        $data = array('rating'=>$this->input->post('rating'));
	        $where = array('id_berita' => $this->input->post('id'));
			$this->model_app->update('berita', $data, $where);
		}
	}
}
