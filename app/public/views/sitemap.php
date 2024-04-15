<?php
header('Content-type: application/xml');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach($props['urls'] as $url) : ?>
<url>
    <loc>https://www.coralnodes.com/<?= $url['slug'] ?>/</loc>
    <lastmod><?= date("Y-m-d\TH:i:sP", strtotime($url["modified_date"])) ?></lastmod>
</url>
<?php endforeach; ?>
</urlset>