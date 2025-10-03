# Portfolio Web — Julie Lenoir (Version refactorisée)

Ce dépôt contient la **version refactorisée et modulaire** de mon portfolio personnel. Le site a été entièrement revu pour être plus maintenable, clair et structuré selon les bonnes pratiques.

---

## 🎯 Objectifs

* Présenter mon parcours de développeuse web et mes projets.
* Proposer un site responsive, accessible et sécurisé.
* Fournir une base modulaire avec PHP (séparation des responsabilités).
* Inclure un système de données centralisées (config/data.php).

---

## 🛠 Technologies utilisées

* **PHP** – structure modulaire (config, includes, vues)
* **HTML5** – sémantique des pages
* **CSS3** – responsive design avec variables et animations
* **JavaScript Vanilla** – interactions (smooth scroll, animations au scroll)
* **Font Awesome** – icônes
* **GitHub** – versioning et hébergement

---

## 📁 Structure du projet

```
portfolio/
├─ public/            # Point d'entrée et fichiers accessibles publiquement
│  ├─ index.php       # Page principale
│  ├─ style.css       # Feuille de style
│  ├─ script.js       # Script JS pour interactions
│  └─ assets/         # Images, favicon...
├─ config/            # Configuration et données (backend léger)
│  ├─ data.php        # Données content-driven
│  └─ functions.php   # Helpers et sécurité (XSS, badges, etc.)
├─ includes/          # Fragments de vues (partials)
│  ├─ header.php      # Head + navigation
│  ├─ footer.php      # Pied de page
│  └─ sections/       # Sections principales du site
│     ├─ hero.php
│     ├─ competences.php
│     ├─ projets.php
│     ├─ experiences.php
│     └─ contact.php
└─ README.md          # Documentation du projet
```

---

## ▶️ Déploiement local

1. Copier le dossier `portfolio` dans le répertoire racine de ton serveur web (par ex. `/var/www/html/portfolio`).
2. Vérifier que PHP (>=7.4) est installé et configuré.
3. Accéder au site via `http://localhost/portfolio/public`.

---

## 🔒 Bonnes pratiques appliquées

* **Sécurité** : échappement systématique des données avec la fonction `e()`.
* **Modularité** : séparation claire entre données, vues et ressources publiques.
* **Accessibilité** : balises ARIA, navigation claire.
* **Performance** : CSS optimisé avec variables, animations légères.
* **Lisibilité** : code commenté pour un apprentissage facilité.

---

## 👩‍💻 Auteure

**Julie Lenoir**
Développeuse Web & IA – Formation CDA (CEFii)
📫 [julielenoir.devweb@gmail.com](mailto:julielenoir.devweb@gmail.com)
🔗 [linkedin.com/in/julie-lenoir-renou](https://linkedin.com/in/julie-lenoir-renou)
🔗 [github.com/JulieLenoir](https://github.com/JulieLenoir)
