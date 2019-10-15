<?php 
include("php/config.php");

    if (isset($_POST['envoyer'])) {
        if(isset($_POST['select']) && isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['commentaire'])){
            $categorie = htmlspecialchars($_POST['select']);
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $email = htmlspecialchars($_POST['email']);
            $contenu = htmlspecialchars($_POST['commentaire']);
            
            if (strlen($pseudo) <= 100 ){
               $insert_sujet = $bdd->prepare("INSERT INTO sujet(sous_categorie , probleme , temps, pseudo,email,checkbox) VALUES (?,?,now(),?,?,?) ");
               if(isset($_POST['notification']))
               {
                    $insert_sujet->execute(array($categorie,$contenu,$pseudo,$email,1));
               }else{
                    $insert_sujet->execute(array($categorie,$contenu,$pseudo,$email,0));
               }
            }else{
                $message = "Votre pseudo est trop long !!!";
            }
        }
    }

include("view/forum.view.php"); ?>
