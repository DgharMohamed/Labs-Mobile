---
marp: true
theme: labs-mobile
lang: fr-FR
paginate: true
header: Projet technique · Gestion des domaines professionnels
footer: OFPPT · SoliCode Tanger
size: 16:9
---

<!-- _class: cover -->
![bg brightness:.3](https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1600&q=85)

<div class="brand-row">
<img class="brand-ofppt" src="../assets/OFPPT.jpg" alt="Logo OFPPT">
<img class="brand-solicode" src="../assets/Solicode.png" alt="Logo SoliCode Tanger">
</div>

# Gestion des domaines professionnels

### Un socle pour organiser les offres d'emploi

**Apprenant(e) :** Dghar Mohamed<br>
**Encadrant :** ES-SARRAJ FOUAD

*Projet technique · SoliCode Tanger*

<!--
Remplacer les deux noms avant la soutenance. Le visuel de fond nécessite une connexion Internet.
-->

---

## Plan de présentation

1. Introduction et contexte
2. Besoin et objectifs
3. Analyse des fonctionnalités
4. Conception et modèles
5. Réalisation et prototype
6. Résultats et perspectives

<!--
Présenter le fil conducteur : du problème rencontré jusqu'au résultat livré et aux prochaines évolutions.
-->

---

<!-- _class: section -->

## Introduction

### Le projet en une phrase

Une application web d'administration qui **centralise les domaines professionnels** et prépare le classement des offres d'emploi.

<div class="metric-row">
<div><strong>01</strong><span>interface d'administration</span></div>
<div><strong>02</strong><span>actions disponibles : lister, ajouter</span></div>
<div><strong>JSON</strong><span>stockage des domaines</span></div>
</div>

**Périmètre livré :** consulter les domaines et en créer un avec son nom et sa description.

<!--
Préciser que le projet ne gère pas encore les annonces d'emploi elles-mêmes.
-->

---

<!-- _class: image-slide -->
![bg right:48%](https://images.unsplash.com/photo-1521737711867-e3b97375f902?auto=format&fit=crop&w=1200&q=85)

## Besoin

### Problème observé

- Les domaines professionnels doivent être regroupés au même endroit.
- Sans référentiel commun, le classement futur des offres manque de cohérence.
- L'administrateur a besoin d'ajouter un domaine sans manipuler directement les données.

### Réponse proposée

Une interface simple, reliée à une API, qui permet de **consulter et d'ajouter** des domaines.

<!--
L'image est un visuel d'illustration, pas une capture de l'application.
-->

---

## Analyse des besoins

| Acteur | Besoin | Réponse dans la version actuelle |
|---|---|---|
| Administrateur | Consulter les domaines | Liste chargée depuis l'API |
| Administrateur | Ajouter un domaine | Formulaire nom + description |
| Application | Persister les données | Fichier JSON |
| Futur utilisateur | Trouver des offres par domaine | À développer |

**Hors périmètre actuel :** modifier ou supprimer les domaines, créer et suivre les offres.

<!--
Distinguer ce qui est livré de ce qui reste à développer évite de surévaluer l'avancement.
-->

---

<!-- _class: reveal -->

## Parcours utilisateur · 1/3

### L'administrateur ouvre la gestion des domaines

1. Il ouvre la page d'administration.

<!--
Cette liste est révélée progressivement d'une diapositive à la suivante : Marp ne fournit pas d'animation native par élément de liste.
-->

---

<!-- _class: reveal -->

## Parcours utilisateur · 2/3

### Consultation et saisie

1. Il ouvre la page d'administration.
2. L'application demande la liste à l'API et affiche les domaines.
3. Il saisit le nom et la description d'un nouveau domaine.

---

<!-- _class: reveal -->

## Parcours utilisateur · 3/3

### Enregistrement

1. Il ouvre la page d'administration.
2. L'application demande la liste à l'API et affiche les domaines.
3. Il saisit le nom et la description d'un nouveau domaine.
4. L'API enregistre le domaine en JSON ; la liste est actualisée.

---

<!-- _class: diagram -->

## Conception · architecture

```text
┌──────────────────────┐       fetch()        ┌────────────────────────┐
│ Interface HTML       │ ───────────────────▶ │ API PHP                │
│ JavaScript + Tailwind│ ◀─────────────────── │ GET / POST             │
└──────────────────────┘       JSON           └───────────┬────────────┘
                                                          │
                                                          ▼
                                              ┌────────────────────────┐
                                              │ Domaines.json          │
                                              │ stockage des domaines  │
                                              └────────────────────────┘
```

**Responsabilités :** l'interface collecte et affiche ; l'API traite les requêtes ; le fichier JSON conserve les données.

<!--
Suivre les flèches : chargement GET à l'ouverture, puis POST lors de l'ajout.
-->

---

## Conception · modèle et API

### Modèle métier : `Domaine`

| Attribut | Type / usage |
|---|---|
| `nom` | Texte — libellé du domaine |
| `description` | Texte — détails du domaine |

### Contrat d'échange

```http
GET  /backend/api/api.php   → liste des domaines
POST /backend/api/api.php   → ajoute un domaine
```

```json
{ "nom": "Informatique", "description": "Développement, réseaux et systèmes" }
```

<!--
Le modèle présenté correspond aux données documentées dans le projet ; ne pas supposer d'identifiant ou d'autres champs.
-->

---

<!-- _class: stack -->

## Réalisation · stack technique

| Technologie | Rôle |
|---|---|
| HTML5 | Structure de l'interface |
| Tailwind CSS | Mise en forme |
| JavaScript + `fetch()` | Appels asynchrones à l'API |
| PHP orienté objet | API et logique métier |
| JSON | Persistance des domaines |

**Organisation documentée :** `Domaine` → `GestionDomaine` → `ControllerDomaine` → `api.php`

<!--
Le projet technique décrit cette organisation backend ; l'arborescence complète est dans la documentation du projet.
-->

---

<!-- _class: prototype -->

## Réalisation · prototype fonctionnel

### Écran de gestion des domaines

<div class="mock-window">
<div class="mock-bar">Gestion des domaines <span>Administration</span></div>
<div class="mock-content">
<strong>Domaines professionnels</strong>
<table>
<tr><th>Nom</th><th>Description</th></tr>
<tr><td>Informatique</td><td>Développement, réseaux et systèmes</td></tr>
<tr><td>Commerce</td><td>Vente et relation client</td></tr>
</table>
<div class="mock-form">Nom du domaine&nbsp; [____________] &nbsp; Description&nbsp; [__________] &nbsp; <b>Ajouter</b></div>
</div>
</div>

*Maquette illustrative du parcours décrit — à remplacer par une capture d'écran réelle avant la soutenance.*

<!--
Ne pas présenter cette maquette comme une capture réelle. Montrer l'application en direct si elle est disponible.
-->

---

## Résultat et avancement

### Fonctionnel

- Consultation de la liste des domaines.
- Ajout d'un domaine avec nom et description.
- Enregistrement dans `Domaines.json`.

### Prochaines étapes

- Modifier et supprimer un domaine.
- Ajouter une validation et des retours d'erreur côté interface.
- Développer la gestion complète des offres d'emploi.

<!--
Conclure sur le périmètre réellement achevé, puis présenter les évolutions dans l'ordre de priorité.
-->

---

<!-- _class: closing -->

## Conclusion

Le projet fournit un **premier référentiel administrable de domaines professionnels** : l'interface communique avec une API PHP et les données sont conservées en JSON.

### La suite

Étendre la gestion des domaines, puis relier les offres d'emploi à ces domaines.

**Merci pour votre attention**

<!--
Terminer en rappelant que le résultat est une première version fonctionnelle et que la gestion des offres reste une perspective.
-->

---

<!-- _class: marp-guide -->

## Atelier Marp · syntaxe et thèmes

| Besoin | Syntaxe / pratique |
|---|---|
| Activer Marp | Extension **Marp for VS Code** + `marp: true` |
| Nouvelle diapositive | `---` seul sur une ligne |
| Titres, listes, tableaux, code | Markdown standard et clôtures de code adaptées |
| Numéros, en-tête, pied de page | `paginate`, `header`, `footer` dans le front matter |
| Fond / couleur | `![bg](image.jpg)`, `backgroundColor`, `color` |
| CSS et classes | Thème `labs-mobile` + directives `<!-- _class: ... -->` |
| Notes | Commentaires HTML `<!-- notes du présentateur -->` |

Changer de thème dans le front matter :

```yaml
---
marp: true
theme: default # remplacer par gaia ou uncover pour comparer
---
```

<!--
Les notes du présentateur sont des commentaires HTML : elles restent dans le Markdown et sont accessibles dans le mode présentateur.
-->

---

## Atelier Marp · CSS et export

Le thème personnalisé `theme.css` est déclaré dans `.vscode/settings.json` et sélectionné avec `theme: labs-mobile`.

```bash
npx @marp-team/marp-cli marp.md --theme-set theme.css --allow-local-files --html -o index.html
npx @marp-team/marp-cli marp.md --theme-set theme.css --allow-local-files --pdf --pdf-notes -o presentation.pdf
npx @marp-team/marp-cli marp.md --theme-set theme.css --allow-local-files --pptx -o presentation.pptx
npx @marp-team/marp-cli marp.md --notes -o presentation-notes.txt
```

**Listes progressives :** Marp n'anime pas nativement chaque élément ; dupliquer la diapositive en ajoutant les éléments étape par étape (comme les trois slides du parcours).

**Avant le dépôt :** vérifier l'aperçu VS Code, les noms, les images et chaque fichier exporté.

<!--
Les notes peuvent être exportées en texte avec --notes ; le PDF peut les intégrer avec --pdf-notes et le PPTX les prend en charge.
-->
