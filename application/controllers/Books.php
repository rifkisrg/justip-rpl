<?php

class Books extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelBuku');
    }

    public function detailBuku($id){
        $data['detail'] = $this->ModelBuku->getDataBukuById($id);
        $x = [
            'id_user' => $this->session->userdata('id_member'),
            'id_buku' => $id
        ];
        if($this->ModelBuku->checkWishlist($x)){
            $data['statusBuku'] = true;
        }else{
            $data['statusBuku'] = false;
        }
        $this->load->view('templates/header');
        $this->load->view('bookDetails', $data);
        $this->load->view('templates/footer');
    }
}