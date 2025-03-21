<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="accueil.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Portfolio</title>
</head>
<?php
include 'header.php';
?>
<body>
    <div class="content">
        <div class="titleheader">
            <h1>Bienvenue sur mon Portfolio! </h1>
        </div>
        <hr>
        <div id="about">
            <h2>A PROPOS DE MOI 🗨️</h2>
            <div class="presentation">
                <p>
                <div class="moi">
                    <img src="IMG/presentation.png" alt="Moi">
                </div>
                Je suis Marion, j'ai 23 ans.
                J'ai passé un baccalauréat général en littérature et, après l'obtention de ce diplôme, je suis partie
                travailler en grande surface en tant que vendeuse et chef de caisse.

                J'ai découvert le développement web grâce à un membre de ma famille qui est développeur web depuis
                quatre ans et qui m'a montré les ficelles du métier à travers son travail.

                Je me suis entraînée par moi-même avant d’intégrer un BTS à l'INSTA, à Paris, afin d'enrichir mes
                connaissances et de trouver une alternance pour faire de cette passion mon métier.
                </p>
            </div>
            <div class="CV">
            <a href="CV Marion.pdf" download="CV Marion.pdf">Télécharger mon CV</a>
            </div>
        </div>
    </div>
</body>

</html>
<?php
include 'footer.php';
?>