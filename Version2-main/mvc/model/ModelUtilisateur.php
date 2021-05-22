<?php

require_once ("Model.php"); 

class ModelUtilisateur extends Model{
  private $id_utilisateur;
	private $nom_utilisateur;
  private $prenom_utilisateur;
  private $email;
  private $tel;
  private $ville;
  private $date_de_naissance;
  private $lieu_de_naissance;
  private $adresse;
  private $code_postal;
  private $pays;
  private $conducteur;
  private $num_permis;
  private $date_obtention;
  private $pays_delivrance;
  private $mdp;

  protected static $table = 'utilisateur';
  protected static $primary = 'id_utilisateur';
   
  /*public function __construct($id_utilisateur = NULL, $nom_utilisateur = NULL, $prenom = NULL) {
    if (!is_null($cin) && !is_null($nom) && !is_null($prenom)) {
      $this->nom_utilisateur = $nom_utilisateur;
      $this->nom = $nom;
      $this->prenom = $prenom;
     }*/
  
 public function getId_utilisateur() {
       return $this->id_utilisateur;  
  }
 public function getNom_utilisateur() {
       return $this->nom_utilisateur;  
  }
  public function getPrenom_utilisateur() {
    return $this->prenom_utilisateur;  
}
  public function getTel() {
       return $this->tel;  
  }
  public function getEmail() {
    return $this->email;  
}
public function getVille() {
  return $this->ville;  
}
public function getDate_de_naissance() {
  return $this->date_de_naissance;  
}
public function getLieu_de_naissance() {
  return $this->lieu_de_naissance;  
}
public function getAdresse() {
  return $this->adresse;  
}
public function getCode_postal() {
  return $this->code_postal;  
}
public function getPays() {
  return $this->pays;  
}
public function getNum_permis() {
  return $this->num_permis;  
}
public function getDate_obtention() {
  return $this->date_obtention;  
} 
public function getPays_delivrance() {
  return $this->pays_delivrance;  
}
public function getMdp() {
  return $this->mdp;  
}

}
?>



