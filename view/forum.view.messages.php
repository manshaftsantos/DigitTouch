<?php
include('php/config.php')
?>
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
<section id="con" align='center'>
<img id="btn_close1" src="img/close.png" width="70" title="Fermer" alt="">
   <hr>
    <h1>CONNEXION</h1>
   <form action="" method="post">
      <input required type="text" name="cpseudo" placeholder="Pseudo"> <br> <br>
      <input required  type="password" name="cmdp" placeholder="Mot de passe"> <br> <br>
      <input class="btn_savoir" type="submit" value="connexion">
   </form>
</section>
<section id="nco" align='center'>
   <img id="btn_close" src="img/close.png" width="70" title="Fermer" alt=""> 
   <hr>
    <h1>Nouveau Compte</h1>
   <form id="io" action="" method="post">
      <input class="ip" required type="text" name="pseudo" placeholder="Pseudo"> <br> <br>
      <input class="ip" type="password" name="mdp" placeholder="Mot de passe"> <br> <br>
      <input class="ip" type="password" name="mdp2" placeholder="Verifier mot de passe"> <br> <br>
      <input class="ip" type="email" name="email" placeholder="Email"> <br> <br>
      <input  class="btn_savoir ip" name="enregistrer" type="submit" value="ENREGISTRER">
   </form>
   
</section>

  

<section class="zone_message">  
         <nav class="nav_forum">
               <ul class="ul_forum">
                  <a  class="a_forum active" href="forum.messages.php"><li class="li_forum active">Méssages récents</li></a>
                  <a href="forum.php"class="a_forum" > <li class="li_forum">Posez votre problème</li></a>
                  <a href="sujet.php"class="a_forum " ><li class="li_forum">Sujets</li></a>
                  <button id="co" >Connexion</button>
                  <button id="nc">Nouveau Compte</button>
               </ul>
         </nav>
         <?php if(isset($messages)){ ?>
            <nav align="center" class="erreur">
         <?php if(isset($messages)){echo $messages;}  ?>
            </nav>
         <?php } ?>
      <a href="reponses.php">      
         <div class="div_msg2">
            <div class="pseudo_msg">
               <div class="user_pseudo" >
                  <div class="psdo">Pseudo</div>
                  <div class="pp" >pp</div>
               </div>
               <div class="user_msg" >
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cumque voluptatibus veniam atque fugiat cum tempore repellat error placeat velit similique, aliquam omnis quia impedit, natus itaque ea voluptatem est.
               </div>
               
            </div>
            <div class="footer_msg">
               <div class="user_date" >le 12.03.2019 à 15h</div>
            <div class="btn_reponses">1527</div>
            </div>
         </div>
      </a>
   <a href="reponses.php">
   <div class="div_msg2">
      <div class="pseudo_msg">
      <div class="user_pseudo" >
            <div class="psdo">pseudo</div>
            <div class="pp" >pp</div>
         </div>
         <div class="user_msg" >
         Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cumque voluptatibus veniam atque fugiat cum tempore repellat error placeat velit similique, aliquam omnis quia impedit, natus itaque ea voluptatem est.
         </div>
      </div>
      <div class="footer_msg">
          <div class="user_date" >le 12.03.2019 à 15h</div>
         <div class="btn_reponses"><a href="reponses.php">1246</a></div>
      </div>
   </div>
   </a>
  
   
  
  
   
</section>










<script src="js/main.js"></script>
<?php include("include/footer.php") ?>
</body>
</html>