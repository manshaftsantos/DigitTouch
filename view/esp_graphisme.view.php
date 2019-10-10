<!DOCTYPE html>
<html lang="fr">
<?php $current = "acceuil" ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include("include/link.php") ?>
    <title>Graphisme</title>
</head>
<body>
<!---------Header------------------------------------------->
<?php include("include/header.php")?>
<section class="scontact">
    <div align="center" class="mcontact">
        <h2>Notre Savoir-Faire</h2>
        <hr id="hr1">
        
    </div>
    <div class="tcontact" align="center">
        <p class="slogan">Nos prestations sont sur mesure et uniques. <br> 
            Chaque réalisation embarque notre expertise dans les domaines suivants.</p>
    </div>

    <div class="sdeveloppement">
        <div class="dev">
                <img  src="img/log4.png" alt="">
                <h2>Logo</h2>
                <p class="slogan"> Présentez une meilleure image de vous en l'illustrant par un logo représentatif et illustratif.</p>
        </div>
        <div class="dev">
                <img  src="img/log.png" alt="">
                <h2>Flyers</h2>
                <p class="slogan">Attirez l'attention sur un événement grace a un flyer très illustratif et avec un design unique.</p>
        </div>
        <div class="dev">
                <img  src="img/log5.png" alt="">
                <h2>Carte de visite</h2>
                <p class="slogan">Pour votre communication professionnelle et votre extension commerciale, représenter votre institution avec un design unique.</p> 
        </div>
    </div>
   
    <div align="center">
        <h2>Besoin</h2>
        <hr id="hr1">
        <hr id="hr2">
        <p class="slogan">Besoin d'une illustration ? notre equipe vous offre <br> un excellent design. </p>
        <a href="contact.php"><button class="btn_savoir"> Contactez nous </button> </a>
    </div>
    
</section>
<!---------Footer------------------------------------------->
<?php include("include/footer.php")?>
</body>
</html>