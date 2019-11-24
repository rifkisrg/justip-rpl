<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = "JustipBook Login";
            $this->load->view('templates/header', $data);
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        //ada username
        if ($user) {
            //jika aktif
            if (!$this->session->has_userdata('active')) {
                if (password_verify($password, $user['password'])) {
                    if($user['role_id'] == 1){
                        $data = [
                            'active' => true,
                            'username' => $user['username'],
                            'name' => $user['name']
                        ];

                        $this->session->set_userdata($data);
                        redirect(base_url('admin'));
                    }else{
                        $data = [
                            'active' => true,
                            'username' => $user['username'],
                            'id_member' => $user['id_member'],
                            'name' => $user['name']
                        ];
    
                        $this->session->set_userdata($data);
                        redirect(base_url());
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Password </div>');
                    redirect(base_url('auth'));
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Username has not been activated </div>');
                redirect(base_url('auth'));
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Username is not registered </div>');
            redirect(base_url('auth'));
        }
        $pass = $this->db->get_where('user', ['password' => $password]);
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'is_unique' => 'This Username has Already Registered'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This Email has Already Registered!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'matches[password1]');


        if ($this->form_validation->run() == false) {

            $data['title'] = "JustipBook Registration";
            $this->load->view('templates/header', $data);
            $this->load->view('auth/registration');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'upload/product/default.jpg',
                'role_id' => 2,
                'is_active' => 1
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! your account has been created. Pleased Login </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();

        // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout </div>');

        redirect('auth');
    }
}
