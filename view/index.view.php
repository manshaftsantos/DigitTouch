<!DOCTYPE html>
<html lang="fr">
    <?php $current = "acceuil" ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("include/link.php") ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acceuil</title>
</head>
<body>
<!---------Header------------------------------------------->
<?php include("include/header.php")?>

<section class="section_one pad">
    <div class="texte_presentation">
        <h1>
            <span>DigitalTouch </span>, la solution pour donner vie à vos idées.
        </h1>
        <p class="slogan">&lt;&lt; Pensez , nous réalisons &gt;&gt;</p>
    </div>
    <div class="img_presentation">
    <div id='alogos'>
            <img class="alog " src="img/first.png" alt="pc" >
            <img class="alogo un" src="img/0.png" alt="pc" >
            <img class="alogo deux" src="img/2.png" alt="pc" >
            <img class="alogo trois" src="img/3.png" alt="pc" >
            <img class="alogo quatre" src="img/4.png" alt="pc" >
            <img class="alogo cinq" src="img/5.png" alt="pc" >
            <img class="alogo six" src="img/6.png" alt="pc" >
            <img class="alogo sept" src="img/7.png" alt="pc" >
            <img class="alogo huit" src="img/8.png" alt="pc" >
            <img class="alogo neuf" src="img/9.png" alt="pc" >
            <img class="alogo dix" src="img/10.png" alt="pc" >
            <img class="alogo onze" src="img/11.png" alt="pc" >
         </div>
    </div>
</section>

<section class="section_two">
    
    <div class="section_one">
        <div class="texte_presentation">
            <h1 class="texte_noir">Création de site web</h1>
            <p class="slogan">Blog, E-commerce, site vitrine, espace administrateur... Notre équipe a l'expérience nécessaire pour développer tout type de projet web.</p>
            <a href="esp_dev_web.php"><button class="btn_savoir">  En savoir plus </button> </a>
        </div>
        <div class="img_presentation">
            <img src="img/creation_site_int.png" alt="pc" >
        </div>
    </div>
    
    <div class="section_one">
        <div class="img_presentation">
            <img src="img/image_mobile1.png" alt="image_mobile" >
        </div>    
        <div class="texte_presentation">
            <h1 class="texte_noir">Création d'application mobile</h1>
            <p class="slogan">Nos applications mobiles sont performantes, développées pour Android, iOS et Jio 
            et offrent une expérience utilisateur optimale.</p>
            <a href="esp_dev_mobile.php"><button class="btn_savoir">  En savoir plus </button> </a>
    </div>    
</div>

    <div class="section_one">
        <div class="texte_presentation">
            <h1 class="texte_noir">Création de logos, flyers etc... </h1>
            <p class="slogan">Confiez la conception de vos logos et vos supports 
                de communication papier à notre équipe experte en création graphique.</p>
            <a href="esp_graphisme.php"><button class="btn_savoir">  En savoir plus </button> </a>
        </div>
        <div class="img_presentation">
            <img src="img/logo_flyers.png" alt="pc" >
        </div>
    </div>

</section>

<?php include("include/footer.php")?>
</body>
</html>