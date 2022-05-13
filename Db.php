<?php

class Db{

    private $db;

   public function __construct(){

      try{

         $username = 'root';
         $password = 'root';
         
         $this->db = new PDO('mysql:host=localhost;dbname=autocompletion',$username,$password);
         $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
      }catch(PDOException $e){

         echo 'erreur :' . $e->getMessage();
      }

      return $this->db;

   }
    
    
}

