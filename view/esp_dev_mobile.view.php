<!DOCTYPE html>
<html lang="fr">
<?php $current = "acceuil" ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include("include/link.php") ?>
    <title>Developpement Mobile</title>
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
                <img  class="iphone" src="img/ip.png" alt="">
                <h2>Création d'application pour ios</h2>
                <p class="slogan"> Iphone aujourd'hui a une grande communauté d'utilisateur
                alors pensez à créer votre application ios à but lucratif .</p>
        </div>
        <div class="dev andro">
                <img class="android" src="img/jio.png" alt="">
                <h2>Création d'application pour jio</h2>
                <p class="slogan">Nouvellement arrivé sur le marché fait deja
                    son buzz alors créeons ensemble une application unique et universel
                pour Jio. </p> 
        </div>
        <div class="dev andro">
                <img class="android" src="img/pris.png" alt="">
                <h2>Création d'application pour android</h2>
                <p class="slogan">La plateforme mobile la plus utilisé
                 alors confiez nous votre idée et nous la
                transformons en application android révolutionnaire.</p> 
        </div>
    </div>
    
    <div align="center">
        <h2>Besoin</h2>
        <hr id="hr1">
        <hr id="hr2">
        <p class="slogan">Besoin d'un site web? notre equipe vous offre <br> un excellent design,  une tres bonne visibilité et une bonne structure </p>
        <a href="contact.php"><button class="btn_savoir"> Contactez nous </button> </a>
    </div>
    
</section>
<!---------Footer------------------------------------------->
<?php include("include/footer.php")?>
</body>
</html>