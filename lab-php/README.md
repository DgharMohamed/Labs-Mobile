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

Prompt à soumettre à l'IA pour générer les exemples pratiques du lab :

```text
Agis en tant que développeur expert PHP. 
Dans le dossier "pratique/", crée trois exemples pratiques, autonomes et exécutables en PHP 8.3 CLI, accompagnés d'un fichier "tutoriel.md" pour chaque notion :

1. Erreurs et Exceptions (dossier pratique/erreurs-exceptions/) :
   - Créer une classe Article avec validation des données.
   - Lever une InvalidArgumentException si le titre est vide ou invalide.
   - Capturer l'exception via try...catch avec un message propre sans interrompre brutalement le script.

2. Namespaces (dossier pratique/namespaces/) :
   - Structurer le code sous le namespace racine "App\".
   - Séparer la classe métier (App\Models\Article) et la classe de stockage (App\Repositories\ArticleRepository).
   - Implémenter un autoloader simple conforme PSR-4 et importer avec le mot-clé "use".

3. Traits (dossier pratique/traits/) :
   - Définir un trait partagé (ex: HasTimestamps) gérant la date de création et de modification.
   - Appliquer ce trait sur deux classes indépendantes (Article et Commentaire).

Consignes :
- Code léger, sans framework ni base de données externe.
- Utiliser le typage strict : declare(strict_types=1);.
- Fournir les commandes PowerShell pour tester chaque exemple en ligne de commande.
```
