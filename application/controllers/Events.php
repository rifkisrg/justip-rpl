<?php

class Events extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelEvents');
        $this->load->model('ModelBuku');
    }

    public function index(){
        $data['events'] = $this->ModelEvents->getAllEvents();
        $data['books'] = $this->ModelBuku->getBestBooks();
        if($this->session->has_userdata('active')){
            $this->load->view('templates/guest_header');
        }else{
            $this->load->view('templates/header');
        }
        $this->load->view('events', $data);
        $this->load->view('templates/footer');
    }

    public function details($idEvent){
        $data['events'] = $this->ModelEvents->getEventsById($idEvent);
        $data['books'] = $this->ModelBuku->getBooksByEvent($idEvent);
        $data['justipers'] = $this->ModelBuku->getJustipersByEvent($idEvent);
        $dataUser = [
            'id_event' => $idEvent,
            'id_user' => $this->session->userdata('id_member')
        ];

        if($this->ModelBuku->checkJustipers($dataUser)){
            $data['status'] = true;
        }else{
            $data['status'] = false;
        }

        $this->load->view('templates/guest_header');
        $this->load->view('eventDetails', $data);
        $this->load->view('templates/footer');
    }
}