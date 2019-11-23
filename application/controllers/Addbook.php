<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Addbook extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->form_validation->set_rules('uploadgambar', 'Uploadgambar', '');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|trim');
        $this->form_validation->set_rules('penulis', 'Penulis', 'required|trim');
        $this->form_validation->set_rules('bahasa', 'Bahasa', 'required|trim');
        $this->form_validation->set_rules('tahunterbit', 'Tahunterbit', 'required|trim');
        $this->form_validation->set_rules('harga', 'Hargabuku', 'required|trim');

        // $this->do_upload();
        // $this->upload->initialize($config);
        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah Buku";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/addbook');
            $this->load->view('templates/auth_footer');
        } else {

            $upload_gambar = $_FILES['uploadgambar']['name'];

            if ($upload_gambar) {
                $config['upload_path']          = './upload/product/';
                $config['allowed_types']        = 'gif|jpg|png';
                // $config['file_name']            = $this->product_id;
                // $config['overwrite']            = true;
                $config['max_size']             = 2048; // 1MB
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('uploadgambar')) {
                    $new_image = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }

                $data = [
                    'image' => "Haloo",
                    'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                    'penulis' => htmlspecialchars($this->input->post('penulis', true)),
                    'bahasa' => htmlspecialchars($this->input->post('bahasa', true)),
                    'tahun_terbit' => htmlspecialchars($this->input->post('tahunterbit', true)),
                    'harga' => htmlspecialchars($this->input->post('harga', true))
                ];

                $this->db->insert('tambahbuku', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Buku Sudah ditambahkan</div>');
                redirect('addbook');
            }
        }
    }
}
