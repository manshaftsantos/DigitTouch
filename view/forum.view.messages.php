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
         <nav class="nav_forum">
               <ul class="ul_forum">
                  <a  class="a_forum active" href="forum.messages.php"><li class="li_forum active">messages recents</li></a>
                  <a href="forum.php"class="a_forum" > <li class="li_forum">posez votre problème</li></a>
                  <a href="sujet.php"class="a_forum " ><li class="li_forum">sujets</li></a>
               </ul>
         </nav>
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











<?php include("include/footer.php") ?>
</body>
</html>