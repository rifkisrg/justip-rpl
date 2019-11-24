<?php

class ModelTransaksi extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function getAllTransaksi(){
        $query = $this->db->select('*')->from('transaksi T')->
                                                            join('events_book E', 'T.id_buku = E.id_buku AND T.id_event = E.id_buku', 'left')->
                                                            join('user U', 'T.trans_from = U.id_member', 'left')->
                                                            join('justipers J', 'T.trans_to = J.id_user', 'left');

        $result = $query->get()->result_array();

        return $result;
    }

    public function getTransaksiByUser($idUser){
        $query = $this->db->select('*')->from('transaksi T')->
                                                            join('buku B', 'T.id_buku = B.id_buku', 'left')->
                                                            join('event E', 'T.id_event = E.id_event', 'left')->
                                                            join('user U', 'T.trans_from = U.name', 'left')->
                                                            where('U.id_member', $idUser);

        $result = $query->get()->result_array();

        return $result;
    }

    public function getTransaksiByJustiper($idUser){
        $query = $this->db->select('*')->from('transaksi T')->
                                                            join('buku B', 'T.id_buku = B.id_buku', 'left')->
                                                            join('event E', 'T.id_event = E.id_event', 'left')->
                                                            join('user U', 'T.trans_to = U.username', 'left')->
                                                            where('U.id_member', $idUser);

        $result = $query->get()->result_array();

        return $result;
    }

    public function addTransaksi($dataTransaksi){
        $this->db->insert('transaksi', $dataTransaksi);
    }

    public function deleteTransaksi($idTransaksi){
        $this->db->delete('transaksi', array('id_transaksi' => $idTransaksi));
    }

    public function changeStatus($idTransaksi){
        $this->db->set('status', '1')->where('id_transaksi', $idTransaksi)->update('transaksi');
    }

    public function setRating($data){
        $this->db->select('*')->from('transaksi')->where('id_transaksi', $data['id_transaksi']);

        $queryResult = $this->db->get()->result_array();

        $id_justiper = $queryResult[0]['trans_to'];

        if($queryResult[0]['rating'] == ''){
            $value = array('rating' => $data['rating']);
            $this->db->where('id_transaksi', $data['id_transaksi']);
            $this->db->update('posts_rating', $value);
        }
    }

    public function getRating($data){
        $this->db->select('ROUND(AVG(rating),1) as averageRating');
        $this->db->from('transaksi');
        $this->db->where("trans_to", $data['trans_to']);
        $ratingquery = $this->db->get();

        $postResult = $ratingquery->result_array();

        $rating = $postResult[0]['averageRating'];

        if ($rating == '') {
            $rating = 0;
        }

        return $rating;
    }
}