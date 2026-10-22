---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section { background: #111827; color: #f9fafb; font-family: Inter, system-ui, sans-serif; padding: 48px 64px; }
  h1, h2 { font-family: Anton, Impact, sans-serif; color: #fca5a5; }
  h1 { font-size: 2.4em; } h2 { font-size: 1.65em; }
  section.light { background: #fff1f2; color: #111827; }
  section.light h1, section.light h2 { color: #be123c; }
  code { background: #ffffff20; padding: 2px 5px; }
---

# Laravel

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## Introduction

Laravel is an open-source PHP framework used mainly on the server to build dynamic websites, business applications, and APIs.

- **Objectives:** understand Laravel's role and follow a request through an application.
- **Concepts:** routes, controllers, MVC, Eloquent, migrations, Blade, middleware, and validation.
- Laravel provides structure and reusable tools; it does not replace PHP or web fundamentals.

---

<!-- _class: light -->

## Problems Encountered

- New framework conventions and directory locations can be unfamiliar.
- Putting routing, data access, and HTML output in one place makes code harder to maintain.
- Database structure and application models can fall out of sync.
- Unvalidated input or unescaped output can cause incorrect behavior and security issues.

---

## Solutions Implemented

- Follow Laravel conventions and inspect the relevant route, controller, model, and view files.
- Separate request handling, data access, and presentation using MVC responsibilities.
- Use migrations to version database structure and Eloquent models to work with records.
- Validate incoming data and use Blade's escaped `{{ }}` output for user-provided values.

---

<!-- _class: light -->

## Laravel in a Web Application

- Receives HTTP requests and matches them to routes.
- Applies application logic and reads or changes data.
- Returns an HTML page or a structured response such as JSON.
- Provides conventions that help organize and evolve the application.

---

## MVC Responsibilities

| Part | Responsibility | Laravel example |
|:---|:---|:---|
| Model | Represents and accesses application data | Eloquent model |
| View | Presents information to the user | Blade template |
| Controller | Coordinates request handling | PHP controller |

```text
Browser → Route → Controller → Model ↔ Database
                      ↓
                 Blade View → HTML response
```

---

<!-- _class: light -->

## Common Laravel Tools

- **Routing:** maps URLs and HTTP methods to handlers.
- **Middleware:** filters requests, for example for authentication.
- **Eloquent ORM:** works with database records through PHP models.
- **Migrations:** records changes to database structure.
- **Blade:** builds reusable HTML views.
- **Validation and tests:** check input and application behavior.

---

## Example: a Route

```php
<?php

use Illuminate\Support\Facades\Route;

Route::get('/bonjour', function () {
    return 'Bonjour !';
});
```

- File: `routes/web.php`
- Method: `GET`
- Path: `/bonjour`
- Response: the text `Bonjour !`

---

<!-- _class: light -->

## Example: Controller and View

```php
Route::get('/articles', [ArticleController::class, 'index']);

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles', ['articles' => $articles]);
    }
}
```

The controller obtains data through the model and passes it to `resources/views/articles.blade.php`.

---

## When to Use Laravel

- Dynamic websites and business applications.
- Applications with users, roles, and forms.
- Data management workflows backed by a database.
- APIs for mobile applications or browser front ends.

For practice, compare a simple Laravel route with the same behavior in plain PHP and identify what the framework provides.

---

<!-- _class: light -->

## Key Takeaways

- Laravel is a server-side PHP framework.
- MVC separates data, presentation, and request coordination.
- Routes, Eloquent, migrations, and Blade are core tools.
- Sound design, testing, and security practices remain essential.

**Resources:** [Laravel documentation](https://laravel.com/docs) · [PHP manual](https://www.php.net/manual/)
