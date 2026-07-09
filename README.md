# FAQ Accordion Block (WordPress Test)

Implementation of a FAQ (frequently asked questions) module with an animated accordion, built with **pure HTML + CSS** (no frameworks, no JavaScript), plus a **WordPress + ACF** integration example.

## Demo

Open `index.html` in your browser.

## Repository structure

```
├── index.html           # Semantic markup for the block
├── styles.css           # Styles and accordion animation
└── acf-block.php        # ACF implementation example
```

## Technical highlights

- **HTML/CSS only** — no CSS framework.
- **No JavaScript** — the accordion works with native `<details>` / `<summary>` elements.

## WordPress Implementation (ACF)

`acf-block.php` shows how this same block would be structured in a real theme using Advanced Custom Fields:

> This PHP file is a structural example only; it is not meant to run in the test environment (HTML/CSS only).
