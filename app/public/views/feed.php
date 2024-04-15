<?php
header('Content-type: application/rss+xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<rss version="2.0">
    <channel>
        <title>CoralNodes Blog Articles</title>
        <link>https://www.coralnodes.com/articles/</link> <!-- URL to your website -->
        <description>blogging, web development, programming articles</description>
        <language>en-us</language>
        <?php foreach($props['urls'] as $url) : ?>
        <item>
            <title><?php echo htmlspecialchars($url['title']); ?></title>
            <description><?php echo htmlspecialchars($url['excerpt']); ?></description>
            <link>https://www.coralnodes.com/<?php echo htmlspecialchars($url['slug']); ?>/</link>
            <pubDate><?php echo date("D, d M Y H:i:s O", strtotime($url['published_date'])); ?></pubDate>
        </item>
        <?php endforeach; ?>
    </channel>
</rss>