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
        <a href="forum.php"class="le_forum" >Poser votre question</a> |
        <a  class="les_messages" href="forum.messages.php">listes des messages</a> |
        <a  class="les_messages" href="forum.messages.php">sujet</a> |
        <form action="" class="form_class"  >
                <input type="search" class="recherche" placeholder="Rechercher..." name="" id="">
                <input type="button"  class="bouton_recherche" value="rechercher">
        </form>
    </div>
    <div class="color">
    
                
             </div>
        </div>
    </div>
</section>











<?php include("include/footer.php") ?>
</body>
</html