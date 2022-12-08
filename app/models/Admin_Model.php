<?php

class Admin_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function userControl($array = array()){
        $sql = "SELECT * FROM kullanicilar WHERE kadi = :kadi AND parola = :parola";
        $count = $this->db->affectedRows($sql, $array);
        
        if($count > 0){
            $sql = "SELECT * FROM kullanicilar WHERE kadi = :kadi AND parola = :parola";
            return $this->db->select($sql, $array);
        }else{
            return false;
        }
    }
}


?>