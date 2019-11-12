<?php

class Member extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function getDataBuku($idBuku){
        $this->db->select('*')->from('buku')->where('id_buku', $idBuku);

        
    }
}