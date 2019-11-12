<?php

class Buku extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function getDataBuku($idBuku){
        $query = $this->db->select('*')->from('buku')->where('id_buku', $idBuku);

        $result = $query->get()->result();

        return $result;
    }
}