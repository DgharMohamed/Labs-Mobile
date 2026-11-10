# lab-php

Ce lab explique trois notions essentielles de PHP à travers un exemple simple (la gestion d'articles) avant de passer à Laravel.

## 1. Besoin du projet technique
- **Le problème :**
  - L'application s'arrête brutalement quand une donnée reçue est incorrecte.
  - Les classes risquent d'entrer en conflit sans un système de rangement clair.
  - On recopie le même code dans plusieurs classes sans lien de parenté direct.
- **Pourquoi ce lab :** Comprendre le fonctionnement natif de PHP 8.3 avec des exemples simples et isolés, sans la complexité de Laravel.
- **Ce que cela apporte :** Une application stable qui gère proprement ses erreurs, un code bien rangé (norme PSR-4) et facile à maintenir sans duplication.

## 2. Notions et techniques à apprendre
- **1. Erreurs et Exceptions :**
  - Signaler une anomalie quand une règle n'est pas respectée (`throw new InvalidArgumentException(...)`).
  - Intercepter l'erreur pour réagir proprement sans bloquer le programme (`try ... catch`).
- **2. Namespaces (Espaces de noms) :**
  - Organiser et ranger les classes par dossier (ex. `App\Models`, `App\Repositories`) pour éviter les conflits de nom.
  - Importer et utiliser une classe facilement avec `use`.
- **3. Traits :**
  - Partager des méthodes (ex. gestion de la date de création) entre plusieurs classes différentes sans duplication (`use MonTrait;`).

## 3. Réalisation attendue
- **Format :** Trois petits scripts PHP 8.3 autonomes et exécutables en ligne de commande dans le dossier `pratique/`, avec un guide explicatif (`tutoriel.md`) pour chacun :
  - `pratique/erreurs-exceptions/` : vérification du titre d'un article et capture de l'erreur.
  - `pratique/namespaces/` : séparation claire entre un modèle et un dépôt sous le namespace `App\`.
  - `pratique/traits/` : ajout automatique de dates à un article et à un commentaire via un trait.
- **Pour tester rapidement :**
  ```powershell
  php .\pratique\erreurs-exceptions\exemple.php
  php .\pratique\namespaces\demo.php
  php .\pratique\traits\exemple.php
  ```
- **Livrable final :** Un support de présentation synthétique dans `presentation.md` (format Marp).

