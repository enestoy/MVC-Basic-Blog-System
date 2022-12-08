<?php
class Panel_Model extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function addNewContentRun($data){
        return $this->db->insert("blogs", $data);
    }
}
?>