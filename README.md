# Tanui University

Marketing site for **Tanui University**, a portfolio demonstration project by Tanui Sila.

## What is included

- PHP university website (home, academics, schools, admissions, library, and more)
- Shared header/footer chrome with mega menus
- E-Learning **video preview** (`elearning.php`) so the full Moodle LMS does not need to be hosted

## What is not included

The Moodle / Tanui LMS codebase is intentionally excluded. It is large and better kept on local XAMPP or a VPS. On this site, every **E-Learning** link opens the demo video walkthrough.

## Local / cPanel setup

1. Ensure PHP is enabled (PHP 8+ recommended).
2. Open `index.php` in the browser.

Apache: `DirectoryIndex index.php` is set in `.htaccess`, with redirects from old `.html` URLs.

### Lightweight cPanel deploy

On **localhost**, images/video load from `assets/`.

On **cPanel / any non-local host**, images, brand mark, and the demo video load from GitHub via jsDelivr:

`https://cdn.jsdelivr.net/gh/silatanui/tanui-university@main/assets/...`

So you can upload mainly:

- `*.php` and `includes/`
- `assets/css/` and `assets/js/` (small)

You do **not** need to upload `assets/images/`, `assets/video/`, or `assets/brand/` to save space. Keep those in GitHub only.

After changing media files, push to GitHub so the CDN picks them up. If a file looks stale, purge jsDelivr for that path or wait for cache expiry.

To force CDN links while testing on XAMPP, set `$FORCE_CDN_MEDIA = true` in `includes/init.php`.

## Demo video

- `assets/video/tanui-lms-demo.mp4` — short student walkthrough (login → courses → weekly content)
- Poster: `assets/video/elearning-poster.png`

## Note

This is a mock portfolio project, not an official institution.
