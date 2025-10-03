<?php
// config/data.php



$infos = [
    'nom' => 'Julie LENOIR',
    'titre' => 'Développeuse Full Stack & IA',
    'email' => 'julielenoir.devweb@gmail.com',
    'telephone' => '06 20 83 54 44',
    'localisation' => 'Cholet, Angers, Nantes',
    'linkedin' => 'https://www.linkedin.com/in/julie-lenoir-renou',
    'github' => 'https://github.com/JulieLenoir',
    'cv' => 'https://drive.google.com/file/d/1EVj8nQYUOo0SBPn3KG49KL94krPdDAtz/view?usp=sharing',
    'description' => "Développeuse web & web mobile (Bac+3 CDA), spécialisée en PHP, Python et Intelligence Artificielle. Passionnée par l'innovation et l'éco-conception numérique."
];


$competences = [
    'Frontend' => ['HTML5', 'CSS3', 'JavaScript ES6',  'Bootstrap'],
    'Backend' => ['PHP (POO)', 'Symfony', 'Node.js', 'Python'],
    'Base de données' => ['SQL', 'MySQL', 'PHPMyAdmin', 'Vector DB', 'MongoDB'],
    'IA & Data' => ['RAG', 'LLM (Mistral, Ollama)', 'Embeddings', 'Vector Search'],
    'Développement & Versioning' => ['Git', 'GitHub'],
    'Déploiement & DevOps'       => ['Docker', 'Linux', 'VPS'],
    'Design & CMS'               => ['Figma', 'WordPress'],
    'Outils'                     => ['VS Code', 'Postman']
];
$langues = [
    'Français' => 'Langue maternelle',
    'Anglais' => 'technique',
];

$softSkills = [
    "Esprit d'équipe",
    'Autonomie',
    'Adaptabilité',
    'Encadrement',
    'Résolution de problèmes',
    'Curiosité',
    "Capacité d'analyse"
];


$projets = [
    [
        'titre' => 'Plateforme de Suivi Pédagogique',
        'description' => "Interface complète de suivi des apprenants avec logique métier en PHP/MySQL, utilisée quotidiennement par l'équipe pédagogique.",
        'technologies' => ['PHP', 'MySQL', 'POO'],
        'highlights' => ['En production', 'Usage quotidien par l\'équipe'],
        'categorie' => 'web'
    ],
    [
        'titre' => "Générateur d'Échéancier Automatisé",
        'description' => 'Module de calcul automatique de dates, actions et relances, réduisant significativement le temps de préparation des échéanciers.',
        'technologies' => ['PHP', 'MySQL'],
        'highlights' => ['Optimisation process', 'Gain de temps significatif'],
        'categorie' => 'web'
    ],
    [
        'titre' => 'Agent IA Conversationnel RAG',
        'description' => 'Solution Python combinant FAQ classique et moteur RAG avec vectorisation (embeddings), centralisant la documentation interne et offrant des réponses contextualisées.',
        'technologies' => ['Python', 'FastAPI', 'RAG', 'LLM', 'Vector DB'],
        'highlights' => ['Mistral/Ollama', 'Embeddings', 'Déploiement VPS Ubuntu'],
        'categorie' => 'ia'
    ],
    [
        'titre' => 'My Family Care (Projet Personnel)',
        'description' => 'Application web de gestion et anticipation des rendez-vous médicaux et para-médicaux pour toute la famille, avec rappels automatisés. En cours de développement en Symfony et Bootstrap.',
        'technologies' => ['Symfony', 'Bootstrap', 'MySQL'],
        'highlights' => ['En cours de développement', 'Projet personnel', 'Décharge mentale'],
        'categorie' => 'web'
    ],
    [
        'titre' => 'CMS Sans Base de Données',
        'description' => "POC innovant utilisant Node.js et JSON pour la gestion de contenu, favorisant simplicité et légèreté du déploiement avec approche éco-responsable.",
        'technologies' => ['Node.js', 'JSON', 'JavaScript ES6'],
        'highlights' => ['Éco-conception', 'Performance optimisée'],
        'categorie' => 'web'
    ],
];
$experiences = [
    [
        'titre' => 'Conceptrice - Développeuse Web',
        'entreprise' => 'CEFii, Angers',
        'periode' => 'Sept. 2024 - Juil. 2025',
        'type' => 'Alternance',
        'missions' => [
            "Développement d'un agent IA conversationnel (RAG, LLM, FastAPI)",
            'Conception d\'interface de suivi pédagogique (PHP/MySQL)',
            'Création d\'un générateur d\'échéancier automatisé',
            'Formation technique des apprenants (HTML, CSS, JS, PHP)',
            'Déploiement et maintenance sur VPS Ubuntu'
        ]
    ],
    [
        'titre' => 'Développeuse Web & Web Mobile',
        'entreprise' => 'CEFii, Angers',
        'periode' => 'Mars - Mai 2024',
        'type' => 'Stage',
        'missions' => [
            'Développement CMS sans base de données (Node.js, JSON)',
            "Intégration pratiques d'éco-conception numérique",
            'Optimisation performances et ressources',
            'Veille technologique sur les bonnes pratiques web'
        ]
    ]
];


$formations = [
    [
        'diplome' => "Conception et Développement d'Applications (Bac+3)",
        'etablissement' => 'CEFii, Angers',
        'annee' => '2025'
    ],
    [
        'diplome' => 'Développement Web et Web Mobile (Bac+2)',
        'etablissement' => 'CEFii, Angers',
        'annee' => '2024'
    ],
    [
        'diplome' => 'Certification CMS & WordPress',
        'etablissement' => 'Simplon, Angers',
        'annee' => '2023'
    ]
];
