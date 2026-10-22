---
marp: true
theme: default
paginate: true
size: 16:9

---

# Marp

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## Introduction

Marp is a Markdown-based presentation ecosystem. A plain-text Markdown source can be rendered as a slide deck and exported to several formats.

- **Objectives:** understand Marp's slide syntax and create a simple presentation.
- **Concepts:** front matter, slide separators, themes, directives, and export.
- **Tools practiced:** Marp for VS Code and the Marp CLI.

---

<!-- _class: light -->

## Problems Encountered

- A missing `marp: true` setting can prevent Markdown from being treated as a Marp deck.
- Missing or misplaced `---` separators can combine content into the wrong slide.
- Dense slides and oversized code examples can overflow the slide canvas.
- A presentation may look different across themes or exported formats.

---

## Solutions Implemented

- Add valid YAML front matter at the beginning of the source file.
- Use `---` on its own line between slides and preview the slide count.
- Keep one main idea per slide and split long examples across slides.
- Check the rendered preview and the final export in the intended format.

---

<!-- _class: light -->

## What Marp Provides

- Markdown formatting for headings, lists, links, images, and code.
- Built-in themes such as `default`, `gaia`, and `uncover`.
- Export to HTML, PDF, PowerPoint, PNG, and JPEG.
- Text-based source that is easy to read, diff, and version with Git.

---

## Minimal Presentation

````markdown
---
marp: true
theme: default
paginate: true
size: 16:9
---

# My presentation

- First key point
- Second key point
````

The front matter controls deck-wide options; the first heading begins the first slide.

---

<!-- _class: light -->

## Directives and Slide Classes

```markdown
<!-- Global values belong in YAML front matter. -->
<!-- _class: lead -->

# A lead slide

---

<!-- _class: light -->

## A light slide
```

Use global directives for deck settings and the underscore-prefixed form for slide-local settings.

---

## Start a Deck

**VS Code:** install Marp for VS Code, open a `.md` file, and use the Marp preview.

**CLI:** install `@marp-team/marp-cli`, then run:

```bash
npx @marp-team/marp-cli slides.md --html
npx @marp-team/marp-cli slides.md --pdf
npx @marp-team/marp-cli slides.md --pptx
```

---

<!-- _class: light -->

## Slide Design Checklist

- Keep a clear title and a single main point per slide.
- Use concise text and language-labeled code blocks.
- Check contrast, font size, and content overflow in preview.
- Recheck the generated file after export.

---

## Key Takeaways

- Marp turns Markdown into slides using front matter and separators.
- Themes and CSS can shape the deck's appearance.
- Preview and inspect exports before presenting.
