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
            <span>DigitalTouch </span>, la solution pour donner vie a vos idees.
        </h1>
        <p class="slogan">Pensez et nous le realisons.</p>
    </div>
    <div class="img_presentation">
        <img src="img/pc1.png" alt="pc" >
    </div>
</section>

<section class="section_two">
    
    <div class="section_one">
        <div class="texte_presentation">
            <h1 class="texte_noir">Création de site web</h1>
            <p class="slogan">Blog, E-commerce, site vitrine, espace administrateur... Notre équipe a l'expérience nécessaire pour développer tout type de projet web.</p>
            <button class="btn_savoir">En savoir plus </button>
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
            <p class="slogan">Nos applications mobiles sont performantes, développées pour Android et iOS 
            et offrent une expérience utilisateur optimale.</p>
            <button class="btn_savoir">En savoir plus </button>
    </div>    
</div>

    <div class="section_one">
        <div class="texte_presentation">
            <h1 class="texte_noir">Création de logos, flyers etc... </h1>
            <p class="slogan">Blog, E-commerce, site vitrine, espace administrateur... Notre équipe a l'expérience nécessaire pour développer tout type de projet web.</p>
            <button class="btn_savoir">En savoir plus </button>
        </div>
        <div class="img_presentation">
            <img src="img/logo_flyers.png" alt="pc" >
        </div>
    </div>

</section>

<?php include("include/footer.php")?>
</body>
</html>