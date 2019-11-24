<?php

class ModelBuku extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function getAllBuku(){
        $query = $this->db->select('*')->from('buku');

        $result = $query->get()->result_array();

        return $result;
    }

    public function getBestBooks(){
        $query = $this->db->select('*')->from('buku')->limit(4);

        $result = $query->get()->result_array();

        return $result;
    }

    public function getDataBukuById($idBuku){
        $query = $this->db->select('*')->from('buku')->where('id_buku', $idBuku);

        $result = $query->get()->result_array();
        return $result;
    }

    public function getDataBukuByName($namaBuku){
        $query = $this->db->select('*')->from('buku')->where('nama', $namaBuku);

        $result = $query->get()->result();

        return $result;
    }

    public function getIdBukuByJudul($judul){
        $query = $this->db->select('id_buku')->from('buku')->where('judul', $judul);

        $result = $query->get();

        if ($result->num_rows() != 0) {
            foreach ($result->result() as $row) {
                return $row->id_buku;
            };
        } else {
            return false;
        }
    }

    public function getWishlist($idUser){
        $query = $this->db->select('*')->from('wishlist W')->join('user U', 'U.id_member = W.id_user', 'left')->join('buku B', 'B.id_buku = W.id_buku', 'left')->where('W.id_user', $idUser);

        $result = $query->get();

        if($result->num_rows() != 0){
            return $result->result_array();
        }else{
            return false;
        }
    }

    public function addWishlist($dataWishlist)
    {
        $this->db->insert('wishlist', $dataWishlist);
    }

    public function checkWishlist($dataWishlist){
        $query = $this->db->select('*')->from('wishlist')->where($dataWishlist);

        $result = $query->get();

        if($result->num_rows() != 0){
            return false;
        }else{
            return true;
        }
    }

    public function deleteWishlist($idBuku){
        $this->db->where('id_user', $this->session->userdata('id_member'));
        $this->db->delete('wishlist', array('id_buku' => $idBuku));
    }

    public function getBooksByEvent($idEvent){
        $query = $this->db->select('*')->from('events_book V')->join('event E', 'E.id_event = V.id_event', 'left')->join('buku B', 'B.id_buku = V.id_buku', 'left')->where('V.id_event', $idEvent);

        $result = $query->get();

        if ($result->num_rows() != 0) {
            return $result->result_array();
        } else {
            return false;
        }
    }

    public function getJustipersByEvent($idEvent){
        $query = $this->db->select('*')->from('justipers J')->join('event E', 'E.id_event = J.id_event', 'left')->join('user U', 'U.id_member = J.id_user', 'left')->where('J.id_event', $idEvent);

        $result = $query->get();

        if ($result->num_rows() != 0) {
            return $result->result_array();
        } else {
            return false;
        }
    }

    public function addJustipers($dataJustipers){ 
        $this->db->insert('justipers', $dataJustipers);
    }

    public function deleteJustipers($idEvent){
        $this->db->where('id_user', $this->session->userdata('id_member'));
        $this->db->delete('justipers', array('id_event' => $idEvent));
    }

    public function checkJustipers($dataJustipers){
        $query = $this->db->select('*')->from('justipers')->where($dataJustipers);

        $result = $query->get();

        if($result->num_rows() != 0){
            return false;
        }else{
            return true;
        }
    }

    public function getIdUserByUsername($username){
        $query = $this->db->select('id_member')->from('user')->where('username', $username);

        $result = $query->get();

        if ($result->num_rows() != 0) {
            foreach($result->result() as $row){
                return $row->id_member;
            };
        } else {
            return false;
        }
    }
}