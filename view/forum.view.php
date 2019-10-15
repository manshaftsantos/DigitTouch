<?php include("php/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php $current = "forum " ?>
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
                  <a  class="a_forum" href="forum.messages.php"><li class="li_forum">messages recents</li></a>
                  <a href="forum.php"class="a_forum active" > <li class="li_forum active">posez votre problème</li></a>
                  <a href="sujet.php"class="a_forum " ><li class="li_forum">sujets</li></a>
               </ul>
         </nav>
         <?php if(isset($message)){ ?>
         <nav align="center" class="erreur">
         <?php if(isset($message)){echo $message;}  ?>
         </nav>
         <?php } ?>
    <div class="color">
    <div class="formulaire"> 
        <form action="" method="post" class="form">
            
            <select name="select" id="" class="select">
                <optgroup label="Création d'application mobile">
                    <option value="Java">Java</option>
                    <option value="Kotlin">Kotlin</option>
                    <option value="Kajak">Kajak</option>
                </optgroup>    
                <optgroup label="Design">
                    <option value="Photoshop">Photoshop</option>
                    <option value="Lightroom">Lightroom</option>
                    <option value="Photoshop">Photoshop</option>
                </optgroup>
                <optgroup label="Developpement Web">
                    <option value="Html">Html</option>
                    <option value="Css">Css</option>
                    <option value="Php">Php</option>
                </optgroup>
            </select><br><br>

            <textarea name="commentaire" id="" cols="30" rows="10" class="comment" placeholder=" Aaa..." required></textarea><br>
            <div class="connection">
                <input  type="text" name="pseudo" placeholder=" pseudo" class="c_pseudo"required><br>
                <input  type="email" name="email" placeholder=" Email" class="c_email" required >
            </div><br>
            <div class="check">
                <div class="check1"><input type="checkbox" name="notification" class="check_box" >
                    <label for="notification" class="check_label"> recevoir les reponses par notifications</label>
                </div><br>
            </div>
            <div >
                <input type="submit" name="envoyer" id="" value="envoyer" class="envoyer">
            </div>
        </form>
    </div>
</section>











<?php include("include/footer.php") ?>
</body>
</html>