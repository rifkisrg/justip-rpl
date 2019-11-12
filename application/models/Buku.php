<?php

class Buku extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function getDataBukuById($idBuku){
        $query = $this->db->select('*')->from('buku')->where('id_buku', $idBuku);

        $result = $query->get()->result();

        return $result;
    }

    public function getDataBukuByName($namaBuku){
        $query = $this->db->select('*')->from('buku')->where('nama', $namaBuku);

        $result = $query->get()->result();

        return $result;
    }

    public function getDataBukuByCategory($categoryBuku){
        $query = $this->db->select('*')->from('buku')->where('category', $categoryBuku);

        $result = $query->get()->result();

        return $result;
    }
}