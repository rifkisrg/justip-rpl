<?php

class ModelEvents extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function getAllEvents(){
        $query = $this->db->select('*')->get('event');

        $result = $query->result_array();

        return $result;
    }

    public function getEventsById($idEvent){
        $query = $this->db->select('*')->from('event')->where('id_event', $idEvent);

        $result = $query->get()->result_array();

        return $result;
    }
}