---
marp: true
theme: default
paginate: true
size: 16:9

---

# Markdown

---

<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## Introduction

Markdown is a lightweight way to format plain text with simple symbols. It is commonly used for documentation, notes, project pages, and presentations.

- **Objectives:** create readable structured documents and recognize common Markdown syntax.
- **Concepts practiced:** headings, emphasis, lists, links, images, code blocks, tables, and task lists.
- Markdown files commonly use the `.md` extension.

---

<!-- _class: light -->

## Problems Encountered

- Inconsistent heading levels make documents hard to scan.
- Missing blank lines or mismatched delimiters can break lists and code blocks.
- Code fences without a language identifier lose syntax highlighting.
- Markdown rendering varies slightly between platforms and extensions.

---

## Solutions Implemented

- Use heading levels in order to show the document hierarchy.
- Leave blank lines around block elements and close every fenced code block.
- Add a language after code fences, such as `javascript` or `bash`.
- Preview the document in the platform where it will be published.

---

<!-- _class: light -->

## Headings and Text

```markdown
# Main heading
## Section heading
### Subsection heading

**Bold text**
*Italic text*
~~Strikethrough~~
```

Use headings to organize ideas, not only to change text size.

---

## Lists and Links

```markdown
- HTML
- CSS
- JavaScript

1. Learn the syntax
2. Practice with examples
3. Preview the result

[Visit GitHub](https://github.com)
```

Use numbered lists when order matters and bullets when it does not.

---

<!-- _class: light -->

## Images and Code

````markdown
![A descriptive image caption](images/example.png)

Use `console.log()` for inline code.

```javascript
const message = "Hello, Markdown!";
console.log(message);
````
```

Use meaningful alt text for images and a language label for fenced code.

---

## Tables and Task Lists

```markdown
| Name | Type |
|:---|:---:|
| HTML | Markup |
| CSS | Styles |

- [x] Create headings
- [x] Add a code example
- [ ] Preview on the target platform
```

Alignment markers are `:---` (left), `:---:` (center), and `---:` (right).

---

<!-- _class: light -->

## Practice: Format a Short Note

Create a Markdown note that includes:

1. A title and two section headings.
2. One ordered list and one unordered list.
3. A link, a language-labeled code block, and a two-column table.
4. A task list that tracks your progress.

Preview the result and fix any formatting that does not render as expected.

---

## Key Takeaways

- Markdown keeps source text simple and readable.
- Headings, lists, and code fences give content structure.
- Preview the rendered document on its intended platform.
