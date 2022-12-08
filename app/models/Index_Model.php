<?php

class Index_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function isimListele(){
        $sql = "SELECT * FROM test";
        return $this->db->select($sql);
    }

    public function makaleKaydet($data){
        return $this->db->insert("makaleler",$data);
    }

    public function makaleListele(){
        $sql = "SELECT * FROM makaleler";
        return $this->db->select($sql);
    }
}
