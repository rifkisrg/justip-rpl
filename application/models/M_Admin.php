<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Admin extends CI_Model
{
    public function ceklogin($username, $password)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function tambahDataEvent()
    {
        $upload_gambar = $_FILES['uploadgambar']['name'];

        if ($upload_gambar) {
            $config['upload_path']          = './upload/event/';
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
                'poster' => $upload_gambar,
                'nama_event' => $this->input->post('namaevent', true),
                'penyelenggara' => $this->input->post('penyelenggara', true),
                'tanggal' => $this->input->post('tanggal', true)
            ];
            $this->db->insert('tambahevent', $data);
        }
    }
}
