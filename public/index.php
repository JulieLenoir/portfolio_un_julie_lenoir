<?php
// public/index.php



require_once __DIR__ . '/../config/data.php';
require_once __DIR__ . '/../config/functions.php';



?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include __DIR__ . '/../includes/header.php'; ?>
</head>

<body>
    <main>
        <?php
        include __DIR__ . '/../includes/sections/hero.php';
        include __DIR__ . '/../includes/sections/competences.php';
        include __DIR__ . '/../includes/sections/projets.php';
        include __DIR__ . '/../includes/sections/experiences.php';
        include __DIR__ . '/../includes/sections/contact.php';
        ?>
    </main>


    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>