# Labs-Mobile

Welcome to the `Labs-Mobile` repository! This repository collects learning labs, presentations, exercises, and project-planning resources for software development.

## Labs

| Lab | Description | Material |
| --- | --- | --- |
| Labs and Technical Stack | Discover the purpose of hands-on labs and identify the technologies used in the technical project. | [Lab Stack presentation](lab-stack/lab-stack.md) |
| Markdown | Learn Markdown syntax for headings, formatting, lists, links, images, code, tables, and task lists. | [Markdown guide](lab-markdown/markdown.md) |
| Marp | Create slide decks with Markdown and Marp, and view an exported presentation in a browser. | [Marp presentation](lab-marp/marp.md) · [Exported slides](lab-marp/index.html) |
| Antigravity | Practice a supervised AI-agent workflow: plan, review, execute, and verify. | [Antigravity lab](lab-antigrafity/Lab_Antigrafity.md) |
| Git and GitHub | Learn version control, commits, branches, remotes, issues, and pull-request collaboration. | [Git lab](lab-git/git.md) |
| MVC Architecture | Understand Model–View–Controller and follow a request through a Laravel application. | [MVC presentation](lab-laravel/MVC/presentation-mvc.md) |
| JavaScript Debugging | Diagnose and fix five common DOM, API, data-format, network, and script-order errors. | [Lab instructions](lab-erreur-js/lab-erreur-js.md) |
| Clear Prompts | Write, test, and refine prompts using context, objective, instructions, and expected result. | [Prompt lab](lab-prompt-task/lab-prompt-task.md) |
| Development Environment | Learn about IDEs and configure useful VS Code extensions. | [Starter lab](lab-starter/lab-starter.md) |
| Agent Skills | Create and evaluate a reusable `SKILL.md` in Antigravity and GitHub Copilot for VS Code. | [Agent skills lab](lab-agent/lab-agent.md) |
| Lab Planning | Turn a real need into a focused lab with a problem, steps, technology, deliverables, and validation criteria. | [Lab planning guide](lab-planing/lab-planing.md) |

### JavaScript debugging exercises

The JavaScript debugging lab contains five hands-on exercises:

1. [DOM element not found](lab-erreur-js/exercices/erreur-1-dom/index.html)
2. [API response is not JSON](lab-erreur-js/exercices/erreur-2-reponse-api/index.html)
3. [Unexpected data format](lab-erreur-js/exercices/erreur-3-format-donnees/index.html)
4. [Network request failure](lab-erreur-js/exercices/erreur-4-reseau/index.html)
5. [Script loading order](lab-erreur-js/exercices/erreur-5-ordre-scripts/index.html)

## Project and reference material

- [Laravel project](lab-laravel/LaravelProjet/README.md): a Laravel application project.
- [Report outline](lab-plan_rapport/Plan_Rapport.md): a suggested structure for a project report.
- [Lab topic list](determiner_la_liste_des%20_labs_a_realiser.md): topics identified for future or additional labs.

## Getting started

Open the material linked above to read a lab. For the JavaScript exercises that use `fetch()`, start a local PHP server from the `lab-erreur-js` directory:

```bash
php -S localhost:8000
```

Then open the exercise pages in your browser through the local server.
