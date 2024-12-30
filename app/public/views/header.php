<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= _is_local() ? ('/assets/202412281.css') : _cdn_('/assets/style-v7.bundle.css') ?>">
    <title><?= _esc($props['seo_data']['title']) ?></title>
    <?php if(!empty($props['seo_data']['canonical'])) : ?>
	<link rel="canonical" href="<?= $props['seo_data']['canonical']; ?>" />
    <?php endif; ?>
<?php if(!empty($props['seo_data']['meta_names'])) : ?>
<?php foreach($props['seo_data']['meta_names'] as $name => $content) : ?>
    <meta name="<?= $name ?>" content="<?= $content ?>" />
<?php endforeach; ?>
<?php endif; ?>
<?php if(!empty($props['seo_data']['meta_properties'])) : ?>
<?php foreach($props['seo_data']['meta_properties'] as $property => $content) : ?>
    <meta property="<?= $property ?>" content="<?= $content ?>" />
<?php endforeach; ?>
<?php endif; ?>

<?php if(!empty($props['seo_data']['json_ld'])) : ?>
    <script type="application/ld+json">
        <?php echo $props['seo_data']['json_ld']; ?>
    </script>
<?php endif; ?>
    <link rel="apple-touch-icon" sizes="180x180" href="<?= _cdn_('/assets/favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= _cdn_('/assets/favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= _cdn_('/assets/favicon/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= _cdn_('/assets/favicon/site.webmanifest') ?>">
</head>
<body class="bg-slate-900 text-slate-100">
    <header class="border-b-2 border-slate-700 bg-slate-800">
        <div class="container mx-auto lg:max-w-3xl flex justify-between items-stretch">
            <div class="logo-area">
                <a href="/" class="py-4 block"><img src="<?= _cdn_('/assets/images/coralnodes-logo-v3-svg-1-small.svg') ?>" alt="CoralNodes" width="192" height="52"></a>
            </div>
            <nav id="site-nav">
                <ul>
                    <li>
                        <a href="/blog/">Blog</a>
                    </li>
                    <li>
                        <a href="/topics/">Topics</a>
                    </li>
                    <li>
                        <a href="/search/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    
