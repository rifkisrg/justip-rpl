<?php

class Member extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    public function addMember($dataMember){
        $this->db->insert('member', $dataMember);

        
    }
}