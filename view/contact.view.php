<!DOCTYPE html>
<html lang="fr">
    <?php $current = "contact" ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("include/link.php") ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acceuil</title>
</head>
<body>
<!---------Header------------------------------------------->
<?php include("include/header.php")?>
<section class="scontact">
    <div align="center" class="mcontact">
        <h1>Nous contacter</h1>
        <hr id="hr1">
        <hr id="hr2">
    </div>
    <div class="tcontact" align="center">
        <p>Vous souhaitez discuter de votre projet ? Obtenir un devis ? 
        Vous avez <br> une quelconque question ? N'hésitez pas à nous contacter.</p>
    </div>
    <form  method="POST" action="">
        
        <div class="cform" >    
                <div><label class="fv" for="lnom">Votre nom*</label><br><br><input type="text" name="lnom"></div>
                <div><label class="fv" for="lmail">Votre Email*</label><br><br><input type="email" name="lmail"></div>
                <div><label class="fv" for="ltel">Téléphone*</label><br><br><input type="tel" name="ltel"></div>
                <div><label class="fv" for="lmessage">Message*</label><br><br><textarea name="lmessage" id="" cols="138" rows="10"></textarea></div>
                
                
        </div>
              <br>  <input class="btn_savoir lsub" type="submit" value="Envoyer">
    </form>
</section>

<!---------Footer------------------------------------------->
<?php include("include/footer.php")?>
</body>
</html>