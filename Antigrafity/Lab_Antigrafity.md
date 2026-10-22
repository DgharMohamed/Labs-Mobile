---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section { background: #111827; color: #f9fafb; font-family: Inter, system-ui, sans-serif; padding: 48px 64px; }
  h1, h2 { font-family: Anton, Impact, sans-serif; color: #a7f3d0; }
  h1 { font-size: 2.4em; } h2 { font-size: 1.65em; }
  section.light { background: #ecfdf5; color: #111827; }
  section.light h1, section.light h2 { color: #047857; }
  code { background: #ffffff20; padding: 2px 5px; }
---

# Antigravity

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## Introduction

Antigravity is an AI-assisted development environment where agents can help plan work, edit code, run commands, and inspect results.

- **Objectives:** understand a supervised agent workflow and write clear task prompts.
- **Concepts:** plans, review, execution, verification, rules, and reusable skills.
- **Practice:** describe a scoped coding task and decide how to check its result.

---

<!-- _class: light -->

## Problems Encountered

- Agent interfaces, names, and menu locations can vary between versions.
- A vague request can lead to changes outside the intended files or scope.
- Generated work can look plausible while containing errors or unverified assumptions.
- Rules and skills can be confused: rules are standing guidance, while skills provide task-specific workflows.

---

## Solutions Implemented

- Check the installed version and its current interface before following menu-specific instructions.
- State the goal, context, scope, constraints, and completion condition in each prompt.
- Review the plan and inspect the resulting changes; run relevant checks before accepting the work.
- Use rules for persistent project guidance and skills for reusable specialist procedures.

---

<!-- _class: light -->

## A Supervised Agent Workflow

**Plan → Review → Execute → Verify**

1. Describe the task and ask for a plan when the change needs one.
2. Check the files and steps the plan proposes.
3. Let the agent make the agreed changes.
4. Inspect the diff and run the appropriate checks yourself.

---

## Write a Useful Prompt

```text
Goal: Add category filtering to the article list.
Context: Laravel application using Blade and Eloquent.
Scope: Work in the article list and its route; preserve existing styling.
Constraints: Use existing project conventions and validate the selected category.
Done when: The list filters correctly and an empty result is handled.
Output: Summarize changed files and checks performed.
```

Include enough context to make the task clear while keeping the scope reviewable.

---

<!-- _class: light -->

## Rules and Skills

| Item | Purpose | Example |
|:---|:---|:---|
| Rule | Ongoing project guidance | Keep controllers focused; do not edit `.env` |
| Skill | Reusable steps for a kind of task | Create a Laravel CRUD with validation |

Example rule file: `.agents/rules/backend-developer.md`.

Example skill file: `.agents/skills/laravel-crud/SKILL.md`.

---

## Example Skill

```markdown
---
name: laravel-crud
description: Builds a Laravel CRUD when requested.
---
# Laravel CRUD
1. Create the migration and model.
2. Add a controller with validation.
3. Define routes and Blade views.
4. Check the implementation against the requested behavior.
```

Ask for a skill when the task matches its purpose and provide any project-specific constraints.

---

<!-- _class: light -->

## Key Takeaways

- Give the agent a clear goal and boundaries.
- Review proposed changes and verify the result.
- Treat generated output as work to inspect, not as automatically correct.

<small>Antigravity features and interface details may change; confirm them in the version used for the lab.</small>
