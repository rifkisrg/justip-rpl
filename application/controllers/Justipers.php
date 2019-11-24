<?php

class Justipers extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('ModelEvents');
        $this->load->model('ModelBuku');
    }

    public function daftar($idEvent){
        $data = [
            'id_event' => $idEvent,
            'id_user' => $this->session->userdata('id_member')
        ];

        $this->ModelBuku->addJustipers($data);
        redirect(base_url('events/details/') . $idEvent);
    }

    public function berhenti($idEvent){
        $this->ModelBuku->deleteJustipers($idEvent);
        redirect(base_url('events/details/') . $idEvent);
    }
}