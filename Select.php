<?php
require_once 'Db.php';
class Select {

    public function __construct()
    {
        $this->db = new Db_connect();
        $this->db = $this->db->return_connect();
    }
  
    public function search($search){

        $select = $this->db->prepare("SELECT id,nom FROM manga WHERE nom LIKE '$search%'");
        $select->execute();
        $res = $select->fetchAll(PDO::FETCH_ASSOC);
            
        return $res;
    }

    public function searchReq($search){

        $select = $this->db->prepare("SELECT id,nom FROM manga WHERE nom LIKE '%$search%'");
        $select->execute();
        $res = $select->fetchAll();
            
        return $res;

    }




}