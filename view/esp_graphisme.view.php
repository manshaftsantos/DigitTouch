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
                <img  src="img/log1.png" alt="">
                <h2>Logo</h2>
                <p class="slogan"> Presentez une meilleure image de vous et illustrez vous par un logo representatif et illustratif.</p>
        </div>
        <div class="dev">
                <img  src="img/log2.png" alt="">
                <h2>Flyers</h2>
                <p class="slogan">Attirez l'attention sur un evenement grace a un flyer tres illustratif et avec un design unique.</p>
        </div>
        <div class="dev">
                <img  src="img/log3.png" alt="">
                <h2>Carte de visite</h2>
                <p class="slogan">Representer votre institution en un seul petit bout de carton.</p> 
        </div>
    </div>
    <div class="sdeveloppement">
        <div class="dev">
                <img src="img/cle.png" alt="">
                <h2>Réalisation clé en main</h2>
                <p class="slogan"> Une fois votre projet finalisé, 
                    votre plateforme est fonctionnelle et vous appartient à 100%.</p>
        </div>
        <div class="dev">
                <img  src="img/prise.png" alt="">
                <h2>Suivi continu</h2>
                <p class="slogan">Concentrez-vous sur vos affaires : nous vous proposons d'héberger 
                    votre projet et de veiller sur lui en continu. (optionnel)</p>
        </div>
        <div class="dev">
                <img  src="img/client.png" alt="">
                <h2>À l'écoute du client</h2>
                <p class="slogan">Nous sommes à votre écoute tout au long de la réalisation 
                de votre projet, par votre moyen de communication préféré.</p> 
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