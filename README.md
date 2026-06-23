# Rajdoot Paints — Company Website

A full marketing website for **Rajdoot Paints Nepal**, built from scratch in plain PHP (no framework). It covers the public-facing catalog, dealer network, events, and lead-generation forms (general contact + dealer applications) that email submissions straight to the business owner with branded HTML emails and an auto-reply to the customer.

> This repository is private. It's shared here as a portfolio piece to demonstrate front-end build quality, PHP form/email handling, and site architecture — not as a deployable product for reuse.

---

## Live pages

| Route | File | What it does |
|---|---|---|
| `/index.php` | [index.php](index.php) | Homepage — animated intro loader, hero, product highlights, family/brand banner |
| `/products.php` | [products.php](products.php) | Full product catalog grid |
| `/product-detail.php` | [product-detail.php](product-detail.php) | Single product detail page |
| `/dealer.php` | [dealer.php](dealer.php) | Dealer locator / directory |
| `/dealer-detail.php` | [dealer-detail.php](dealer-detail.php) | Single dealer profile (gallery, contact, hours) |
| `/become-dealer.php` | [become-dealer.php](become-dealer.php) | Dealer application form → emails the application |
| `/event.php` | [event.php](event.php) | Company events listing |
| `/event-detail.php` | [event-detail.php](event-detail.php) | Single event detail page |
| `/contact.php` | [contact.php](contact.php) | General contact form |

Form submissions are posted (via fetch/AJAX) to dedicated handler scripts:

- [contact-submit.php](contact-submit.php) — general contact inquiries
- [dealer-submit.php](dealer-submit.php) — dealer applications

Both handlers validate input server-side, build a branded HTML email, send a notification to the business owner and an auto-reply confirmation to the submitter, and return a JSON response (`{ ok, message }`) consumed by the front-end JS.

---

## Architecture

Every page follows the same shape: a thin top-level `*.php` file wires together shared layout pieces from [components/](components/), so the navbar/footer/intro logic lives in one place.

```
index.php / products.php / dealer.php / ... (top-level pages)
   │
   ├── components/navbar.php        shared site header/navigation
   ├── components/<page>.php        page-specific markup (home-section, product, dealer, event, contact)
   └── components/footer.php        shared site footer
```

- **No database.** Product, dealer, and event data live as PHP arrays in [data/dealers.php](data/dealers.php) and [data/events.php](data/events.php), keyed by slug — a deliberate placeholder approach until an admin dashboard is added, so content can be edited without touching templates.
- **Styling** is hand-written CSS, split per page and per breakpoint under [css/pc/](css/pc/) (desktop) and [css/mobile/](css/mobile/) (mobile), loaded conditionally via `media` queries so each device only downloads what it needs.
- **Interactivity** ([Java/main.js](Java/main.js)) handles the intro loader animation, Swiper carousels, GSAP/ScrollTrigger scroll animations, and form submission/validation — using deferred `<script>` tags so nothing blocks first paint.
- **Cache-busting**: page CSS/JS links append `?v=<?php echo filemtime(...) ?>` so browsers always fetch the latest asset after a deploy, without manual version bumps.
- **Email** ([includes/mailer.php](includes/mailer.php)) wraps [PHPMailer](https://github.com/PHPMailer/PHPMailer) with shared SMTP setup, reused by both form handlers so credentials and transport config live in exactly one place.

---

## Tech stack

- **Backend:** PHP (procedural, no framework)
- **Email:** [PHPMailer](https://github.com/PHPMailer/PHPMailer) via SMTP, managed with Composer
- **Frontend:** vanilla JS, [GSAP](https://gsap.com/) + ScrollTrigger for scroll animations, [Swiper](https://swiperjs.com/) for carousels, [Bootstrap Icons](https://icons.getbootstrap.com/) / [Phosphor Icons](https://phosphoricons.com/)
- **Fonts:** Google Fonts (Outfit, Playfair Display), loaded non-blocking with `media="print" onload` swap technique

---

## Running it locally

This project expects a PHP environment (e.g. **XAMPP**, **Laragon**, or PHP's built-in server) and Composer for dependencies.

1. **Install dependencies**
   ```bash
   composer install
   ```

2. **Create your local config** — `includes/config.php` is intentionally **not committed** (it holds SMTP credentials). Create it with:
   ```php
   <?php
   define('SMTP_HOST', 'smtp.example.com');
   define('SMTP_LOGIN', 'your-smtp-username');
   define('SMTP_PASSWORD', 'your-smtp-password');
   define('SMTP_PORT', 587);
   define('MAIL_FROM_ADDRESS', 'no-reply@example.com');
   define('MAIL_FROM_NAME', 'Rajdoot Paints');
   define('MAIL_OWNER_ADDRESS', 'owner@example.com');
   ```

3. **Serve the project root** as your web root (e.g. place the folder under `htdocs/` in XAMPP, or run):
   ```bash
   php -S localhost:8000
   ```

4. Visit `http://localhost:8000/index.php` and navigate from there — `contact.php`, `dealer.php`, `products.php`, `event.php`, etc. are all reachable from the navbar.

> Without a valid `includes/config.php`, every page still renders — only the two form submission endpoints (`contact-submit.php`, `dealer-submit.php`) require SMTP credentials to actually send mail.

---

## Project structure

```
.
├── index.php, products.php, dealer.php, event.php, contact.php, become-dealer.php   top-level pages
├── *-detail.php, *-submit.php                                                       detail pages & form handlers
├── components/        shared layout + page sections (navbar, footer, product, dealer, event, contact)
├── data/               placeholder content arrays (dealers, events)
├── includes/           mailer setup + config (config.php gitignored)
├── css/pc/ css/mobile/  per-breakpoint stylesheets
├── Java/main.js         all front-end interactivity
├── assets/              images (products, dealers, hero sections)
└── vendor/              Composer dependencies (gitignored, run `composer install`)
```

---

## Credits

Built and designed by **Prabin Sharma**.
