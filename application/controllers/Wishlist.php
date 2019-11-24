<?php

class Wishlist extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelBuku');
    }

    public function index(){
        if(!$this->session->has_userdata('active')){
            redirect(base_url('auth'));
        }else{
            $id_user = $this->session->userdata('id_member');
            $res['data'] = $this->ModelBuku->getWishlist($id_user);
            $dataWishlist = [
                'id_user' => $this->session->userdata['id_member']
            ];

            $this->load->view('templates/guest_header');
            $this->load->view('wishlist', $res);
            $this->load->view('templates/footer');
        }
    }

    public function add($idBuku){
        $dataWishlist = [
            'id_user' => $this->session->userdata('id_member'),
            'id_buku' => $idBuku
        ];
        $this->ModelBuku->addWishlist($dataWishlist);
        redirect(base_url('books/detailBuku/') . $idBuku);
    }

    public function delete($idBuku){
        $this->ModelBuku->deleteWishlist($idBuku);
        redirect(base_url('wishlist'));
    }
}