<?php
declare(strict_types=1);

$ROOT = '';
$ASSET = 'assets';

function page(string $path): string
{
    global $ROOT;
    $path = ltrim($path, '/');
    return ($ROOT === '' ? '' : rtrim($ROOT, '/') . '/') . $path;
}

function asset(string $path): string
{
    global $ASSET;
    return rtrim($ASSET, '/') . '/' . ltrim($path, '/');
}

function h(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** E-Learning demo page (full Moodle is not deployed with this site). */
$LMS = page('elearning.php');
