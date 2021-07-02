<?php
//Ici $title de template.php dans la balise <title><?= $title ></title>
$title = "Accueil PsyZink";
//ob_start() démarre la temporisation de sortie. Tant qu'elle est enclenchée, aucune donnée, 
//hormis les en-têtes, n'est envoyée au navigateur, mais temporairement mise en tampon.
ob_start();
?>

<h1>PsyZink</h1>
<div class="row">
    <div class="col-sm-6">
        <img class="imgPresentation" src="img/accueil.jpg" alt="">
    </div>
    <div class="col-sm-6">
        <img class="imgPresentation" src="img/Création1.jpeg" alt="">   
    </div>
</div>
<div class="container-fluid">       
    <h2>Notre histoire</h2>
    <article class="histoire">
        <p class="textHistoire">L'association Psyzink a été créée à la suite d'une passion pour la décoration de soirée à base de string-art</p>
        <p class="textHistoire">De la à découler toute une panoplie de préstation permettant l'oganisation d'évenement digne de ce nom.</p>
        <p class="textHistoire">Ces prestations sont proposées par une équipe engagée souriante et déterminée</p>
        <section class="histoireBis">
            <h3>Notre histoire bis</h3>
            <p class="textHistoireBis">Histoire biiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiisssssssssssss</p>    
        </section>
    </article>

</div>

<div>
    <div class="row">
        <div class="col-sm-3">
        <p class="textImgPresentation">Décoration</p>
        <a href="decoration.php"><img class="imgAccueilX4" src="img/Image_3_rogne.jpg" alt="#"></a>
        </div>
        <div class="col-sm-3">
        <p class="textImgPresentation">Restauration</p>
        <a href="foodtruck.php"><img class="imgAccueilX4" src="img/food1.jpeg" alt="#"></a>
        </div>
        <div class="col-sm-3">
        <p class="textImgPresentation">Chill-Out</p>
        <a href="chillout.php"><img class="imgAccueilX4" src="img/Chill1_rogne.jpg" alt="#"></a>
        </div>
        <div class="col-sm-3">
        <p class="textImgPresentation">Sonorisation</p>
        <a href="creation.php"><img class="imgAccueilX4" src="img/Création1.jpeg" alt="#"></a>
        </div>
    </div>
</div>

<?php
//$content de template.php definis ce qui ce trouve dans le body
//Retourne le contenu du tampon de sortie et termine la session de temporisation. 
//Si la temporisation n'est pas activée, alors false sera retourné.
$content = ob_get_clean();
//Rappel du template sur chaque page
require "template.php";
?>