---
marp: true
theme: default
paginate: true
size: 16:9

---

# MVC Architecture

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## Introduction

MVC means Model–View–Controller. It separates application data, presentation, and request coordination into distinct responsibilities.

- **Objectives:** explain each MVC role and follow a request through a Laravel example.
- **Concepts:** Eloquent models, Blade views, controllers, routes, and HTTP requests.
- **Practice:** build an article list flow from route to HTML response.

---

<!-- _class: light -->

## Problems Encountered

- Mixing database queries, request handling, and HTML in one file makes changes difficult to isolate.
- A view can become coupled to data access when it queries records directly.
- Controllers can become hard to maintain when they contain presentation markup.
- Confusing a route with a controller can obscure how a request is dispatched.

---

## Solutions Implemented

- Put data access in the model, presentation in the view, and request coordination in the controller.
- Define a route that maps an HTTP method and URL to a controller action.
- Pass the data needed by a view from the controller.
- Keep each layer focused and follow the request flow when debugging.

---

<!-- _class: light -->

## The Model

An Eloquent model represents and provides access to a type of application data.

**`app/Models/Article.php`**

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
}
```

By convention, Laravel associates `Article` with the `articles` table. `Article::all()` retrieves its records.

---

## The View

Blade templates display information passed to them by the controller.

**`resources/views/articles.blade.php`**

```html
<h1>Articles</h1>
<ul>
    @forelse ($articles as $article)
        <li>
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->content }}</p>
        </li>
    @empty
        <li>No articles yet.</li>
    @endforelse
</ul>
```

`@forelse` handles an empty list; `{{ ... }}` escapes output by default.

---

<!-- _class: light -->

## Route and Controller

**Route in `routes/web.php`:**

```php
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/articles', [ArticleController::class, 'index']);
```

**Controller action:**

```php
public function index()
{
    $articles = Article::all();
    return view('articles', ['articles' => $articles]);
}
```

---

## Follow the Request

```text
Browser -- GET /articles --> Route --> ArticleController@index
                                      |           |
                                      |           +--> Article model --> Database
                                      |                         |
Browser <-- HTML response <-- Blade view <-- articles collection
```

1. The route dispatches the request to `index`.
2. The controller asks the model for articles.
3. The controller passes the collection to the Blade view.
4. The view renders the HTML response.

---

<!-- _class: light -->

## Responsibilities at a Glance

| Part | Responsibility in the article example |
|:---|:---|
| Route | Maps `GET /articles` to the controller action |
| Model | Retrieves article records through Eloquent |
| Controller | Coordinates retrieval and response rendering |
| View | Displays the article collection as HTML |

---

## Key Takeaways

- MVC separates data access, presentation, and request coordination.
- The route directs a request to a controller action.
- The model accesses records; the view renders the data it receives.
- Clear responsibilities make an application easier to understand and change.

**Source:** [Laravel documentation](https://laravel.com/docs) (Eloquent, views, and controllers).
