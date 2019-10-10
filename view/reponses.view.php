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
         <span class = "lien_forum"><a  class="les_messages" href="forum.messages.php"><div class="header_reponse">&lt;&lt;afficher le message</div></a></span>  
    </div> 

   <div class="div_msg">
      <div class="pseudo_msg">
         <div class="user_pseudo" > <div class="user_icone"></div> <div class="user_name">pseudo</div> </div>
         <div class="user_msg" >
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cumque voluptatibus veniam atque fugiat cum tempore repellat error placeat velit similique, aliquam omnis quia impedit, natus itaque ea voluptatem est.
         </div>
         <div class="b_envoyer"><a href=""><button class="btn_savoir"> Repondre</button> </a></div>
      </div>
      <div class="footer_msg">
          <div class="user_date" >le 12.03.2019 à 15h</div>
      </div>
   </div>
   <div class="div_msg2">
      <div class="pseudo_msg">
         <div class="user_pseudo" > <div class="user_icone"></div> <div class="user_name">pseudo</div></div>
         <div class="user_msg" >
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cumque voluptatibus veniam atque fugiat cum tempore repellat error placeat velit similique, aliquam omnis quia impedit, natus itaque ea voluptatem est.
         </div>
         <div class="b_envoyer"><a href=""><button class="btn_savoir"> Repondre</button> </a></div>
      </div>
      <div class="footer_msg">
          <div class="user_date" >le 12.03.2019 à 15h</div>
      </div>
   </div>
  
</section>

</body>
</html>