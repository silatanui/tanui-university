# Tanui University

Marketing site for **Tanui University**, a portfolio demonstration project by Tanui Sila.

## What is included

- PHP university website (home, academics, schools, admissions, library, and more)
- Shared header/footer chrome with mega menus
- E-Learning **video preview** (`elearning.php`) so the full Moodle LMS does not need to be hosted

## What is not included

The Moodle / Tanui LMS codebase is intentionally excluded. It is large and better kept on local XAMPP or a VPS. On this site, every **E-Learning** link opens the demo video walkthrough.

## Local / cPanel setup

1. Upload the contents of this folder to your web root (or a subdirectory).
2. Ensure PHP is enabled (PHP 8+ recommended).
3. Open `index.php` in the browser.

Apache: `DirectoryIndex index.php` is set in `.htaccess`, with redirects from old `.html` URLs.

## Demo video

- `assets/video/tanui-lms-demo.mp4` — short student walkthrough (login → courses → weekly content)
- Poster: `assets/video/elearning-poster.png`

## Note

This is a mock portfolio project, not an official institution.
