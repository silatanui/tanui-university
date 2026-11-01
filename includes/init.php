<?php
declare(strict_types=1);

$ROOT = '';
$ASSET = 'assets';

/**
 * On non-local hosts, heavy media is loaded from jsDelivr (GitHub),
 * so cPanel only needs PHP + small CSS/JS files.
 * Set $FORCE_CDN_MEDIA = true to test CDN links on localhost.
 */
$FORCE_CDN_MEDIA = false;
$CDN_MEDIA_BASE = 'https://cdn.jsdelivr.net/gh/silatanui/tanui-university@main/assets';

function is_local_host(): bool
{
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    return (bool) preg_match('/^(localhost|127\.0\.0\.1)(:\d+)?$/i', $host);
}

function use_cdn_media(): bool
{
    global $FORCE_CDN_MEDIA;
    return !empty($FORCE_CDN_MEDIA) || !is_local_host();
}

function page(string $path): string
{
    global $ROOT;
    $path = ltrim($path, '/');
    return ($ROOT === '' ? '' : rtrim($ROOT, '/') . '/') . $path;
}

/** Local or relative path for CSS/JS (always shipped with the site). */
function asset(string $path): string
{
    global $ASSET;
    return rtrim($ASSET, '/') . '/' . ltrim($path, '/');
}

/**
 * Images, brand, and video: local on XAMPP, GitHub CDN on cPanel/production.
 */
function media(string $path): string
{
    global $ASSET, $CDN_MEDIA_BASE;
    $path = ltrim($path, '/');
    if (use_cdn_media()) {
        return rtrim($CDN_MEDIA_BASE, '/') . '/' . $path;
    }
    return rtrim($ASSET, '/') . '/' . $path;
}

function h(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** E-Learning demo page (full Moodle is not deployed with this site). */
$LMS = page('elearning.php');
