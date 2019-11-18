<?php

class DataBuku extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ModelBuku');
    }

    public function index(){
        $data['res'] = $this->ModelBuku->getAllBuku();
        $this->load->view('templates/header');
        $this->load->view('books', $data);
    }

    public function dataBuku(){
        $res = $this->ModelBuku->getAllBuku();
    }
}