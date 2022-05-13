<?php
require_once 'Db.php';
class Select{


    public function __construct()
    {
        $this->db = new Db();

    }
    public function search($search){

        $select = $this->db->prepare("SELECT id,nom FROM manga WHERe nom LIKE '$search%'");
        $select->execute();
        $select->fetchAll();
    }

    public function searchReq($search){

        $select = $this->db->preapre("SELECT id, nom FROM manga WHERE nom LIKE '%$search%'");
        $select->execute();
        $select->fetchAll();



        
    }


}