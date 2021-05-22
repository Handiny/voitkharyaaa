<?php

require_once ("Model.php"); 

class ModelNewsletter extends Model{

  private $id_newsletter ;
  private $email;
  protected static $table = 'newsletter';
  protected static $primary = 'id_newsletter';
   
  //Les Getters:
 public function getId_newsletter() {
       return $this->id_newsletter;  
  }
 
  public function getEmail() {
    return $this->email;  
}
  
}
?>