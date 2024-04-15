<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style.bundle.css">
    <title><?= $props['seo_data']['title'] ?></title>
    <?php if(!empty($props['seo_data']['canonical'])) : ?>
	<link rel="canonical" href="<?= $props['seo_data']['canonical']; ?>" />
    <?php endif; ?>
<?php if(!empty($props['seo_data']['meta_names'])) : ?>
<?php foreach($props['seo_data']['meta_names'] as $name => $content) : ?>
    <meta name="<?= $name ?>"content="<?= $content ?>" />
<?php endforeach; ?>
<?php endif; ?>
<?php if(!empty($props['seo_data']['meta_properties'])) : ?>
<?php foreach($props['seo_data']['meta_properties'] as $property => $content) : ?>
    <meta property="<?= $property ?>"content="<?= $content ?>" />
<?php endforeach; ?>
<?php endif; ?>

<?php if(!empty($props['seo_data']['json_ld'])) : ?>
    <script type="application/ld+json">
        <?php echo $props['seo_data']['json_ld']; ?>
    </script>
<?php endif; ?>
    
</head>
<body class="bg-slate-900 text-slate-100 font-firacode">
    <header class="border-b-2 border-slate-700 bg-slate-800">
        <div class="container mx-auto lg:max-w-3xl flex justify-between items-stretch">
            <div class="logo-area">
                <a href="/" class="py-4 block"><img src="https://cdn-2.coralnodes.com/coralnodes/uploads/2023/10/coralnodes-logo-v3-svg-1-small.svg" alt="CoralNodes" width="192" height="52"></a>
            </div>
            <nav>
                <ul class="flex h-full [&>li>a]:flex [&>li>a]:h-full [&>li>a]:px-2 [&>li>a]:items-center [&>li>a:hover]:-translate-y-0.5 [&>li>a:hover]:text-brand-pink [&>li>a]:transition items-center">
                    <li>
                        <a href="/articles/">articles</a>
                    </li>
                    <li>
                        <form action="/search">
                            <input type="text" name="keyword" value="" class="p-2 bg-slate-700 sm:max-w-[10rem] lg:max-w-xs" placeholder="search site...">
                        </form>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    
