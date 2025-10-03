<!-- Projets Section -->
<section id="projets" class="container" style="background: var(--bg-dark);">
    <h2 class="section-title"> Mes <span class="gradient-text">Projets</span> </h2>
    <div class="projects-grid"> <?php foreach ($projets as $projet): ?> <div class="project-card fade-in-up">
                <h3><?= $projet['titre'] ?></h3>
                <p class="project-description"><?= $projet['description'] ?></p>
                <div style="margin-bottom: 1rem;"> <?= generateTechBadges($projet['technologies']) ?> </div>
                <div class="project-highlights"> <?php foreach ($projet['highlights'] as $highlight): ?> <div class="highlight-item"> <i class="fas fa-check-circle"></i> <?= $highlight ?> </div> <?php endforeach; ?> </div> <?php if (isset($projet['lien'])): ?> <a href="<?= $projet['lien'] ?>" target="_blank" class="btn btn-secondary" style="margin-top: 1rem; width: 100%; justify-content: center;"> <i class="fas fa-external-link-alt"></i> Voir le projet </a> <?php endif; ?>
            </div> <?php endforeach; ?> </div>
</section>