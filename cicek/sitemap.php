<?php
/**
 * Çiçəkxalı – Dinamik Sitemap Generator
 * Hər dəfə açılanda sitemap.xml faylını da avtomatik yaradır.
 * URL: /sitemap.php
 */

require_once __DIR__ . '/config.php';

$base = rtrim(BASE_URL, '/') . '/';

$pages = [
    [
        'loc'        => $base . 'index.php',
        'lastmod'    => date('Y-m-d'),
        'changefreq' => 'weekly',
        'priority'   => '1.0',
    ],
    [
        'loc'        => $base . 'services/xalca-yuma.php',
        'lastmod'    => date('Y-m-d'),
        'changefreq' => 'monthly',
        'priority'   => '0.9',
    ],
    [
        'loc'        => $base . 'services/kilim-temizleme.php',
        'lastmod'    => date('Y-m-d'),
        'changefreq' => 'monthly',
        'priority'   => '0.9',
    ],
    [
        'loc'        => $base . 'services/mebel-yuma.php',
        'lastmod'    => date('Y-m-d'),
        'changefreq' => 'monthly',
        'priority'   => '0.8',
    ],
    [
        'loc'        => $base . 'services/yun-xalca-yuma.php',
        'lastmod'    => date('Y-m-d'),
        'changefreq' => 'monthly',
        'priority'   => '0.8',
    ],
];

// XML məzmununu yarat
$xml  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
$xml .= '        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"' . "\n";
$xml .= '        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9' . "\n";
$xml .= '        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n";

foreach ($pages as $page) {
    $xml .= "    <url>\n";
    $xml .= "        <loc>" . htmlspecialchars($page['loc']) . "</loc>\n";
    $xml .= "        <lastmod>" . $page['lastmod'] . "</lastmod>\n";
    $xml .= "        <changefreq>" . $page['changefreq'] . "</changefreq>\n";
    $xml .= "        <priority>" . $page['priority'] . "</priority>\n";
    $xml .= "    </url>\n";
}

$xml .= '</urlset>';

// ── Avtomatik sitemap.xml faylını yaz ──────────────────────────────────────
$xmlPath = __DIR__ . '/sitemap.xml';
file_put_contents($xmlPath, $xml);

// ── Brauzerdə XML olaraq göstər ────────────────────────────────────────────
header('Content-Type: application/xml; charset=utf-8');
echo $xml;
