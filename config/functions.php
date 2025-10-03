
<?php
// config/functions.php



/**
 * Retourne une icône font-awesome adaptée à la catégorie.
 * @param string $category Catégorie de compétence
 * @return string HTML de l'icône
 */
function getSkillIcon(string $category): string
{
    $icons = [
        'Frontend' => '<i class="fas fa-paint-brush" aria-hidden="true"></i>',
        'Backend' => '<i class="fas fa-cogs" aria-hidden="true"></i>',
        'Base de données' => '<i class="fas fa-database" aria-hidden="true"></i>',
        'IA & Data' => '<i class="fas fa-robot" aria-hidden="true"></i>',
        'Outils' => '<i class="fas fa-tools" aria-hidden="true"></i>'
    ];
    return $icons[$category] ?? '<i class="fas fa-laptop-code" aria-hidden="true"></i>';
}


/**
 * Génère des badges sécurisés pour les technologies.
 * @param array $technologies Liste des technologies
 * @return string HTML des badges
 */
function generateTechBadges(array $technologies): string
{
    $badges = array_map(function ($t) {
        return '<span class="badge badge-tech">' . htmlspecialchars($t, ENT_QUOTES | ENT_HTML5, 'UTF-8') . '</span>';
    }, $technologies);
    return implode(' ', $badges);
}


/**
 * Formate et normalise un numéro de téléphone pour href tel: (FR)
 * @param string $phone Numéro de téléphone
 * @return string Numéro formaté pour href tel:
 */
function formatPhoneHref(string $phone): string
{
    // Supprime tout sauf chiffres
    $digits = preg_replace('/[^0-9+]/', '', $phone);
    // Si commence par 0 -> remplacer par +33
    if (strpos($digits, '0') === 0) {
        $digits = '+33' . substr($digits, 1);
    }
    return $digits;
}


/**
 * Petit helper pour échapper et afficher du texte.
 * @param string $value Texte à échapper
 * @return string Texte échappé
 */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}
