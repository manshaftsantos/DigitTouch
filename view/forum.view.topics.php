<!DOCTYPE html>
<html lang="en">
<head>
    <?php $current = "forum" ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include("include/link.php") ?>
    <title>Forum</title>
</head>
<body>
<?php include("include/header.php") ?>

<section class="zone_message">  
    <div class="titre">
    <table>
    <tr> <a href="forum.php"class="le_forum" >cathégories</a> </tr>
    <tr><a  class="les_messages" href="forum.messages.php">Sujets</a> </tr>  
    <tr><a  class="les_messages" href="forum.messages.php">Messages</a> </tr>
        <form action="" class="form_class"  ><input type="search" class="recherche" placeholder="Rechercher..." name="" id=""><input type="button"  class="bouton_recherche" value=""></form>
   
    </table>
    </div>
    <div class="message_division">
        <td>nom_cat</td>    
        <div class="nom_sujet">nom_sujet</div>
    </div>
    
</section>











<?php include("include/footer.php") ?>
</body>
</html>