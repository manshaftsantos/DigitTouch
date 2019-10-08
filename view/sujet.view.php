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

<div class="titre">
         <span class = "lien_forum"><a  class="les_messages" href="forum.messages.php">messages recents</a></span>
         <span class = "lien_forum"><a href="forum.php"class="le_forum" >posez votre problème</a></span>
         <span class = "lien_forum"><a href="sujet.php"class="le_forum" >sujets</a></span>
    </div>

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
<?php include("include/footer.php") ?>
</body>
</html>