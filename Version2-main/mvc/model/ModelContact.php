<?php

require_once ("Model.php"); 

class ModelContact extends Model{

  private $id_contact;
  private $nom_prenom;
  private $email;
  private $message;
  protected static $table = 'contact';
  protected static $primary = 'id_contact ';
   
   //Les Getters:
 public function getId_contact() {
       return $this->id_contact;  
  }
 public function getNom_prenom() {
       return $this->nom_prenom;  
  }
  public function getEmail() {
    return $this->email;  
}
  public function getMessage() {
       return $this->message;  
  }
}
?>