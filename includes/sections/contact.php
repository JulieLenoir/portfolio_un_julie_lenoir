<!-- Contact Section -->
<section id="contact" class="container contact-section">
    <h2 class="section-title">
        Travaillons <span class="gradient-text">Ensemble</span>
    </h2>

    <p class="contact-subtitle">
        Je recherche un CDI ou un CDD pour continuer à développer mes compétences en développement web
    </p>

    <div class="contact-grid">
        <!-- Email -->
        <div class="contact-card">
            <i class="fas fa-envelope contact-icon"></i>
            <h3>Email</h3>
            <a href="mailto:<?= $infos['email'] ?>"><?= $infos['email'] ?></a>
        </div>

        <!-- Téléphone -->
        <div class="contact-card">
            <i class="fas fa-phone contact-icon"></i>
            <h3>Téléphone</h3>
            <a href="tel:+33<?= str_replace(' ', '', substr($infos['telephone'], 1)) ?>">
                <?= $infos['telephone'] ?>
            </a>
        </div>

        <!-- Localisation -->
        <div class="contact-card">
            <i class="fas fa-map-marker-alt contact-icon"></i>
            <h3>Localisation</h3>
            <p class="contact-location"><?= $infos['localisation'] ?></p>
        </div>
    </div>

    <!-- Bouton CV -->
    <div class="contact-btn-wrapper">
        <a href="<?= $infos['cv'] ?>" target="_blank" class="btn btn-primary contact-btn">
            <i class="fas fa-file-download"></i> Télécharger mon CV
        </a>
    </div>
</section>