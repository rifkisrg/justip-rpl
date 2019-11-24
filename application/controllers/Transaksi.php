<?php

class Transaksi extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelTransaksi');
        $this->load->model('ModelBuku');
    }

    public function index(){
        $data['user'] = $this->ModelTransaksi->getTransaksiByUser($this->session->userdata('id_member'));
        $data['justiper'] = $this->ModelTransaksi->getTransaksiByJustiper($this->session->userdata('id_member'));
        if ($this->session->has_userdata('active')) {
            $this->load->view('templates/guest_header');
            $this->load->view('transaction', $data);
            $this->load->view('templates/footer');
        } else {
            redirect(base_url('auth'));
        };
    }

    public function tambah(){
        $dataTransaksi = [
            'id_event' => $this->input->post('id_event'),
            'trans_from' => $this->session->userdata('name'),
            'trans_to' => $this->input->post('justiper'),
            'id_buku' => $this->ModelBuku->getIdBukuByJudul($this->input->post('buku')),
            "status" => '0',
            'jumlah' => $this->input->post('jumlah')
        ];

        $this->ModelTransaksi->addTransaksi($dataTransaksi);
        redirect(base_url('transaksi'));
    }

    public function hapus($idTransaksi){
        $this->ModelTransaksi->deleteTransaksi($idTransaksi);
        redirect(base_url('transaksi'));
    }

    public function confirm($idTransaksi){
        $this->ModelTransaksi->changeStatus($idTransaksi);
    }

    public function rating(){
        $data = [
            'id_transaksi' => $this->input->post('id_transaksi'),
            'rating' => $this->input->post('rating')
        ];

        $this->ModelTransaksi->setRating($data);
        redirect(base_url('transaksi'));
    }
}