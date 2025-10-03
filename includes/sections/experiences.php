<!-- Expériences Section -->
<section id="experiences" class="container">
    <h2 class="section-title"> Parcours <span class="gradient-text">Professionnel</span> </h2>
    <div class="timeline"> <?php foreach ($experiences as $exp): ?> <div class="timeline-item fade-in-up">
                <div class="experience-card">
                    <div class="experience-header">
                        <h3 class="experience-title"><?= $exp['titre'] ?></h3>
                        <div class="experience-company"> <i class="fas fa-building"></i> <?= $exp['entreprise'] ?> </div>
                        <div class="experience-meta"> <span class="badge badge-soft"><?= $exp['type'] ?></span> <span class="badge badge-tech"><?= $exp['periode'] ?></span> </div>
                    </div>
                    <ul class="missions-list"> <?php foreach ($exp['missions'] as $mission): ?> <li><?= $mission ?></li> <?php endforeach; ?> </ul>
                </div>
            </div> <?php endforeach; ?> </div>
    <!-- Formations -->
    <div style="margin-top: 4rem;">
        <div class="experience-card">
            <div style="display: flex; align-items: center; gap: 1rem; margin-bottom: 2rem;"> <i class="fas fa-graduation-cap" style="font-size: 2rem; color: var(--primary);"></i>
                <h3 style="font-size: 1.75rem;">Formation</h3>
            </div> <?php foreach ($formations as $formation): ?> <div style="margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid var(--border);">
                    <div style="display: flex; justify-content: space-between; align-items: start; flex-wrap: wrap; gap: 1rem;">
                        <div>
                            <h4 style="font-size: 1.125rem; margin-bottom: 0.5rem;"><?= $formation['diplome'] ?></h4>
                            <p style="color: var(--text-gray);"><?= $formation['etablissement'] ?></p>
                        </div> <span class="badge badge-soft"><?= $formation['annee'] ?></span>
                    </div>
                </div> <?php endforeach; ?>
        </div>
    </div>
</section>