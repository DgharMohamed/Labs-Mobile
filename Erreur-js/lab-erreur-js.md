---
marp: true
theme: default
paginate: true
size: 16:9
---

# Lab : Déboguer JavaScript

## Objectif

Apprendre à comprendre une erreur, trouver sa cause et vérifier une correction.

Dans ce lab, on débogue cinq problèmes courants dans une page de blog.

---

## Plan du lab

1. Lire et comprendre les erreurs JavaScript.
2. Diagnostiquer cinq problèmes courants.
3. Corriger les problèmes et vérifier le résultat.

---

## Une méthode simple

Pour chaque problème :

1. Lire le message dans la **Console** et repérer le fichier et la ligne.
2. Vérifier la valeur ou la requête concernée.
3. Corriger la cause, puis refaire la même action.

Pour les erreurs réseau, utiliser l’onglet **Network** et vérifier le statut et la réponse.

---

## 1. `Cannot read properties of null`

**Symptôme :** le formulaire ne réagit pas.

```js
const form = document.getElementById("comment-form");
form.addEventListener("submit", handleSubmit);
```

**Cause :** le script s’exécute avant que le formulaire soit présent dans la page.

**Correction :** charger le script avec `defer`.

```html
<script src="main.js" defer></script>
```

**À vérifier :** l’élément existe et son identifiant est bien `comment-form`.

---

## 2. `Unexpected token '<'`

**Symptôme :** la lecture de la réponse avec `response.json()` échoue.

```js
const response = await fetch("/api/posts.php");
const posts = await response.json();
```

**Cause :** la réponse reçue est probablement une page HTML d’erreur, pas du JSON.

**À faire :** dans **Network**, vérifier le statut et le contenu de la réponse. Corriger l’erreur serveur ou l’adresse de l’API.

```js
if (!response.ok) {
  throw new Error(`Erreur HTTP : ${response.status}`);
}
const posts = await response.json();
```

---

## 3. `posts.forEach is not a function`

**Symptôme :** la réponse est reçue, mais l’affichage plante.

```js
posts.forEach(post => console.log(post.title));
```

**Cause :** `posts` n’est pas un tableau. L’API peut renvoyer `{ data: [...] }`.

```js
const result = await response.json();
const posts = result.data;

if (!Array.isArray(posts)) {
  throw new TypeError("La réponse ne contient pas une liste d'articles.");
}

posts.forEach(post => console.log(post.title));
```

**À vérifier :** regarder la réponse dans **Network** et adapter `result.data` au format réel.

---

## 4. `Failed to fetch`

**Symptôme :** la requête ne reçoit aucune réponse exploitable.

**Causes possibles :** serveur arrêté, URL incorrecte ou requête bloquée par CORS.

**À vérifier :**

- Le serveur fonctionne et l’URL est correcte.
- Dans **Network**, regarder si la requête échoue ou si la Console signale CORS.
- Si c’est CORS, l’autorisation doit être configurée côté serveur.

```js
try {
  const response = await fetch("/api/like.php");
  if (!response.ok) throw new Error(`Erreur HTTP : ${response.status}`);
} catch (error) {
  console.error("La requête a échoué :", error);
}
```

---

## 5. `ReferenceError: displayArticles is not defined`

**Symptôme :** le bouton de rechargement ne fonctionne pas.

**Cause :** la fonction n’est pas définie ou n’est pas accessible au moment de l’appel.

**Correction simple :** charger le fichier qui définit la fonction avant celui qui l’utilise, avec `defer`.

```html
<script src="articles.js" defer></script>
<script src="events.js" defer></script>
```

Vérifier aussi que le nom de la fonction et les chemins des fichiers sont corrects.

---

## À vous de jouer

Pour chaque erreur :

1. Reproduire le problème.
2. Lire l’erreur et trouver la ligne concernée.
3. Vérifier la page ou la réponse réseau.
4. Appliquer la correction.
5. Refaire l’action et confirmer qu’il n’y a plus d’erreur.

### À retenir

**Observer → comprendre → corriger → tester**
