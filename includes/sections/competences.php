<!-- Compétences Section -->
<section id="competences" class="container">
    <div class="soft-skills">
        <h3>Soft Skills</h3>
        <div class="badges-container"> <?php foreach ($softSkills as $soft): ?> <span class="badge badge-soft"><?= $soft ?></span> <?php endforeach; ?> </div>
    </div>
    <h2 class="section-title"> Compétences <span class="gradient-text">Techniques</span> </h2>
    <div class="skills-grid"> <?php foreach ($competences as $categorie => $skills): ?> <div class="skill-card fade-in-up">
                <div class="skill-icon"><?= getSkillIcon($categorie) ?></div>
                <h3><?= $categorie ?></h3>
                <ul class="skill-list"> <?php foreach ($skills as $skill): ?> <li><?= $skill ?></li> <?php endforeach; ?> </ul>
            </div> <?php endforeach; ?> </div>

</section>