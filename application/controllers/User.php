<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }
    public function index()
    {
        $data['title'] = "Admin Page";
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('user/index', $data);
    }

    // public function listevent()
    // {
    //     $data_event['title'] = "Event Page";
    //     $data_event['tambahevent'] = $this->db->get('tambahevent');
    //     // $this->load->view('templates/auth_header', $data_event);
    //     // $this->load->view('user/event', $data_event);
    //     // $this->load->view('templates/auth_footer');
    //     $this->load->view('user/event', ['halo' => $data_event]);
    // }

    public function event()
    {
        $data['title'] = "Event Page";
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['event'] = $this->db->get('tambahevent');
        $this->load->view('user/event', $data);
    }


    public function hapusevent($id)
    {
        $this->db->where('id', $id); //pencocokan id, dimana id_transaksi == inputan $id_transaksi
        $this->db->delete('tambahevent'); //eksekusi
        redirect('user/event', 'refresh');
    }

    public function addevent()
    {
        // $this->form_validation->set_rules('uploadgambar', 'Uploadgambar', 'required|trim');
        $this->form_validation->set_rules('namaevent', 'NamaEvent', 'required');
        $this->form_validation->set_rules('penyelenggara', 'Penyelenggara', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = "Tambah Event";
            $this->load->view('templates/auth_header', $data);
            $this->load->view('user/Vtambahevent');
            $this->load->view('templates/auth_footer');
        } else {

            $upload_gambar = $_FILES['uploadgambar']['name'];

            if ($upload_gambar) {
                $config['upload_path']          = './upload/event/';
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
                    'poster' => $upload_gambar,
                    'nama_event' => htmlspecialchars($this->input->post('namaevent', true)),
                    'penyelenggara' => htmlspecialchars($this->input->post('penyelenggara', true)),
                    'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
                ];

                $this->db->insert('tambahevent', $data1);
                $this->session->set_flashdata('message1', '<div class="alert alert-success" role="alert">
            Data Event Sudah ditambahkan</div>');
                redirect('user/event');
            }
        }
    }
}
