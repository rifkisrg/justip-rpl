<?php

class ModelUser extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function getDataUser($idUser){
        $query = $this->db->select('*')->from('user')->where('id_member', $idUser);
        
        $result = $query->get()->result_array();

        return $result;
    }

    public function editProfile($newData){
        $this->db->set($newData);
        $this->db->where('id_member', $newData['id_member']);
        $this->db->update('user');
    }
}