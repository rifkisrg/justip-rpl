<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUser');
    }

    public function index(){
        $data['user'] = $this->ModelUser->getDataUser($this->session->userdata['id_member']);

        $this->load->view('templates/guest_header');
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit(){
        $newData = [
            'id_member' => $this->session->userdata['id_member'],
            'username' => $this->input->post('username'),
            'name' => $this->input->post('name'),
            'instagram' => $this->input->post('instagram'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        ];

        $this->ModelUser->editProfile($newData);
        redirect(base_url());
    }
}
