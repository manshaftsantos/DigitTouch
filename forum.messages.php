<?php 
include("php/config.php");
if(isset($_POST['enregistrer']))
{
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']) AND !empty($_POST['email']))
    {
        $pseudo=htmlspecialchars($_POST['pseudo']);
        $mdp=sha1($_POST['mdp']);
        $mdp2=sha1($_POST['mdp2']);
        $email=htmlspecialchars($_POST['email']);
        if(strlen($pseudo) <= 100)
        {
            if($mdp==$mdp2)
            {
                $insert= $bdd->prepare("INSERT INTO membre(pseudo,mdp,email) VALUE(?,?,?)");
                $insert->execute(array($pseudo,$mdp,$email));
                
            }
            else
            {
                $messages="vos mots de passe ne correspondent pas !!!";
            }
        }
        else
        {
            $messages="votre pseudo est trop long";
        }
    }
}

include("view/forum.view.messages.php"); ?>