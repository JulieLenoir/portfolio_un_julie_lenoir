<?php
// includes/header.php

?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?= e($infos['nom']) ?> - <?= e($infos['titre']) ?>">
<title><?= e($infos['nom']) ?> - Portfolio</title>


<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" crossorigin="anonymous">


<header>
    <nav>
        <div class="nav-container">
            <div class="logo">JL_DEV</div>
            <ul class="nav-links" role="navigation" aria-label="Navigation principale">
                <li><a href="#accueil" class="active">Accueil</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#experiences">Expériences</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>