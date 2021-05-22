<?php
$pagetitle = 'Home';
$view = 'landing_page';
$controller = 'home';
require_once ("{$ROOT}{$DS}model{$DS}ModelNewsletter.php");

    if (isset($_REQUEST['email'])){
        
        $id_newsletter = NULL;
        $email = $_REQUEST["email"];
        
        
        
        $recherche = ModelNewsletter::select($id_newsletter);
        if($recherche==null){
            $new = new ModelNewsletter($id_newsletter,$email);	
            $tab = array(
            "id_newsletter" => NULL,
            "email" => $email,

            );				
            $u->insert($tab);
            $pagetitle = "Contact Enregistré";
            
    }	
}
require("{$ROOT}{$DS}view{$DS}view.php");
?>