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
                    <a href="forum.php"class="a_forum" > <li class="li_forum">posez votre problème</li></a>
                    <a href="sujet.php"class="a_forum active" ><li class="li_forum active">sujets</li></a>
                </ul>
            </nav>
        <div  class="sujet">
            <table>
                <tr class="ligne1">
                <td> <h2>categories</h2></td>
                    <td><h2>sous categories</h2></td>
                </tr>
                <tr class="ligne2">
                    <td><a class="lien_cat" href="#">developpement web</a></td>
                    <td></td>
                </tr>
                <tr>
                <td> <a class="lien_cat" href="#"> creation aplications mobile</a></td>
                <td></td>
                </tr>
                <tr>
                    <td><a class="lien_cat" href="#">logos</a> </td>
                    <td></td>
                </tr>
            </table>
        </div>
</section>
<?php include("include/footer.php") ?>
</body>
</html>