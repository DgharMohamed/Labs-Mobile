---
marp: true
theme: default
paginate: true
size: 16:9
---

# lab-agent

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

<!-- _class: light -->

## Introduction

Un **Skill** est un ensemble réutilisable d’instructions, d’exemples et, si besoin, de ressources pour aider un agent IA à réaliser une tâche.

Dans ce lab, vous allez créer un Skill adapté à une tâche que vous réalisez, puis vérifier son fonctionnement dans **Antigravity** et **GitHub Copilot dans VS Code**.

### Objectifs

- Décrire une tâche et son résultat attendu.
- Créer un `SKILL.md` clair et réutilisable.
- Tester et améliorer le Skill dans les deux outils.

---

<!-- _class: light -->

## Problems Encountered

- Une tâche décrite de façon vague produit des résultats irréguliers.
- Des instructions trop longues ou trop générales rendent le Skill difficile à suivre.
- Un Skill présent dans un emplacement non reconnu peut ne pas être découvert.
- Un Skill détecté peut quand même produire un résultat incomplet ou incorrect.

---

<!-- _class: light -->

## Solutions Implemented

- Définir une tâche précise, ses étapes et le livrable attendu.
- Écrire un Skill court, spécialisé et facile à tester.
- Utiliser un emplacement de projet documenté par les deux outils.
- Tester avec la même demande, vérifier le résultat, puis améliorer les instructions.

---

## 1. Choisir une tâche

Choisissez une tâche que vous avez réalisée et que vous pourriez refaire, par exemple :

- rédiger une fiche de révision à partir de notes ;
- résumer un document selon un format précis ;
- vérifier une liste de fichiers selon des critères.

Notez :

1. Le contexte nécessaire.
2. Les étapes à suivre.
3. Les règles à respecter.
4. Le résultat attendu et comment le vérifier.

---

## 2. Créer le Skill

Dans le projet, créez un dossier dédié avec un fichier `SKILL.md` :

```text
.agents/
└── skills/
    └── nom-du-skill/
        └── SKILL.md
```

Le dossier porte un nom court en minuscules. Le fichier commence par un frontmatter YAML avec le nom et une description qui indique quand utiliser le Skill.

---

## 3. Écrire des instructions utiles

Exemple de structure à adapter à votre tâche :

```markdown
---
name: fiche-revision
description: Crée une fiche de révision concise à partir de notes de cours. À utiliser pour organiser et résumer des notes.
---

# Fiche de révision

## Étapes
1. Repérer les idées et termes importants dans les notes fournies.
2. Les organiser par thème sans ajouter d'informations absentes des notes.
3. Ajouter quelques questions de révision basées sur leur contenu.

## Résultat attendu
- Une fiche en français avec des titres et des listes courtes.
- Une section finale de questions de révision.
- Signaler les informations manquantes au lieu de les inventer.
```

Adaptez le contenu à votre tâche. Un Skill doit décrire une compétence ou un processus précis, pas tenter de couvrir toutes les demandes.

---

## 4. Tester dans Antigravity

1. Ouvrez le projet contenant `.agents/skills/nom-du-skill/SKILL.md`.
2. Démarrez une conversation et demandez le Skill par son nom ou sa commande si elle est proposée.
3. Donnez-lui un petit exemple représentatif de la tâche.
4. Vérifiez que le Skill est pris en compte et que le résultat respecte ses instructions.

Si le Skill n’est pas détecté, vérifiez son chemin, son nom, son frontmatter et les consignes de découverte de votre version d’Antigravity.

---

## 5. Tester dans GitHub Copilot pour VS Code

1. Ouvrez le même projet dans VS Code et sélectionnez l’agent Copilot approprié.
2. Vérifiez que le Skill apparaît dans les personnalisations disponibles. Si nécessaire, ouvrez **Chat: Open Customizations** ou utilisez `/skills` avec l’agent local.
3. Demandez la même tâche avec le même exemple.
4. Vérifiez que les instructions sont suivies et que le résultat attendu est produit.

VS Code documente `.agents/skills/` comme emplacement de Skills de projet. La découverte et l’invocation peuvent dépendre de l’agent ou du mode utilisé.

---

## 6. Évaluer et améliorer

Pour chaque outil, vérifiez :

- Le Skill a-t-il été découvert ou invoqué ?
- Les étapes et les règles ont-elles été respectées ?
- Le format de sortie est-il correct ?
- Des informations ont-elles été inventées ou oubliées ?

Corrigez les instructions qui posent problème, puis refaites le test dans **les deux outils**.

---

## Exercice

Créez un Skill pour une tâche que vous avez déjà réalisée.

### Livrables

1. Un dossier de Skill contenant `SKILL.md`.
2. Un exemple d’entrée et le résultat attendu.
3. Un test documenté dans Antigravity.
4. Le même test documenté dans GitHub Copilot pour VS Code.
5. Une amélioration apportée après comparaison des résultats.

---

## À retenir

Un Skill efficace est **spécialisé, clair, réutilisable et vérifiable**.

Créez un Skill adapté à chaque tâche réalisée, testez-le dans Antigravity et dans GitHub Copilot pour VS Code, puis améliorez-le selon les résultats.

### Documentation

- [Antigravity Skills](https://antigravity.google/docs/skills)
- [Agent Skills dans VS Code](https://code.visualstudio.com/docs/agent-customization/agent-skills)
