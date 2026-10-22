---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section { background: #111827; color: #f9fafb; font-family: Inter, system-ui, sans-serif; padding: 48px 64px; }
  h1, h2 { font-family: Anton, Impact, sans-serif; color: #fbbf24; }
  h1 { font-size: 2.4em; } h2 { font-size: 1.65em; }
  section.light { background: #fffbeb; color: #111827; }
  section.light h1, section.light h2 { color: #92400e; }
  code { background: #ffffff20; padding: 2px 5px; }
---

# Git and GitHub

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## Introduction

Git records changes to files over time. GitHub hosts Git repositories online and supports collaboration around them.

- **Objectives:** understand version control, the change lifecycle, and remote collaboration.
- **Concepts:** repository, working directory, staging area, commit, branch, remote, merge, pull request, and issue.
- **Tools practiced:** `git` commands and GitHub repositories.

---

<!-- _class: light -->

## Problems Encountered

- Changes can be lost or hard to trace when no version history exists.
- Committing without reviewing the staging area can include unintended files.
- Divergent local and remote changes can create conflicts during synchronization.
- Committing directly to the main branch makes parallel work harder to review.

---

## Solutions Implemented

- Check `git status` and inspect `git diff` before staging and committing.
- Stage only intended files and write commits that describe one coherent change.
- Pull or fetch remote changes regularly and resolve conflicts by reviewing both versions.
- Use feature branches and pull requests to isolate and review collaborative changes.

---

<!-- _class: light -->

## Git and GitHub

| Tool | Role |
|:---|:---|
| Git | Tracks project history locally and supports branching and merging |
| GitHub | Hosts repositories and provides collaboration features such as issues and pull requests |

Git is the version control system; GitHub is one service for hosting and collaborating on Git repositories.

---

## The Change Lifecycle

```text
Working directory → Staging area → Local repository → Remote repository
      edit              git add          git commit          git push
```

```bash
git status
git diff
git add src/app.js
git diff --staged
git commit -m "feat: add category filter"
git push
```

---

<!-- _class: light -->

## Setup and Core Commands

```bash
git --version
git config --global user.name "Your Name"
git config --global user.email "you@example.com"
git init
git status
git log --oneline
```

| Command | Purpose |
|:---|:---|
| `git add` | Stage selected changes |
| `git commit` | Save a snapshot in local history |
| `git diff` | Review unstaged or staged changes |
| `git clone` | Copy a remote repository locally |

---

## Branches and Remotes

```bash
git switch -c feature/navbar
# Make and review the change
git add src/navbar.js
git commit -m "feat: add navbar"
git push -u origin feature/navbar
```

Open a pull request on GitHub so the branch can be reviewed and integrated. Use `git pull` to fetch and integrate updates from the configured remote.

---

<!-- _class: light -->

## Issues and Collaboration

- Use **issues** to describe work, defects, and discussion.
- Link a branch or pull request to the issue it addresses.
- Review changes before merging and communicate any requested revisions.
- Keep commits focused so history is easier to understand.

---

## Key Takeaways

- Git provides a local history of project changes.
- Staging lets you choose what goes into a commit.
- Branches and pull requests support safer collaboration.
- Review status and diffs before sharing changes.
