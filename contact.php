<?php 
$bdd= new PDO('mysql:host=127.0.0.1;dbname=bd_digittouch','root','');
if(isset($_POST["envoyer"]))
{
    if(!empty($_post["lnom"]) AND !empty($_post["lemail"]) AND !empty($_post["ltel"]) AND !empty($_post["lmessage"]) )
    {
        $nom=htmlspecialchars($_post["lnom"]);
        $email=htmlspecialchars($_post["lemail"]);
        $tel=htmlspecialchars($_post["ltel"]);
        $message=htmlspecialchars($_post["lmessage"]);
        

    }
    else
    {
        $error="tous les champs doivent etre remplies !";
    }
}


include("view/contact.view.php");
?>
