<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->model('ModelBuku');
        $this->load->model('ModelEvents');
    }

    public function index()
    {
        $data['title'] = "Daftar Event";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['event'] = $this->db->get('event')->result_array();
        $this->load->view('templates/admin/auth_header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/event');
        $this->load->view('templates/admin/auth_footer');
    }

    public function buku(){
        $data['title'] = "Daftar Buku";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['buku'] = $this->ModelBuku->getAllBuku();

        $this->load->view('templates/admin/auth_header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/buku');
        $this->load->view('templates/admin/auth_footer');
    }

    public function addBuku(){
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('judul', 'JudulBuku', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim');
        $this->form_validation->set_rules('penulis', 'Tanggal', 'required|trim');
        $this->form_validation->set_rules('harga', 'Lokasi', 'required|trim');
        $this->form_validation->set_rules('tahun', 'Tanggal', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah Event";
            $this->load->view('templates/admin/auth_header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('admin/tambahbuku');
            $this->load->view('templates/admin/auth_footer');
        } else {

            $upload_gambar = $_FILES['uploadbuku']['name'];

            if ($upload_gambar) {
                $config['upload_path']          = 'assets/uploads/buku/';
                $config['allowed_types']        = 'gif|jpg|png';
                // $config['file_name']            = $this->product_id;
                // $config['overwrite']            = true;
                $config['max_size']             = 10000; // 1MB
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('uploadbuku')) {
                    $new_image = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
                $data1 = [
                    'judul' => htmlspecialchars($this->input->post('judul', true)),
                    'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                    'kategori' => htmlspecialchars($this->input->post('kategori', true)),
                    'penulis' => htmlspecialchars($this->input->post('penulis', true)),
                    'tahun_terbit' => htmlspecialchars($this->input->post('tahun', true)),
                    'harga' => htmlspecialchars($this->input->post('harga', true)),
                    'gambar' => $config['upload_path'] . $upload_gambar,
                ];

                $this->db->insert('buku', $data1);
                $this->session->set_flashdata('message1', '<div class="alert alert-success" role="alert">
            Data Event Sudah ditambahkan</div>');
                redirect('admin/buku');
            }
        }
    }

    public function hapusBuku($id){
        $this->db->where('id_buku', $id);
        $this->db->delete('buku');
        redirect('admin/buku', 'refresh');
    }

    public function tambahBukuToEvent(){
        $data = [
            'id_event' => $this->input->post('id_event'),
            'id_buku' => $this->input->post('id_buku')
        ];

        $this->ModelBuku->addEventBooks($data);
        redirect('admin/detailevent/' . $this->input->post('id_event'));
    }

    public function hapusBukuFromEvent(){
        $id_eb = $this->input->post('id_eventsbook');

        $this->ModelBuku->deleteEventBook($id_eb);
        redirect('admin/detailevent/' . $this->input->post('id_event'));
    }


    public function hapusevent($id)
    {
        $this->db->where('id_event', $id);
        $this->db->delete('event');
        redirect('admin', 'refresh');
    }

    public function addevent()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('nama', 'NamaEvent', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah Event";
            $this->load->view('templates/admin/auth_header', $data);
            $this->load->view('templates/admin/sidebar');
            $this->load->view('admin/Vtambahevent');
            $this->load->view('templates/admin/auth_footer');
        } else {

            $upload_gambar = $_FILES['uploadgambar']['name'];

            if ($upload_gambar) {
                $config['upload_path']          = 'assets/uploads/event/';
                $config['allowed_types']        = 'gif|jpg|png';
                // $config['file_name']            = $this->product_id;
                // $config['overwrite']            = true;
                $config['max_size']             = 10000; // 1MB
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('uploadgambar')) {
                    $new_image = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
                $data1 = [
                    'nama' => htmlspecialchars($this->input->post('nama', true)),
                    'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
                    'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
                    'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
                    'image' => $config['upload_path'] . $upload_gambar,
                ];

                $this->db->insert('event', $data1);
                $this->session->set_flashdata('message1', '<div class="alert alert-success" role="alert">
            Data Event Sudah ditambahkan</div>');
                redirect('admin');
            }
        }
    }

    // Event

    public function detailEvent($idEvent){
        $data['title'] = "Detail Event";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['event'] = $this->db->get_where('event', ['id_event' => $idEvent])->result_array();
        $data['buku'] = $this->ModelBuku->getBooksByEvent($idEvent);
        $data['semuabuku'] = $this->ModelBuku->getAllBuku();

        $this->load->view('templates/admin/auth_header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/eventdetails');
        $this->load->view('templates/admin/auth_footer');
    }

    public function editEvent($idEvent){
        $data['title'] = "Edit Event";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['event'] = $this->db->get_where('event', ['id_event' => $idEvent])->result_array();

        $this->load->view('templates/admin/auth_header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/editevent');
        $this->load->view('templates/admin/auth_footer');
    }

    public function updateEvent(){
        $data = [
            'id_event' => $this->input->post('id_event'),
            'nama' => $this->input->post('nama'),
            'tanggal' => $this->input->post('tanggal'),
            'deskripsi' => $this->input->post('deskripsi'),
            'lokasi' => $this->input->post('lokasi')
        ];

        $this->ModelEvents->updateEvent($data);
        redirect(base_url('admin/detailevent/') . $data['id_event']);
    }

    // Buku

    public function detailBuku($idBuku){
        $data['title'] = "Detail Buku";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['buku'] = $this->ModelBuku->getDataBukuById($idBuku);

        $this->load->view('templates/admin/auth_header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/bookdetails');
        $this->load->view('templates/admin/auth_footer');
    }

    public function editBuku($idBuku)
    {
        $data['title'] = "Edit Buku";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['buku'] = $this->db->get_where('buku', ['id_buku' => $idBuku])->result_array();

        $this->load->view('templates/admin/auth_header', $data);
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/editbuku');
        $this->load->view('templates/admin/auth_footer');
    }

    public function updateBuku()
    {
        $data = [
            'id_buku' => $this->input->post('id_buku'),
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'kategori' => $this->input->post('kategori'),
            'penulis' => $this->input->post('penulis'),
            'tahun_terbit' => $this->input->post('tahun_terbit'),
            'harga' => $this->input->post('harga')
        ];

        $this->ModelBuku->updateBuku($data);
        redirect(base_url('admin/detailbuku/') . $data['id_buku']);
    }
}
