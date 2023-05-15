<?php

class contact extends Controlleurs{
    public function afficher_contact(){
        $this->getView("contact_view");
        $view = new contact_view();
        $view->afficher_entete_haut("contact.css","Contact");
        $view->afficher_menu();
        $view->afficher_contact();
        $view->afficher_footer(); 
        $view->afficher_entete_bas("");
    }

    public function envoyer_mail(){
        $this->afficher_contact();
        if(isset($_POST["name"])){
            require '../application/app_Classes_and_Functions/mail.php';
            $mail->setFrom("la_akhrib@esi.dz",$_POST["name"]);
            $mail->addAddress("la_akhrib@esi.dz");
            $mail->Subject =$_POST["title"];
            $mail->Body=$_POST['message'];
            $mail->send();
        }
    }
}



