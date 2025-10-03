<?php
// includes/sections/hero.php
?>
<section id="accueil" class="hero">
    <div class="hero-content fade-in-up">

        <!-- Statut d'alternance -->
        <div class="badge-status" aria-hidden="true">
            <span class="status-dot" aria-hidden="true"></span>
            Recherche un CDI ou un CDD
        </div>

        <!-- Titre principal avec nom + rôle -->
        <h1>
            <?= e($infos['nom']) ?>
            <br>
            <span class="gradient-text">Développeuse Full Stack</span>
        </h1>

        <!-- Sous-titre -->
        <div class="subtitle"><?= e($infos['titre']) ?></div>

        <!-- Description -->
        <p class="description"><?= e($infos['description']) ?></p>

        <!-- Boutons CTA -->
        <div class="cta-buttons">
            <a href="mailto:<?= e($infos['email']) ?>"
                class="btn btn-primary"
                aria-label="Contacter par email">
                Me contacter
            </a>
        </div>

    </div>
</section>